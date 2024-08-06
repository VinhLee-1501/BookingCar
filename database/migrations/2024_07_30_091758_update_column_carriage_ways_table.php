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
            $table->integer('day_of_week')->nullable()->change();
            $table->integer('trip_of_day')->nullable()->change();
            $table->integer('average_travel_time')->nullable()->change();
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
