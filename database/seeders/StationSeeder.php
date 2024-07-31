<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {

        $cityIds = DB::table('cities')->pluck('id', 'name')->toArray();


        DB::table('stations')->insert([
            [
                'name' => 'Bến xe TT Cần Thơ',

                'city_id' => $cityIds['Cần Thơ'] ,
            ],
            [
               'name' => 'Bến xe TT Vĩnh Long',
                'city_id' => $cityIds['Vĩnh Long'] ,
            ],[
                'name' => 'Bến xe TT Hậu Giang',
                'city_id' => $cityIds['Hậu Giang'],
            ],[

                'name' => 'Bến xe TT Đồng Tháp',
                'city_id' => $cityIds['Đồng Tháp'],
            ],
        ]);
    }
}