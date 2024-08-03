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
            'name' => "Honda",
            'license_plates'=> "51A-724.54",
            'image' => "https://via.placeholder.com/640x480.png/00aabb?text=facere",
            'category_id'=> "6"
        ]);
        DB::table('cars')->insert([
            'name' => "VinF",
            'license_plates'=> "51A-541.54",
            'image' => "https://via.placeholder.com/640x480.png/00aabb?text=facere",
            'category_id'=> "6"
        ]);
        DB::table('cars')->insert([
            'name' => "Tesla",
            'license_plates'=> "51A-524.34",
            'image' => "https://via.placeholder.com/640x480.png/00aabb?text=facere",
            'category_id'=> "8"
        ]);
        DB::table('cars')->insert([
            'name' => "Tesla",
            'license_plates'=> "51A-225.24",
            'image' => "https://via.placeholder.com/640x480.png/00aabb?text=facere",
            'category_id'=> "8"
        ]);
    }
}
