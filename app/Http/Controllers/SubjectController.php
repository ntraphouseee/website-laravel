<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as Faker;

class SubjectController extends Controller
{
    public function index()
    {
        $faker = Faker::create('id_ID');

        $subjectNames = [
            'Matematika',
            'Bahasa Indonesia',
            'Bahasa Inggris',
            'Ilmu Pengetahuan Alam',
            'Sejarah',
        ];

        $subjects = collect();

        // Hanya 5 data pelajaran
        for ($i = 1; $i <= 5; $i++) {
            $teachers = collect();

            // Setiap pelajaran punya 1–2 guru dummy
            for ($j = 1; $j <= rand(1, 2); $j++) {
                $teachers->push((object) [
                    'id' => ($i * 10) + $j,
                    'name' => $faker->name(),
                    'phone' => $faker->phoneNumber(),
                    'email' => $faker->unique()->safeEmail(),
                    'address' => $faker->address(),
                ]);
            }

            $subject = (object) [
                'id' => $i,
                'name' => $subjectNames[$i - 1] ?? $faker->word(),
                'description' => "Mata pelajaran " . ($subjectNames[$i - 1] ?? 'Tambahan'),
                'teachers' => $teachers,
            ];

            $subjects->push($subject);
        }

        return view('subjects.index', compact('subjects'));
    }
}
