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
        Schema::table('carriage_ways', function (Blueprint $table) {
            $table->foreignId('car_station_form')
                ->nullable()
                ->constrained('stations')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('carriage_ways', function (Blueprint $table) {
            //
        });
    }
};
