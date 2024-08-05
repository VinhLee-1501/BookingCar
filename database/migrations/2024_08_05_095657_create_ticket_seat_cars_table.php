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
        Schema::create('ticket_seat_cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ticket_id')
                ->nullable()
                ->constrained('ticket_cars')
                ->onDelete('set null');
            $table->foreignId('seat_id')
                ->nullable()
                ->constrained('seat_positions')
                ->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_seat_cars');
    }
};
