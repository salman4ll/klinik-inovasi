<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/berita', [HomeController::class, 'berita']);
Route::get('/galeri', [HomeController::class, 'galeri']);