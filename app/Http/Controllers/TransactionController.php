<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Payment\TripayController;
use App\Models\Book;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        $book = Book::where('id', $request->book_id)->first();
        $tripay = new TripayController();
        $method = $request->method;
        $detail = $tripay->requestTransaction($book, $method);

        Transaction::create([
            'book_id' => $book->id,
            'user_id' => auth()->user()->id,
            'reference' => $detail->reference,
            'total_amount' => $detail->amount,
        ]);

        return redirect()->route('transaction.show', [
            'reference' => $detail->reference
        ]);
    }

    public function show($reference)
    {
        $tripay = new TripayController();
        $detail = $tripay->transactionDetail($reference);

        return view('transaction.detail', compact('detail'));
    }
}
