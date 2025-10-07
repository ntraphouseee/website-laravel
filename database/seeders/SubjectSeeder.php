<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SubjectSeeder extends Seeder
{
    public function run(): void
    {
        // disable FK checks to safely clear subjects table
        Schema::disableForeignKeyConstraints();
        DB::table('subjects')->truncate();
        Schema::enableForeignKeyConstraints();

        $subjects = [
            ['name' => 'Matematika', 'description' => 'Pelajaran matematika dasar dan lanjutan'],
            ['name' => 'Bahasa Indonesia', 'description' => 'Bahasa Indonesia dan tata bahasa'],
            ['name' => 'Bahasa Inggris', 'description' => 'Bahasa Inggris lisan dan tulisan'],
            ['name' => 'Ilmu Pengetahuan Alam', 'description' => 'Fisika, Kimia, dan Biologi dasar'],
            ['name' => 'Sejarah', 'description' => 'Sejarah nasional dan dunia'],
        ];

        foreach ($subjects as $s) {
            Subject::create($s);
        }
    }
}
