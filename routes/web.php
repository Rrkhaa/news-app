<?php

// routes/web.php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\KomentarController; // Pastikan ini ada
use App\Http\Controllers\CategoryController; // Kita akan pakai ini nanti

// ... Kemudian, bagian routing-nya seperti ini:
Route::get('/', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');

// ROUTE UNTUK MENYIMPAN KOMENTAR
Route::post('/news/{news}/komentar', [KomentarController::class, 'store'])
    ->name('komentar.store');

// ROUTE UNTUK CATEGORY (Contoh)
Route::resource('categories', CategoryController::class)->only(['index', 'show']);