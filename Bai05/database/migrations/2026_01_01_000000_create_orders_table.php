<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_code', 255)->nullable();
            $table->string('customer_name', 255)->nullable();
            $table->string('shipping_address', 255)->nullable();
            $table->double('total_amount', 15, 2)->default(0.00);
            $table->string('status', 255)->nullable();
            $table->date('order_date')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
