<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Pastikan tabel bersih dulu sebelum diisi
        // Ini opsional tapi bagus agar data tidak duplikat
        
        $author = Author::create(['name' => 'Tere Liye']);

        $books = [
            ['title' => 'Bumi', 'year' => 2014, 'author_id' => $author->id],
            ['title' => 'Bulan', 'year' => 2015, 'author_id' => $author->id],
            ['title' => 'Matahari', 'year' => 2016, 'author_id' => $author->id],
            ['title' => 'Bintang', 'year' => 2017, 'author_id' => $author->id],
            ['title' => 'Cerdas', 'year' => 2018, 'author_id' => $author->id],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}