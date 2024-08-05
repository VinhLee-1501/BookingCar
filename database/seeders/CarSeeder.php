<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->insert([
            'name' => "HYUNDAI UNIVERSE",
            'license_plates'=> "51A-724.54",
            'category_id'=> "1"
        ]);
        DB::table('cars')->insert([
            'name' => "Universe Advanced",
            'license_plates'=> "51A-541.54",
            'category_id'=> "2"
        ]);
        DB::table('cars')->insert([
            'name' => "Universe Advanced",
            'license_plates'=> "51A-524.34",
            'category_id'=> "3"
        ]);
        DB::table('cars')->insert([
            'name' => "HYUNDAI UNIVERSE",
            'license_plates'=> "51A-225.24",
            'category_id'=> "4"
        ]);
    }
}
