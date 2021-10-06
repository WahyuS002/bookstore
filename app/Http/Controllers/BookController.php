<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index($type)
    {
        $books = Book::where('payment_type', $type)->get();
         return view('book.index', compact('books'));
    }

    public function show(Book $book)
    {
         return view('book.show', compact('book'));
    }
}
