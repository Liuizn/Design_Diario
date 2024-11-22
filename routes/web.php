<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViewArtigosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/meus_artigos', [ViewArtigosController::class, 'index'])->name('meus_artigos')->middleware(['verified']);
});


require __DIR__.'/auth.php';
