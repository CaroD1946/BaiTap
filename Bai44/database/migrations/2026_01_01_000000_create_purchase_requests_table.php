<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('purchase_requests', function (Blueprint $table) {
            $table->id();
            $table->string('request_code', 255)->nullable();
            $table->string('requester_name', 255)->nullable();
            $table->string('item_name', 255)->nullable();
            $table->integer('quantity')->default(0);
            $table->double('estimated_cost', 15, 2)->default(0.00);
            $table->string('status', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('purchase_requests');
    }
};
