<?php

namespace App\Http\Controllers;

use App\Models\Student; // <-- Tambahkan baris ini
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all(); // fungsi all seperti query select

        return view('student', [ // <-- Ganti 'students' dengan 'student' (nama file blade-nya)
            'title' => 'Student',
            'students' => $students
        ]); // <-- Tambahkan titik koma di sini
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}