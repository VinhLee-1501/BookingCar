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
        Schema::table('ticket_cars', function (Blueprint $table) {
            $table->foreignId('seat_ld')
                ->nullable()
                ->constrained('seat_positions')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ticket_cars', function (Blueprint $table) {
            $table->dropColumn('seatld');
        });
    }
};
