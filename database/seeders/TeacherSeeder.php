<?php

namespace Database\Seeders;

use App\Models\Teacher;
use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    public function run(): void
    {
        if (! Schema::hasTable('teachers')) {
            Schema::create('teachers', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->unsignedBigInteger('subject_id');
                $table->string('phone');
                $table->string('email');
                $table->text('address');
                $table->timestamps();
                $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
            });
        } else {
            DB::table('teachers')->truncate();
        }

        $subjects = Subject::all();
        if ($subjects->isEmpty()) {
            $subjects = Subject::factory()->count(5)->create();
        }

        Teacher::factory()->count(5)->create()->each(function ($teacher) use ($subjects) {
            $teacher->subject_id = $subjects->random()->id;
            $teacher->save();
        });
    }
}
