<?php

namespace App\Http\Controllers;

use App\Models\Book;

class HomeController extends Controller
{
    public function index()
    {
        $books = Book::latest()->get();
         return view('home', compact('books'));
    }
}
