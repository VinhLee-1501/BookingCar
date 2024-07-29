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
        Schema::create('the_rides', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->dateTime('time_to_go');
            $table->dateTime('estimated_arrival_time');
            $table->dateTime('estimated_departure_time');
            $table->float('price');
            $table->foreignId('carriage_way_id')
            ->nullable()
            ->constrained('carriage_ways')
            ->onDelete('set null');
            $table->foreignId('car_id')
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
        Schema::dropIfExists('the_rides');
    }
};
