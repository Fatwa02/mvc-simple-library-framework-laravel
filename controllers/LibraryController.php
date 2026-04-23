<?php
require_once 'models/Genre.php';
require_once 'models/Author.php';

class LibraryController {
    public function index() {
        $genreModel = new Genre();
        $authorModel = new Author();

        $genres = $genreModel->getAllGenres();
        $authors = $authorModel->getAllAuthors();

        require_once 'views/library_view.php';
    }
}