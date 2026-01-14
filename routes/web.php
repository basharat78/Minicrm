<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;  
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/login', [AuthController::class, 'loginpage'])->name('login');
Route::post('/login', [AuthController::class, 'index'])->name('login');
Route::middleware(['auth'])->group(function () {
 Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');
 Route::resource('clients', ClientController::class)->except(['show']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});