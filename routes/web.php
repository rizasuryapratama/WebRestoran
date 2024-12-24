<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProdukController;


// Route untuk halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Route untuk login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::post('/logout', [LoginController::class, 'actionlogout'])->name('actionlogout');

// Route untuk register
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

// Route untuk halaman home
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route untuk kategori
Route::get('/home/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori/index', [KategoriController::class, 'simpankategori'])->name('simpankategori');
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit'); // Menampilkan form edit menu
Route::post('/kategori/update/{id}', [KategoriController::class, 'updatekategori'])->name('updatekategori'); // Mengupdate kategori
Route::delete('/kategori/hapus/{id}', [KategoriController::class, 'hapuskategori'])->name('hapuskategori'); // Menghapus menu

// Route untuk menu
Route::prefix('menu')->middleware('auth')->group(function () {
    Route::get('/', [MenuController::class, 'index'])->name('menu.index'); // Menampilkan semua menu
    Route::get('/create', [MenuController::class, 'create'])->name('menu.create'); // Menampilkan form tambah menu
    Route::post('/menu/index', [MenuController::class, 'simpanmenu'])->name('simpanmenu');
    Route::get('/edit/{id}', [MenuController::class, 'edit'])->name('menu.edit'); // Menampilkan form edit menu
    Route::post('/update/{id}', [MenuController::class, 'updatemenu'])->name('updatemenu'); // Mengupdate menu
    Route::delete('/hapus/{id}', [MenuController::class, 'hapusmenu'])->name('hapusmenu'); // Menghapus menu
});
Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/makanan', [ProdukController::class, 'makanan'])->name('produk.makanan');
Route::get('/produk/minuman', [ProdukController::class, 'minuman'])->name('produk.minuman');
