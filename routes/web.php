<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/posts/create', [PostController::class, 'create'])->name('post.create-post'); // Formulário de criação
    Route::post('/posts', [PostController::class, 'store'])->name('post.store'); // Salvar novo post
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit-post'); // Formulário de edição
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('post.update'); // Atualizar post
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('post.destroy'); // Deletar post
    Route::resource('posts', PostController::class);
});


require __DIR__.'/auth.php';

