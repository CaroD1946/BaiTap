<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('asset_code', 255)->nullable();
            $table->string('asset_name', 255)->nullable();
            $table->string('department', 255)->nullable();
            $table->date('purchase_date')->nullable();
            $table->double('original_value', 15, 2)->default(0.00);
            $table->string('status', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
