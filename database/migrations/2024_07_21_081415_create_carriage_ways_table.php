<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('carriage_ways', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('day_of_week');
            $table->integer('trip_of_day');
            $table->integer('average_travel_time');
            $table->integer('distance');
            $table->foreignId('car_station_id')
                ->nullable()
                ->constrained('stations')
                ->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carriage_ways');
    }
};