<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, "index"])->name("index");

Route::get('/student', [StudentController::class, "index"])->name("student.index");
Route::get('/student/student', [StudentController::class, "create"])->name("student.create");

Route::get('/teacher', [TeacherController::class, "index"])->name("teacher.index");