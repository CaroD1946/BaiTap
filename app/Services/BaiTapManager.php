<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use PDO;
use Exception;

class BaiTapManager
{
    protected static $metaCache = null;

    /**
     * Load metadata of all 50 exercises
     */
    public static function getAllExercises()
    {
        if (self::$metaCache !== null) {
            return self::$metaCache;
        }

        $path = database_path('data/all_exercises_meta.json');
        if (!file_exists($path)) {
            $path = storage_path('app/all_exercises_meta.json');
        }
        if (!file_exists($path)) {
            $path = base_path('storage/app/all_exercises_meta.json');
        }

        if (file_exists($path)) {
            self::$metaCache = json_decode(file_get_contents($path), true);
        } else {
            self::$metaCache = [];
        }

        return self::$metaCache;
    }

    /**
     * Get single exercise by number (1 to 50)
     */
    public static function getExercise($num)
    {
        $all = self::getAllExercises();
        foreach ($all as $ex) {
            if ((int)$ex['num'] === (int)$num) {
                return $ex;
            }
        }
        return null;
    }

    /**
     * Switch dynamic database connection to db_baiXX
     */
    public static function switchDb($dbName)
    {
        $host = config('database.connections.dynamic_bai.host', '127.0.0.1');
        $port = config('database.connections.dynamic_bai.port', '3306');
        $user = config('database.connections.dynamic_bai.username', 'root');
        $pass = config('database.connections.dynamic_bai.password', '');

        // Ensure database exists
        try {
            $pdo = new PDO("mysql:host={$host};port={$port}", $user, $pass, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
            $pdo->exec("CREATE DATABASE IF NOT EXISTS `{$dbName}` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
        } catch (Exception $e) {
            // Log or ignore if already connected
        }

        Config::set('database.connections.dynamic_bai.database', $dbName);
        DB::purge('dynamic_bai');
        DB::reconnect('dynamic_bai');
    }

    /**
     * Ensure database, table and sample data exist for an exercise
     */
    public static function ensureDatabaseAndTable($num, $forceReseed = false)
    {
        $ex = self::getExercise($num);
        if (!$ex) {
            throw new Exception("Không tìm thấy bài tập số {$num}");
        }

        $dbName = $ex['db_name'];
        $tableName = $ex['table'];

        self::switchDb($dbName);

        // Check if table exists
        $tableExists = Schema::connection('dynamic_bai')->hasTable($tableName);

        if (!$tableExists || $forceReseed) {
            if ($forceReseed && $tableExists) {
                Schema::connection('dynamic_bai')->dropIfExists($tableName);
            }

            // Create table
            Schema::connection('dynamic_bai')->create($tableName, function (Blueprint $table) use ($ex) {
                $table->id();
                foreach ($ex['fields'] as $f) {
                    $type = $f['type'] ?? 'text';
                    $name = $f['name'];

                    switch ($type) {
                        case 'number':
                            if (str_contains($f['rules'] ?? '', 'integer')) {
                                $table->integer($name)->default(0);
                            } else {
                                $table->double($name, 15, 2)->default(0.00);
                            }
                            break;
                        case 'date':
                            $table->date($name)->nullable();
                            break;
                        case 'textarea':
                            $table->text($name)->nullable();
                            break;
                        default:
                            $table->string($name, 255)->nullable();
                            break;
                    }
                }
                $table->timestamps();
            });

            // Seed sample data
            if (!empty($ex['samples'])) {
                foreach ($ex['samples'] as $sample) {
                    $data = $sample;
                    $data['created_at'] = now();
                    $data['updated_at'] = now();
                    DB::connection('dynamic_bai')->table($tableName)->insert($data);
                }
            }
        }

        return true;
    }

    /**
     * Batch initialize all 50 databases in phpMyAdmin / MySQL
     */
    public static function initAllDatabases($forceReseed = false)
    {
        $all = self::getAllExercises();
        $results = [];

        foreach ($all as $ex) {
            $num = $ex['num'];
            try {
                self::ensureDatabaseAndTable($num, $forceReseed);
                $count = DB::connection('dynamic_bai')->table($ex['table'])->count();
                $results[$num] = [
                    'status' => 'success',
                    'db' => $ex['db_name'],
                    'table' => $ex['table'],
                    'records' => $count
                ];
            } catch (Exception $e) {
                $results[$num] = [
                    'status' => 'error',
                    'message' => $e->getMessage()
                ];
            }
        }

        return $results;
    }

    /**
     * Get DB info for an exercise
     */
    public static function getDbInfo($num)
    {
        $ex = self::getExercise($num);
        if (!$ex) return null;

        $dbName = $ex['db_name'];
        $tableName = $ex['table'];

        try {
            self::switchDb($dbName);
            $hasTable = Schema::connection('dynamic_bai')->hasTable($tableName);
            $count = $hasTable ? DB::connection('dynamic_bai')->table($tableName)->count() : 0;
            return [
                'exists' => true,
                'has_table' => $hasTable,
                'records' => $count
            ];
        } catch (Exception $e) {
            return [
                'exists' => false,
                'has_table' => false,
                'records' => 0,
                'error' => $e->getMessage()
            ];
        }
    }
}
