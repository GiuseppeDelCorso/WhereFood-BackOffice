<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    public function run(): void
    {
        $categories = config('categories');

        foreach ($categories as $category) {
            $newCat = new Category();
            $newCat->fill($category)->save();
        };
    }
}
