<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index']);

Route::get('/book/create', [BookController::class, 'create']);

Route::post('/book/create', [BookController::class, 'store']);

Route::get('/book/{book}/edit', [BookController::class, 'edit']);

Route::post('/book/{book}/edit', [BookController::class, 'update']);

Route::get('/book/{book}/delete', [BookController::class, 'destroy']);

Route::get('/book/{book}/review', [BookController::class, 'review']);

Route::post('/book/{book}/review', [ReviewController::class, 'store']);

Route::get('/book/{book}', [BookController::class, 'show']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
