<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Lấy danh sách city_id từ bảng cities
        $cityIds = DB::table('cities')->pluck('id','name')->toArray();

        DB::table('districts')->insert([
            [
                'name' => 'Ninh Kiều',
                'city_id' => $cityIds['Cần Thơ'],
            ],
            [
                'name' => 'Cái Răng',
                'city_id' => $cityIds['Cần Thơ'],
            ],
            [
                'name' => 'TP Vĩnh Long',
                'city_id' => $cityIds['Vĩnh Long'],
            ],
            [
                'name' => 'Ngã Bảy',
                'city_id' => $cityIds['Hậu Giang'],
            ],
        ]);
    }
}