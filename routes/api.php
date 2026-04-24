<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// PASTIKAN BARIS DI BAWAH INI ADA
use App\Http\Controllers\BookController; 

// Gunakan format array seperti ini
Route::get('/books', [BookController::class, 'index']);