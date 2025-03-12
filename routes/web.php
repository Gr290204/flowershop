<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});
Route::get('/hello', function () {
    return view('hello', ['title' => 'Hello world!']);
});

Route::get('/clients', [ClientController::class, 'index']);
Route::get('/client/{id}', [ClientController::class, 'show']);

Route::get('/orders', [OrderController::class, 'index']);
Route::get('/order/{id}', [OrderController::class, 'show']);
