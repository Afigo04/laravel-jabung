<?php

use App\Http\Controllers\keuangan\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'index'])->name("index");
Route::get('/about', [PublicController::class, 'about'])->name("about");
Route::get('/about/selengkapnya', [PublicController::class, 'selengkapnya'])->name("selengkapnya");
Route::get('/surat-menyurat', [PublicController::class, 'suratMenyurat'])->name("surat.menyurat");
Route::get('/anggaran', [PublicController::class, 'anggaran'])->name("anggaran");
Route::get('/galery', [PublicController::class, 'galery'])->name("galery");
Route::get('/pengaduan', [PublicController::class, 'pengaduan'])->name("pengaduan");
