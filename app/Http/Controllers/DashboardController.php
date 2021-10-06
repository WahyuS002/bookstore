<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $transactions = Transaction::latest()->get();

         return view('dashboard', compact('transactions'));
    }
}
