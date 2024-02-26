<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = config('products');

        foreach ($products as $product) {
            $newProduct = new Product();
            $newProduct->fill($product)->save();
        };
    }
}
