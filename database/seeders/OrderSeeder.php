<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = config('orders');

        foreach ($orders as $order) {
            $newRestaurant = new Order();
            $newRestaurant->fill($order)->save();
        };
    }
}
