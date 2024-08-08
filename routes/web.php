<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

// Index Routes
Route::get('/', [IndexController::class, 'showIndexPage'])->name("index");

// About Routes
Route::get('/about', [AboutController::class, 'showAboutPage'])->name("about");
Route::get('/about/selengkapnya', [AboutController::class, 'showSelengkapnyaPage'])->name("selengkapnya");

// Document Route
Route::get('/surat-menyurat', [DocumentController::class, 'showSuratMenyurat'])->name("surat.menyurat");

// Budget Route
Route::get('/anggaran/{year}', [BudgetController::class, 'viewAnggaranYearly'])->name("anggaran.show");
Route::get('/anggaran', [BudgetController::class, 'redirectToAnggaran'])->name("anggaran");

// Galery Route
Route::get('/galery', [GaleryController::class, 'showGaleryPage'])->name("galery");

// Berita Route
Route::get('/berita', [NewsController::class, 'redirectToNews'])->name("berita");
Route::get('/berita/{id}', [NewsController::class, 'show'])->name("berita.show");
