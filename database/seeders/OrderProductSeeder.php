<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { {

            $data = [
                ['order_id' => 1, 'product_id' => 3, 'quantity' => 2],
                ['order_id' => 1, 'product_id' => 2, 'quantity' => 1],
                ['order_id' => 1, 'product_id' => 9, 'quantity' => 2],
                ['order_id' => 2, 'product_id' => 8, 'quantity' => 2],
                ['order_id' => 2, 'product_id' => 10, 'quantity' => 3],
                ['order_id' => 3, 'product_id' => 6, 'quantity' => 2],
                ['order_id' => 3, 'product_id' => 4, 'quantity' => 3],
                ['order_id' => 4, 'product_id' => 6, 'quantity' => 1],
                ['order_id' => 4, 'product_id' => 7, 'quantity' => 2],
                ['order_id' => 4, 'product_id' => 4, 'quantity' => 3],
                ['order_id' => 5, 'product_id' => 2, 'quantity' => 1],
                ['order_id' => 5, 'product_id' => 6, 'quantity' => 2],
                ['order_id' => 5, 'product_id' => 1, 'quantity' => 1],
                ['order_id' => 6, 'product_id' => 6, 'quantity' => 2],
                ['order_id' => 6, 'product_id' => 1, 'quantity' => 3],
            ];

            DB::table('order_product')->insert($data);
        }
    }
}
