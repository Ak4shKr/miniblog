<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', [Dashboard::class, 'show_post'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('post', [PostController::class, 'index'])->name('post_index');
Route::post('post', [PostController::class, 'create'])->name('post_create');

require __DIR__ . '/auth.php';
