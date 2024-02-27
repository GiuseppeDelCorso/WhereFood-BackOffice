<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryRestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->count(5)->create();

        Restaurant::factory()->count(10)->create();

        Restaurant::all()->each(function ($restaurant) {
            $restaurant->categories()->attach(
                Category::all()->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
