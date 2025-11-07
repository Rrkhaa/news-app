<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\NewsController;

// Route untuk landing page (daftar berita)
Route::get('/', [NewsController::class, 'index'])->name('news.index');

Route::post('/news/{id}/komentar', [KomentarController::class, 'store'])->name('komentar.store');


// Route untuk menampilkan detail berita berdasarkan ID
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');
