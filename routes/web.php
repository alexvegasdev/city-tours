<?php

use App\Http\Controllers\Auth\EditController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('homepage');

Route::group([
    'middleware' => 'guest'
], static function () {
    Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    Route::get('/login', [LoginController::class, 'show'])->name('login.show');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});

Route::group([
    'middleware' => 'auth'
], static function () {
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
    Route::get('/user/edit', [EditController::class, 'show'])->name('user.edit');
    Route::patch('/user/{user}', [EditController::class, 'update'])->name('user.update');
    Route::delete('/user/{user}', [EditController::class, 'destroy'])->name('user.destroy');
});
