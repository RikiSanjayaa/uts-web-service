<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route dengan Controller - sesuai ketentuan UTS
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');
