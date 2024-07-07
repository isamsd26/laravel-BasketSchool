<?php

// routes/web.php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\JadwalController;

// Route untuk admin
Route::get('/admin/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified', 'role:admin'])->name('admin');
Route::get('/admin/logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');
Route::get('/admin/dashboard', [AdminController::class, 'admin'])->name('admin');;


// Route untuk siswa
Route::get('/siswa', function () {
    return view('siswa.index');
})->middleware(['auth', 'verified', 'role:siswa'])->name('siswa');
Route::get('/siswa/logout', [AuthenticatedSessionController::class, 'destroy'])->name('siswa.logout');

// Route untuk pelatih
Route::get('/pelatih', function () {
    return view('pelatih.index');
})->middleware(['auth', 'verified', 'role:pelatih'])->name('pelatih');
Route::get('/pelatih/logout', [AuthenticatedSessionController::class, 'destroy'])->name('pelatih.logout');

// Route untuk login dan register
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// Route umum
Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/', [UserController::class, 'home'])->name('index');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/berita', [UserController::class, 'berita'])->name('berita');
Route::get('/jadwal', [UserController::class, 'jadwal'])->name('jadwal');
Route::get('/galeri', [UserController::class, 'galeri'])->name('galeri');
Route::get('/profil', [UserController::class, 'profil'])->name('profil');

// route untuk halaman admin
Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');
// untuk yang berkaitan jadwal
Route::get('/tambah-jadwal', [AdminController::class, 'tambahJadwal'])->name('admin.tambah_jadwal');
Route::post('/tambah-jadwal', [AdminController::class, 'storeJadwal'])->name('admin.storeJadwal');
Route::post('/admin/storeJadwal', [AdminController::class, 'storeJadwal'])->name('admin.storeJadwal');
// tabel CRUD jadwal
Route::get('/jadwal-side', [AdminController::class, 'showJadwal'])->name('admin.jadwal_side');
Route::delete('/jadwal-side/hapus-jadwal/{id}', [AdminController::class, 'deleteJadwal'])->name('admin.delete_jadwal');

// untuk tambah galeri
Route::get('/tambah-galeri', [AdminController::class, 'tambahGaleri'])->name('admin.tambah_galeri');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// route untuk pemanggilan database siswa
Route::get('/dashboard', [SiswaController::class, 'index'])->name('admin');
// route untuk button 
Route::get('/dashboard/filter/{kelompok_umur}', [SiswaController::class, 'filter']);
Route::get('/dashboard/jumlah-siswa/{kelompok_umur}', [SiswaController::class, 'jumlahSiswaByKelompokUmur'])->name('admin.admin');


// halaman jadwal
Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');


require __DIR__ . '/auth.php';
