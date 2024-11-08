<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'image' => $this->faker->imageUrl(),
            'price' => $this->faker->randomFloat(0, 1000, 10000),
            'stock' => $this->faker->numberBetween(1, 50),
            'status' => $this->faker->boolean(),
            'is_favorite' => $this->faker->boolean(),
            'category_id' => $this->faker->numberBetween(1, 4),
        ];
    }
}
