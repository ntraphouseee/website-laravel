<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Classroom;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'birthday' => fake()->date(),
            'email' => fake()->unique()->safeEmail(),
            'address' => fake()->address(),
            'classroom_id' => Classroom::factory(),
        ];
    }
}
