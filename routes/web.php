<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    Route::resource('books', BookController::class);
Route::resource('readers', ReaderController::class);
Route::resource('borrows', BorrowController::class);
});
