<?php

namespace Database\Factories;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClassroomFactory extends Factory
{
    protected $model = Classroom::class;

    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement([
                '10 PPLG 1',
                '10 PPLG 2',
                '11 PPLG 1',
                '11 PPLG 2',
            ]),
        ];
    }
}
