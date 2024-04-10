<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ComponentFactory extends Factory
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
            'Serial_number' => fake()->randomDigit(),
            'Total' => fake()->numberBetween($int1 = 0, $int2 = 10),
            'Remaining' => fake()->numberBetween($int = 0, $int2 = 10),
            'minQTY' => 2,
        ];
    }
}
