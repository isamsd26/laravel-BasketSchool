<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::get('/user/logout', [UserController::class, 'destroy'])->name('admin.logout');

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/', [UserController::class, 'home'])->name('index');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/berita', [UserController::class, 'berita'])->name('berita');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
