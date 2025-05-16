<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        // Ambil semua buku dengan relasi author
        $books = Book::with('author')->get();

        return view('books.index', compact('books'));
    }
}

