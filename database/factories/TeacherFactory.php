<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // use an Indonesian locale faker to generate Indonesian-style names/addresses
        $idFaker = \Faker\Factory::create('id_ID');

        return [
            'name' => $idFaker->name(),
            'subject_id' => null,
            'phone' => $idFaker->phoneNumber(),
            'email' => $idFaker->unique()->safeEmail(),
            'address' => $idFaker->address(),
        ];
    }
}
