<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\Payment\CallbackController;
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

Route::group(['middleware' => 'auth'], function () {
    Route::get('book/{book}/checkout', [BookController::class, 'checkout'])->name('book.checkout');

    Route::post('transaction', [TransactionController::class, 'store'])->name('transaction.store');
    Route::get('transaction/{reference}', [TransactionController::class, 'show'])->name('transaction.show');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::post('callback', [CallbackController::class, 'handle']);

require __DIR__.'/auth.php';
