<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TextController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TextController::class, 'index']);
Route::get('/category', [TextController::class, 'category']);

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::middleware('auth')->group(function () {
    Route::get('/journalist', [TextController::class, 'create']);
    Route::post('/journalist', [TextController::class, 'store']);
});

Route::get('/admin', function () {
    return view('admin');
})->middleware('auth');