<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->string('phone_code', 255)->nullable();
            $table->string('phone_name', 255)->nullable();
            $table->string('brand', 255)->nullable();
            $table->double('price', 15, 2)->default(0.00);
            $table->string('storage_gb', 255)->nullable();
            $table->integer('stock')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('phones');
    }
};
