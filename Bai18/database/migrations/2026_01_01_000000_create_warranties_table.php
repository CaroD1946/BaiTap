<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('warranties', function (Blueprint $table) {
            $table->id();
            $table->string('warranty_code', 255)->nullable();
            $table->string('product_name', 255)->nullable();
            $table->string('customer_name', 255)->nullable();
            $table->date('received_date')->nullable();
            $table->string('status', 255)->nullable();
            $table->text('issue_description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('warranties');
    }
};
