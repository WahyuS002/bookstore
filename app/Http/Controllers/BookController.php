<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index($type)
    {
        $books = Book::where('payment_type', $type)->get();
         return view('book.index', compact('books'));
    }
}
