<?php

use App\Http\Controllers\EstudiatesController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('estudiantes', EstudiatesController::class);

