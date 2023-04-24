<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardGamesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\CartsController;

Route::get('/', function () {
    return view('login');
});

Route::resource('boardgames', BoardGamesController::class);

Route::resource('categories', CategoryController::class);

Route::resource('sales', SalesController::class);

Route::resource('customers', CustomersController::class);

Route::resource('carts', CartsController::class);