<?php

namespace App\Http\Controllers;

use App\Models\Guardian;
use Illuminate\Http\Request;

class GuardianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Cek apakah sudah ada minimal 10 data guardian
        if (Guardian::count() < 10) {
            // Jika kurang dari 10, buat dummy 10 data dan simpan ke database
            Guardian::factory()->count(10)->create();
        }

        // Ambil 10 data guardian pertama
        $guardians = Guardian::limit(10)->get();

        // Kirim ke view dengan variabel 'guardians' dan 'title'
        return view('guardian', [
            'title' => 'Guardian',
            'guardians' => $guardians,
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Guardian $guardian)
    {
        //
    }

    public function edit(Guardian $guardian)
    {
        //
    }

    public function update(Request $request, Guardian $guardian)
    {
        //
    }

    public function destroy(Guardian $guardian)
    {
        //
    }
}
