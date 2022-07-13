<?php

namespace Database\Seeders;

use App\Models\Color;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            ColorsTableSeeder::class,
            UserSeeder::class,
//            ProductSeeder::class,
        ]);
    }
}
