<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('books/{type}', [BookController::class, 'index'])->name('books');
Route::get('book/{book}', [BookController::class, 'show'])->name('book.show');

Route::get('book/{book}/checkout', [BookController::class, 'checkout'])->name('book.checkout');
Route::get('book/{book}/donate', [BookController::class, 'donate'])->name('book.donate');

// Route::get('book/{book}/detail_transaction/{merchant_ref}', [TransactionController::class, 'detail'])->name('transaction.detail');

Route::post('book/{book}/request_transaction', [TransactionController::class, 'request'])->name('transaction.request');
Route::get('invoice/{reference}', [TransactionController::class, 'invoice'])->name('transaction.invoice');

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

require __DIR__.'/auth.php';
