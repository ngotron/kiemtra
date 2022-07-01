<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            "name" => $this->faker->name(),
            "decription" => $this->faker->name(),
            "price" =>  rand(1, 100),
            'image' => 'hinh' . rand(1, 3) . '.jpg',
        ];
    }
}
