<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('real_estates', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255)->nullable();
            $table->string('property_type', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->double('area_m2', 15, 2)->default(0.00);
            $table->double('price_billion', 15, 2)->default(0.00);
            $table->string('status', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('real_estates');
    }
};
