<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::with('teachers')->get();

        if ($subjects->isEmpty()) {
            $names = [
                'Matematika',
                'Bahasa Indonesia',
                'Bahasa Inggris',
                'Ilmu Pengetahuan Alam',
                'Sejarah',
            ];

            $teacherNames = [
                'Siti Aminah',
                'Budi Santoso',
                'Andi Wijaya',
                'Rina Putri',
                'Agus Salim',
            ];

            $subjects = collect();

            foreach ($names as $i => $name) {
                $s = new Subject(['name' => $name, 'description' => "Mata pelajaran $name"]);
                $s->id = $i + 1;

                $t = new Teacher([
                    'name' => $teacherNames[$i] ?? "Guru $i",
                    'phone' => '0812' . str_pad((string)($i + 1000), 8, '0', STR_PAD_LEFT),
                    'email' => strtolower(str_replace(' ', '.', $teacherNames[$i] ?? "guru$i")) . '@example.test',
                    'address' => 'Jl. Contoh No. ' . ($i + 1),
                    'subject_id' => $s->id,
                ]);
                $t->id = $i + 1;

                $s->setRelation('teachers', collect([$t]));

                $subjects->push($s);
            }
        }

        return view('subjects.index', compact('subjects'));
    }
}
