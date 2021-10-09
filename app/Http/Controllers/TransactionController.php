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
            'reference' => $detail->reference,
            'book_id' => $book->id,
            'user_id' => 1,
        ]);

        return redirect()->route('transaction.invoice', [
            'reference' => $detail->reference
        ]);
    }

    public function invoice($reference)
    {
        $invoice = Transaction::where('reference', $reference)->first();
        $tripay = new TripayController();
        $detail = $tripay->transactionDetail($reference);

        return view('transaction.detail', compact('detail'));
    }
}
