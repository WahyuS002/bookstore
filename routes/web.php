<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

require __DIR__.'/auth.php';
