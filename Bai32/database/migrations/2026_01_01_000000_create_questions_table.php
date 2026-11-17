<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('topic', 255)->nullable();
            $table->text('question_text')->nullable();
            $table->string('difficulty', 255)->nullable();
            $table->string('correct_answer', 255)->nullable();
            $table->double('points', 15, 2)->default(0.00);
            $table->text('explanation')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
