<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Payment\TripayController;
use App\Models\Book;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function request(Book $book, Request $request)
    {
        $tripay = new TripayController();
        $method = $request->method;
        $detail = $tripay->requestTransaction($book, $method);
        //  return view('transaction.detail', compact('detail'));
        return redirect()->route('transaction.detail', [
            'book' => $book->id,
            'transaction' => $detail->merchant_ref
        ]);
    }

    public function detail(Book $book, $merchant_ref)
    {
        dd($book, $merchant_ref);
    }
}
