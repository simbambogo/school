<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/school', [App\Http\Controllers\SchoolController::class, 'school'])->name('school');