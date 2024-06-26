<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventory>
 */
class AssetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Name' => fake()->name(),
            'Serial_Number' => fake()->randomDigit(),
            'Status' => fake()->randomElement(['Ready', 'Deployed', 'Pending']),
            'Checked_Out_to' => fake()->name(),
        ];
    }
}
