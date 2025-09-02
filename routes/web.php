<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Models\category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// tampilkan
Route::get('login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('login', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('login');

Route::middleware('auth')->group(function () {
    route::get('dashboard', [\App\Http\Controllers\HomeController::class, 'index']);
    route::post('logout', [LoginController::class, 'logout']);

    //Anggota:
    route::get('anggota/index', [AnggotaController::class, 'index']);
    route::get('anggota/create', [AnggotaController::class, 'create']);
    route::get('anggota/edit/{id}', [AnggotaController::class, 'edit'])->name('anggota.edit');
    route::put('anggota/update/{id}', [AnggotaController::class, 'update'])->name('anggota.update');
    route::get('anggota/restore', [AnggotaController::class, 'indexRestore']);
    route::get('anggota/restore/{id}', [AnggotaController::class, 'restore'])->name('anggota.restore');
    route::post('anggota/store', [AnggotaController::class, 'store'])->name('anggota.store');

    route::delete('anggota/destroy/{id}', [AnggotaController::class, 'softDelete'])->name('anggota.softdelete');
    route::delete('anggota/restore/destroy/{id}', [AnggotaController::class, 'destroy'])->name('anggota.destroy');

    // location
    route::get('lokasi/index', [LocationController::class, 'index']);
    route::get('lokasi/create', [LocationController::class, 'create']);
    route::get('lokasi/edit/{id}', [LocationController::class, 'edit'])->name('lokasi.edit');
    route::put('lokasi/update/{id}', [LocationController::class, 'update'])->name('lokasi.update');
    route::post('lokasi/store', [LocationController::class, 'store'])->name('lokasi.store');
    route::delete('lokasi/destroy/{id}', [LocationController::class, 'destroy'])->name('lokasi.destroy');

    //kategori
    route::get('kategori/index', [CategoryController::class, 'index']);
    route::get('kategori/create', [CategoryController::class, 'create']);
    route::get('kategori/edit/{id}', [categoryController::class, 'edit'])->name('kategori.edit');
    route::put('kategori/update/{id}', [categoryController::class, 'update'])->name('kategori.update');
    route::post('kategori/store', [categoryController::class, 'store'])->name('kategori.store');
    route::delete('kategori/destroy/{id}', [categoryController::class, 'destroy'])->name('kategori.destroy');

    //buku
    route::get('buku/index', [BookController::class, 'index']);
    route::get('buku/create', [BookController::class, 'create']);
    route::get('buku/edit', [BookController::class, 'edit'])->name('buku.edit');
    route::post('buku/store', [BookController::class, 'store'])->name('buku.store');
    route::delete('buku/destroy/{id}', [BookController::class, 'destroy'])->name('buku.destroy');
});
