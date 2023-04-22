<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BoardGamesController;


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/games', [BoardGameController::class, 'index']);
    Route::get('/games/create', [BoardGameController::class, 'create']);
    Route::post('/games', [BoardGameController::class, 'store']);
    Route::get('/games/{id}/edit', [BoardGameController::class, 'edit']);
    Route::put('/games/{id}', [BoardGameController::class, 'update']);
    Route::delete('/games/{id}', [BoardGameController::class, 'destroy']);
});
