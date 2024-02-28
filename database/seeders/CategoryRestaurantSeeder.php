<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryRestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { {
            // Array di dati da inserire nella tabella ponte
            $data = [
                ['restaurant_id' => 1, 'category_id' => 3],
                ['restaurant_id' => 2, 'category_id' => 3],
                ['restaurant_id' => 3, 'category_id' => 9],
                ['restaurant_id' => 4, 'category_id' => 8],
                ['restaurant_id' => 5, 'category_id' => 10],
                ['restaurant_id' => 6, 'category_id' => 6],
                ['restaurant_id' => 7, 'category_id' => 4],
                ['restaurant_id' => 8, 'category_id' => 5],
                // Aggiungi altri dati secondo necessità
            ];

            // Inserisci i dati nella tabella ponte
            DB::table('category_restaurant')->insert($data);
        }
    }
}
