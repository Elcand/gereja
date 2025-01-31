<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        \App\Models\Category::create(['name' => 'renungan_harian']);
        \App\Models\Category::create(['name' => 'waktu_teduh']);
        \App\Models\Category::create(['name' => 'activity']);
        \App\Models\Category::create(['name' => 'other']);
    }
}
