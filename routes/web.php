<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'profile']);
Route::get('/student', [StudentController::class, 'index']);
Route::get('/guardian', [GuardianController::class, 'index']);
Route::get('/classroom', [ClassroomController::class, 'index'])->name('classroom.index');
Route::get('/teacher', [TeacherController::class, 'index']);
Route::get('/subject', [\App\Http\Controllers\SubjectController::class, 'index']);