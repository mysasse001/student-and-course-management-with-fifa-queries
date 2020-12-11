<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/students',[StudentController::class,'index'])->name('student.index');
Route::get('/students/{student}',[StudentController::class,'edit'])->name('student.edit');
Route::post('/students/store',[StudentController::class,'store'])->name('student.store');
Route::patch('/students/{student}',[StudentController::class,'update'])->name('student.update');
Route::delete('/students/{student}/delete',[StudentController::class,'destroy'])->name('student.delete');

//student courses
Route::get('/students/{student}/courses',[StudentController::class,'addStudentCourses'])->name('add.student.courses');
Route::post('/student/{student}/course',[StudentController::class,'studentcourse'])->name('student.courses');
Route::get('/student/{student}/schedules',[StudentController::class,'schedules'])->name('schedules');
//course
Route::get('courses',[CourseController::class,'index'])->name('courses.index');
Route::post('courses/store',[CourseController::class,'store'])->name('courses.store');
Route::delete('course/{course}/delete',[CourseController::class,'destroy'])->name('course.delete');


//players
Route::get('/players',[PlayerController::class,'index'])->name('player.index');
Route::get('search',[PlayerController::class,'search'])->name('player.search');
Route::get('player/{player}',[PlayerController::class,'edit'])->name('player.edit');
Route::patch('player/{player}/update',[PlayerController::class,'update'])->name('player.update');
Route::post('player/store',[PlayerController::class,'store'])->name('player.store');
Route::delete('player/{player}/delete',[PlayerController::class,'destroy'])->name('player.delete');
