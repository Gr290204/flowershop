<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientControllerApi;
use App\Http\Controllers\FlowerControllerApi;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderControllerApi;
use App\Http\Controllers\StatusController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('home');

});
Route::get('/hello', function () {
    return view('hello', ['title' => 'Hello world!']);
});
Route::middleware(['auth'])->group(function () {
    Route::get('/statuses', [StatusController::class, 'index']);


    Route::get('/clients', [ClientController::class, 'index']);
    Route::get('/client/{id}', [ClientController::class, 'show']);

    Route::get('/order/edit/{id}', [OrderController::class, 'edit']);
    Route::post('/order/update/{id}', [OrderController::class, 'update']);

    Route::get('/order/create', [OrderController::class, 'create']);
    Route::get('/order/destroy/{id}', [OrderController::class, 'destroy']);

    Route::get('/orders', [OrderController::class, 'index']);
    Route::get('/order/{id}', [OrderController::class, 'show']);

    Route::post('/order', [OrderController::class, 'store']);
});

Route::get('/order', function () {
    return redirect('/orders');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/auth',  [LoginController::class, 'authenticate']);

Route::get('/error', function () {
    return view('error', ['message' => session('message')]);
});
