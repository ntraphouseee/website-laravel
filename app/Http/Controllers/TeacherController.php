<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as Faker;

class TeacherController extends Controller
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

        $teachers = collect();

        // Hanya 5 data guru
        for ($i = 1; $i <= 5; $i++) {
            $subject = (object) [
                'id' => $i,
                'name' => $subjectNames[$i - 1] ?? $faker->word(),
                'description' => "Mata pelajaran " . ($subjectNames[$i - 1] ?? 'Tambahan'),
            ];

            $teacher = (object) [
                'id' => $i,
                'name' => $faker->name(),
                'phone' => $faker->phoneNumber(),
                'email' => $faker->unique()->safeEmail(),
                'address' => $faker->address(),
                'subject' => $subject,
            ];

            $teachers->push($teacher);
        }

        return view('teachers.index', compact('teachers'));
    }
}
