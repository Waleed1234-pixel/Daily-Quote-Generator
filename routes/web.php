<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\AdminController; 




// {{---User Side ---}}
Route::get('/', [QuoteController::class, 'index'])->name('home');

Route::get('/about', [QuoteController::class, 'about'])->name('about');

Route::get('/show-random-quote', [QuoteController::class, 'show'])->name('quotes.show');

Route::post('/quotes/{quote}/like', [QuoteController::class, 'like'])->name('quotes.like');

Route::post('/quotes/{quote}/comment', [QuoteController::class, 'comment'])->name('quotes.comment');

// {{---Admin Side ---}}




Route::get('/view', [AdminController::class, 'fetchquotes'])->name('viewquotes');

Route::get('/addquote', [AdminController::class, 'addquotes'])->name('addquotes');

Route::get('/adminReg', [AdminController::class, 'register'])->name('adminReg');


    Route::get('/adminindex', [AdminController::class, 'index'])->name('admin.dashboard');
    








Route::get('/admin.about', [AdminController::class, 'about'])->name('admin_about');



Route::post('/addquote', [AdminController::class, 'store'])->name('addquotes');


Route::delete('/quotes/{id}', [AdminController::class, 'destroy'])->name('quotes.destroy');

Route::get('/quotes/{id}/edit', [AdminController::class, 'edit'])->name('quotes.edit');

Route::put('/quotes/{id}', [AdminController::class, 'update'])->name('quotes.update');















