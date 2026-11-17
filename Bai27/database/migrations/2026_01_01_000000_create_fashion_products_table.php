<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fashion_products', function (Blueprint $table) {
            $table->id();
            $table->string('product_code', 255)->nullable();
            $table->string('name', 255)->nullable();
            $table->string('category', 255)->nullable();
            $table->string('size', 255)->nullable();
            $table->double('price', 15, 2)->default(0.00);
            $table->integer('stock')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fashion_products');
    }
};
