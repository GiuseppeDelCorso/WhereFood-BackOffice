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
                ['order_id' => 1, 'product_id' => 1, 'quantity' => 1],
                ['order_id' => 1, 'product_id' => 2, 'quantity' => 2],
                ['order_id' => 1, 'product_id' => 3, 'quantity' => 2],
                ['order_id' => 1, 'product_id' => 4, 'quantity' => 2],

                ['order_id' => 2, 'product_id' => 5, 'quantity' => 3],
                ['order_id' => 2, 'product_id' => 6, 'quantity' => 2],
                ['order_id' => 2, 'product_id' => 7, 'quantity' => 3],

                ['order_id' => 3, 'product_id' => 11, 'quantity' => 1],
                ['order_id' => 3, 'product_id' => 12, 'quantity' => 2],
                ['order_id' => 3, 'product_id' => 13, 'quantity' => 1],

                ['order_id' => 4, 'product_id' => 20, 'quantity' => 2],

                ['order_id' => 5, 'product_id' => 8, 'quantity' => 2],
                ['order_id' => 5, 'product_id' => 9, 'quantity' => 3],
                ['order_id' => 5, 'product_id' => 10, 'quantity' => 3],

                ['order_id' => 6, 'product_id' => 26, 'quantity' => 2],
                ['order_id' => 6, 'product_id' => 27, 'quantity' => 3],

                ['order_id' => 7, 'product_id' => 14, 'quantity' => 2],
                ['order_id' => 7, 'product_id' => 15, 'quantity' => 3],

                ['order_id' => 8, 'product_id' => 17, 'quantity' => 2],

                ['order_id' => 9, 'product_id' => 21, 'quantity' => 3],
                ['order_id' => 9, 'product_id' => 29, 'quantity' => 2],

                ['order_id' => 10, 'product_id' => 16, 'quantity' => 3],

                ['order_id' => 11, 'product_id' => 18, 'quantity' => 2],
                ['order_id' => 11, 'product_id' => 19, 'quantity' => 3],

                ['order_id' => 12, 'product_id' => 24, 'quantity' => 2],
                ['order_id' => 12, 'product_id' => 25, 'quantity' => 3],

                ['order_id' => 13, 'product_id' => 28, 'quantity' => 2],

                ['order_id' => 14, 'product_id' => 8, 'quantity' => 3],
                ['order_id' => 14, 'product_id' => 9, 'quantity' => 2],
                ['order_id' => 14, 'product_id' => 10, 'quantity' => 3],

                ['order_id' => 15, 'product_id' => 23, 'quantity' => 3],
                ['order_id' => 15, 'product_id' => 30, 'quantity' => 3],

                ['order_id' => 16, 'product_id' => 2, 'quantity' => 2],
                ['order_id' => 16, 'product_id' => 4, 'quantity' => 2],

                ['order_id' => 17, 'product_id' => 2, 'quantity' => 2],
                ['order_id' => 17, 'product_id' => 3, 'quantity' => 2],
                ['order_id' => 17, 'product_id' => 4, 'quantity' => 2],

                ['order_id' => 18, 'product_id' => 5, 'quantity' => 3],
                ['order_id' => 18, 'product_id' => 7, 'quantity' => 3],

                ['order_id' => 19, 'product_id' => 13, 'quantity' => 1],
                
                ['order_id' => 20, 'product_id' => 8, 'quantity' => 2],
                ['order_id' => 20, 'product_id' => 9, 'quantity' => 3],
                ['order_id' => 20, 'product_id' => 10, 'quantity' => 3],

                ['order_id' => 21, 'product_id' => 26, 'quantity' => 2],
                ['order_id' => 21, 'product_id' => 27, 'quantity' => 3],

                ['order_id' => 22, 'product_id' => 14, 'quantity' => 2],
                ['order_id' => 22, 'product_id' => 15, 'quantity' => 3],

                ['order_id' => 23, 'product_id' => 17, 'quantity' => 2],

                ['order_id' => 24, 'product_id' => 21, 'quantity' => 3],
                ['order_id' => 24, 'product_id' => 29, 'quantity' => 2],

                ['order_id' => 25, 'product_id' => 16, 'quantity' => 3],

                ['order_id' => 26, 'product_id' => 18, 'quantity' => 2],
                ['order_id' => 26, 'product_id' => 19, 'quantity' => 3],

                ['order_id' => 27, 'product_id' => 24, 'quantity' => 2],
                ['order_id' => 27, 'product_id' => 25, 'quantity' => 3],

                ['order_id' => 28, 'product_id' => 28, 'quantity' => 2],

                ['order_id' => 29, 'product_id' => 16, 'quantity' => 3],

                ['order_id' => 30, 'product_id' => 13, 'quantity' => 1],

                ['order_id' => 31, 'product_id' => 23, 'quantity' => 3],
                ['order_id' => 31, 'product_id' => 30, 'quantity' => 3]
            ];

            DB::table('order_product')->insert($data);
        }
    }
}
