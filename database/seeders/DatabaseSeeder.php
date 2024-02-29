<?php

namespace Database\Seeders;

use App\Models\Restaurant;
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
            UserSeeder::class,
            CategorySeeder::class,
            RestaurantSeeder::class,
            TypeSeeder::class,
            ProductSeeder::class,
            CategoryRestaurantSeeder::class,
            OrderSeeder::class,
            OrderProductSeeder::class
        ]);
    }
}
