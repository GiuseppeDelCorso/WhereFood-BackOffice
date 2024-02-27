<?php

namespace Database\Factories;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Restaurant::class;

    public function definition(): array
    {
        return [
            "user_id" => 1,
            "name" => $this->faker->unique()->word,
            "image" => $this->faker->unique()->word,
            "address" => $this->faker->unique()->word,
            "PIVA" => $this->faker->unique()->word,
        ];
    }
}
