<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckLevel;
use App\Http\Controllers\LaporanController;

// Set the index.blade.php file as the home page
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/produk', function () {
    return view('produk');
})->name('produk');
Route::get('/produk', [ProductController::class, 'frontIndex'])->name('produk');

Route::get('/siswa', function () {
    return view('siswa');
})->name('siswa');
Route::get('/siswa', [SiswaController::class, 'frontIndex'])->name('siswa');

Route::get('/guru', function () {
    return view('guru');
})->name('guru');
Route::get('/guru', [GuruController::class, 'frontIndex'])->name('guru');

Route::get('/portofolio-details', function () {
    return view('portofolio-details');
})->name('portofolio-details');

Route::get('/export-laporan-lengkap', [LaporanController::class, 'exportPDF'])->name('laporan.export-pdf');

Route::get('/dashboard', [HomeController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    // Ubah ini dari only(['index']) menjadi resource penuh
    Route::resource('products', ProductController::class); // Ini akan mendefinisikan semua route termasuk store

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Routes for admin and guru
    Route::middleware([CheckLevel::class . ':admin,guru'])->group(function () {
        Route::resource('siswas', SiswaController::class);
    });

    // Admin only routes
    Route::middleware([CheckLevel::class . ':admin'])->group(function () {
        Route::resource('gurus', GuruController::class);
    });
});

require __DIR__.'/auth.php';