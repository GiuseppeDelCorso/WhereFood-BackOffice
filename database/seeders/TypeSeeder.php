<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    public function run(): void
    {
        $types = [
            [
                'name' => 'primi',
                'description' => 'primi piatti'
            ],
            [
                'name' => 'secondi',
                'description' => 'secondi piatti'
            ],
            [
                'name' => 'desserts',
                'description' => 'frutta e dolci'
            ],
            [
                'name' => 'pizze',
                'description' => 'pizze'
            ],
            [
                'name' => 'panini',
                'description' => 'panini'
            ],
            [
                'name' => 'vini',
                'description' => 'vini'
            ],
            [
                'name' => 'birre',
                'description' => 'birre'
            ],
            [
                'name' => 'bibite',
                'description' => 'bibite'
            ],
        ];

        foreach ($types as $type) {
            $newType = new Type();
            $newType->fill($type)->save();
        };
    }
}
