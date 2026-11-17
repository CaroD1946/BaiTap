<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_code', 255)->nullable();
            $table->string('fullname', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->date('birthdate')->nullable();
            $table->string('class_name', 255)->nullable();
            $table->double('gpa', 15, 2)->default(0.00);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
