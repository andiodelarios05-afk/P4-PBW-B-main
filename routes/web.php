<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


// Halaman awal mengarahkan ke halaman login
Route::get('/', function () {
    return view('auth.login');
});

// Grup untuk semua rute yang memerlukan otentikasi (login)
Route::middleware('auth')->group(function () {
    
    // Rute Dashboard (memerlukan auth & verified)
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware('verified')->name('dashboard'); // 'auth' sudah ada di grup

    // Rute Profil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Rute Posts (CRUD)
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
    
    // Saran: Gunakan Route::resource() untuk menyederhanakan rute CRUD posts
    // Route::resource('posts', PostController::class)->except(['index', 'show']);
});


require __DIR__.'/auth.php';

