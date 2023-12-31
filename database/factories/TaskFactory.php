<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'description' => $this->faker->sentence,
            'due_date' => $this->faker->date,
            'state' => $this->faker->randomElement(['pendiente', 'en proceso', 'terminada']),
            'user_id' => $this->faker->randomElement(['1', '2', '3', '4', '5']),
        ];
    }

}
