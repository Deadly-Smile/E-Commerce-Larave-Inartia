<?php

namespace Database\Factories;

use Illuminate\Support\Str;
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
        $name = $this->faker->words(3, true);

        return [
            'category_id' => $this->faker->numberBetween(1, 5),
            'name' => $name,
            'slug' => Str::slug($name) . '-' . $this->faker->unique()->numerify('###'),
            'description' => $this->faker->paragraph(),
            'image' => $this->faker->imageUrl(640, 480, 'products', true),
            'gallery' => collect([
                $this->faker->imageUrl(640, 480, 'products', true),
                $this->faker->imageUrl(640, 480, 'products', true),
            ])->toJson(),
            'price' => $price = $this->faker->randomFloat(2, 10, 100),
            'discount_price' => $this->faker->randomFloat(2, 0, $price * 0.8),
            'quantity' => $this->faker->numberBetween(1, 100),
            'sku' => $this->faker->unique()->bothify('SKU-#####'),
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'featured' => $this->faker->boolean(),
        ];
    }
}
