<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'cart_id' => 1,
            'total' => $this->faker->randomFloat(2, 10, 1000),
            'payment_status' => $this->faker->randomElement(['pending', 'paid', 'failed', 'refunded']),
            'order_status' => $this->faker->randomElement(['pending', 'processing', 'shipped', 'delivered', 'canceled', 'refunded']),
            'payment_method' => $this->faker->creditCardType,
            'tracking_number' => $this->faker->uuid,
            'shipping_address' => $this->faker->address,
            'billing_address' => $this->faker->address,
            'notes' => $this->faker->sentence,
        ];
    }
}
