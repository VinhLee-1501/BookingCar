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
        Schema::create('ticket_cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('seat_ld')
            ->nullable()
            ->constrained('seat_positions')
            ->onDelete('set null');
            $table->foreignId('ticket_booking_id')
            ->nullable()
            ->constrained('ticket_booking_cars')
            ->onDelete('set null');
            $table->foreignId('the_ride_id')
            ->nullable()
            ->constrained('the_rides')
            ->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_cars');
    }
};