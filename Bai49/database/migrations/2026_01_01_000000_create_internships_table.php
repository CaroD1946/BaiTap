<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('internships', function (Blueprint $table) {
            $table->id();
            $table->string('student_code', 255)->nullable();
            $table->string('student_name', 255)->nullable();
            $table->string('company_name', 255)->nullable();
            $table->string('internship_role', 255)->nullable();
            $table->date('start_date')->nullable();
            $table->string('status', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('internships');
    }
};
