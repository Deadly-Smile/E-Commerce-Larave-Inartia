<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discount>
 */
class DiscountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => \App\Models\Product::factory(),
            'category_id' => \App\Models\Category::factory(),
            'discount_amount' => $this->faker->randomFloat(2, 1, 100),
            'discount_percentage' => $this->faker->randomFloat(2, 1, 100),
            'start_date' => $this->faker->dateTimeBetween('-1 week', 'now'),
            'end_date' => $this->faker->dateTimeBetween('now', '+1 week'),
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
