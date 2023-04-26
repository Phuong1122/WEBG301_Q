<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardGamesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\CartsController;

Route::get('/', function () {
    return view('front.index');
});

Route::get('/shop/product/{$id}', function () {
    return view('front.show');
});
