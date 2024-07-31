<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->insert(['name' => 'Vĩnh Long']);
        DB::table('cities')->insert(['name' => 'TP Cần Thơ']);
        DB::table('cities')->insert(['name' => 'TP Hồ Chí Minh']);
        DB::table('cities')->insert(['name' => 'Tiền Giang']);
        DB::table('cities')->insert(['name' => 'TP Hồ Chí Minh']);
        DB::table('cities')->insert(['name' => 'Hậu Giang']);
        DB::table('cities')->insert(['name' => 'Đồng Tháp']);
        DB::table('cities')->insert(['name' => 'Bến Tre']);

    }
}