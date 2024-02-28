<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    public function run(): void
    {
        $types = config('types');

        foreach ($types as $type) {
            $newtype = new Type();
            $newtype->fill($type)->save();
        };
    }
}





