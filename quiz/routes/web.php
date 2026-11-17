<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LecturerController;

Route::get('/', function () {
    return view('dashboard');
});

Route::view('/courses', 'courses.index');

Route::resource('/lecturers', LecturerController::class);
