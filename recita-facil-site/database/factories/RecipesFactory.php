<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipes>
 */
class RecipesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->title(),
            'difficulty' => fake()->word(),
            'ingredients' => fake()->text(),
            'preparation' => fake()->text(),
            'preparation_time' => fake()->time(),
            'portions' => fake()->word(),
            'image' => fake()->imageUrl()
        ];
    }
}
