<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('seat_positions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('price');
            $table->tinyInteger('status');
            $table->foreignId('cars_id')
            ->nullable()
            ->constrained('cars')
            ->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seat_positions');
    }
};
