<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => "Giường Nằm",
            'seats' => "45"
        ]);
        DB::table('categories')->insert([
            'name' => "Giường Nằm",
            'seats' => "45"
        ]);
        DB::table('categories')->insert([
            'name' => "Giường Nằm",
            'seats' => "45"
        ]);
        DB::table('categories')->insert([
            'name' => "Ghế",
            'seats' => "45"
        ]);
        DB::table('categories')->insert([
            'name' => "Ghế",
            'seats' => "45"
        ]);
        DB::table('categories')->insert([
            'name' => "Ghế",
            'seats' => "45"
        ]);
    }
}
