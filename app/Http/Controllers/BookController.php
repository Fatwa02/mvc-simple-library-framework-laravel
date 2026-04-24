<?php

namespace App\Http\Controllers;

use App\Models\Book; // Pastikan ini ada
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        try {
            // Kita tambahkan try-catch agar kalau error, pesan JSON-nya jelas
            $books = Book::with('author')->get();

            return response()->json([
                'success' => true,
                'message' => 'Daftar Data Buku',
                'data'    => $books
            ], 200);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ], 500);
        }
    }
}