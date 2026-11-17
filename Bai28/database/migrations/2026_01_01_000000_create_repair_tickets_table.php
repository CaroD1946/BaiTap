<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('repair_tickets', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_code', 255)->nullable();
            $table->string('customer_name', 255)->nullable();
            $table->string('device_model', 255)->nullable();
            $table->double('estimated_cost', 15, 2)->default(0.00);
            $table->string('status', 255)->nullable();
            $table->text('defect_description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('repair_tickets');
    }
};
