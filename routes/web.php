<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(callback: function () {
    Route::get('/', [PostController::class,'index'])
        ->name('dashboard');
    Route::get('/post/create', [PostController::class,'create'])
        ->name('posts.create');
    Route::post('/post/create', [PostController::class,'store'])
        ->name('posts.store');
    Route::get('/@{username}/{post:slug}', [PostController::class, 'show'])->name('posts.show');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/@{user:username}', [PublicProfileController::class, 'show'])->name('profile.show');

require __DIR__.'/auth.php';
