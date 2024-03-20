<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/school', [App\Http\Controllers\SchoolController::class, 'school'])->name('school');
Route::get('/school/students', [App\Http\Controllers\SchoolController::class, 'studentdetails'])->name('studentdetails');
Route::get('/school/studentform', [App\Http\Controllers\SchoolController::class, 'studentform'])->name('studentform');
Route::post('/school/studentstore', [App\Http\Controllers\SchoolController::class, 'studentstore'])->name('student.store');
Route::get('/school/teachers', [App\Http\Controllers\SchoolController::class, 'teacherdetails'])->name('teacherdetails');
Route::get('/school/teacherform', [App\Http\Controllers\SchoolController::class, 'teacherform'])->name('teacherform');
