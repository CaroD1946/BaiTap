<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('course_sections', function (Blueprint $table) {
            $table->id();
            $table->string('section_code', 255)->nullable();
            $table->string('course_name', 255)->nullable();
            $table->string('lecturer', 255)->nullable();
            $table->integer('credits')->default(0);
            $table->integer('max_students')->default(0);
            $table->string('status', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('course_sections');
    }
};
