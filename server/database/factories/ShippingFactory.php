<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shipping>
 */
class ShippingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => \App\Models\Order::factory(),
            'user_id' => \App\Models\User::factory(),
            'recipient_name' => $this->faker->name(),
            'address' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
            'postal_code' => $this->faker->postcode(),
            'country' => $this->faker->country(),
            'phone' => $this->faker->phoneNumber(),
            'shipping_status' => $this->faker->randomElement(['pending', 'shipped', 'delivered', 'failed', 'returned']),
            'tracking_number' => $this->faker->optional()->uuid(),
            'carrier' => $this->faker->optional()->randomElement(['FedEx', 'UPS', 'DHL']),
            'shipped_at' => $this->faker->optional()->dateTimeBetween('-1 week', 'now'),
            'delivered_at' => $this->faker->optional()->dateTimeBetween('now', '+1 week'),
        ];
    }
}
