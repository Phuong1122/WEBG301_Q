<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardGamesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('boardgames', BoardGamesController::class);
Route::resource('categories', CategoriesController::class);

Route::get('login', [LoginController::class, 'index'])->name('login.index');
Route::post('login', [LoginController::class, 'login'])->name('login.login');
Route::get('logout', [LoginController::class, 'logout'])->name('login.logout');
