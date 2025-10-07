<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Subject;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::with('subject')->get();

        if ($teachers->isEmpty()) {
            $subjectNames = [
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

            $teachers = collect();
            foreach ($teacherNames as $i => $name) {
                $sub = new Subject(['name' => $subjectNames[$i] ?? 'Umum']);
                $sub->id = $i + 1;

                $t = new Teacher([
                    'name' => $name,
                    'phone' => '0812' . str_pad((string)($i + 1000), 8, '0', STR_PAD_LEFT),
                    'email' => strtolower(str_replace(' ', '.', $name)) . '@example.test',
                    'address' => 'Jl. Ahmad Raya ' . ($i + 1),
                    'subject_id' => $sub->id,
                ]);
                $t->id = $i + 1;
                $t->setRelation('subject', $sub);

                $teachers->push($t);
            }
        }

        return view('teachers.index', compact('teachers'));
    }                                                                                                               
}
