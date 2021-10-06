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

    public function checkout(Book $book)
    {
        return view('book.checkout', compact('book'));
    }

    public function donate(Book $book)
    {
        return view('book.donate', compact('book'));
    }
}
