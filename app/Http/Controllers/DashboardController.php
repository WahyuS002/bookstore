<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $transactions = Transaction::latest()->with(['user', 'book'])->get();

         return view('dashboard', compact('transactions'));
    }
}
