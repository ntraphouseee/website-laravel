<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            SubjectSeeder::class,
            TeacherSeeder::class,
            \Database\Seeders\GuardianSeeder::class,
            \Database\Seeders\StudentSeeder::class,
        ]);
    }
}
