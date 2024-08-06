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
        DB::table('cities')->insert([
            [
                'name' => 'Cần Thơ',
            ],
            [
                'name' => 'Vĩnh Long',
            ],
            [
                'name' => 'Đồng Tháp',
            ],
            [
                'name' => 'Cà Mau',
            ],
            [
                'name' => 'Hậu Giang',
            ],
            [
                'name' => 'TP Hồ Chí Minh',
            ],
            [
                'name' => 'Bến Tre',
            ],
        ]);
    }
}
