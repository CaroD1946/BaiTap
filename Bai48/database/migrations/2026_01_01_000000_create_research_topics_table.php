<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('research_topics', function (Blueprint $table) {
            $table->id();
            $table->string('topic_code', 255)->nullable();
            $table->string('topic_name', 255)->nullable();
            $table->string('supervisor', 255)->nullable();
            $table->string('field', 255)->nullable();
            $table->double('funding', 15, 2)->default(0.00);
            $table->string('status', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('research_topics');
    }
};
