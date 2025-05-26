<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


Route::view('/', 'welcome');
Route::controller(BookController::class)->group(function(){
    Route::get('/books','index')->name('books.index');
    Route::get('/search','search')->name('books.search');
});
