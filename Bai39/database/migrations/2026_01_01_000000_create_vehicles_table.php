<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('license_plate', 255)->nullable();
            $table->string('vehicle_type', 255)->nullable();
            $table->double('payload_tons', 15, 2)->default(0.00);
            $table->date('inspection_date')->nullable();
            $table->string('status', 255)->nullable();
            $table->string('driver_name', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
