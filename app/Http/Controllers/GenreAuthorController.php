<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Author;

class GenreAuthorController extends Controller
{
    public function index()
    {
        $genres = Genre::allGenres();
        $authors = Author::allAuthors();

        return view('genre_author.index', compact('genres', 'authors'));
    }
}
