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
Route::get('/student/{major}', [StudentController::class, "major"])->name("student.major");

Route::get('/student/create', [StudentController::class, "create"])->name("student.create");
Route::post('/student/store', [StudentController::class, "store"])->name("student.store");
Route::get('/student/destroy/{id}', [StudentController::class, "destroy"])->name("student.destroy");
Route::get('/student/edit/{id}', [StudentController::class, "edit"])->name("student.edit");
Route::post('/student/update/{id}', [StudentController::class, "update"])->name("student.update");
 
Route::get('/teacher', [TeacherController::class, "index"])->name("teacher.index");