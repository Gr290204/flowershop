<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientControllerApi;
use App\Http\Controllers\FlowerControllerApi;
use App\Http\Controllers\OrderControllerApi;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' =>['auth:sanctum']], function(){


    Route::get('order', [OrderControllerApi::class, 'index']);
    Route::get('order/{id}', [OrderControllerApi::class, 'show']);
    Route::get( '/user', function (Request $request) {
        return $request->user();
    });
    Route::get( '/logout', [AuthController::class, 'logout']);

});

Route::get('client', [ClientControllerApi::class, 'index']);
Route::get('client/{id}', [ClientControllerApi::class, 'show']);
Route::get('/client_total', [ClientControllerApi::class, 'total']);
Route::get('flower_total', [FlowerControllerApi::class, 'total']);
Route::get('flower/{id}', [FlowerControllerApi::class, 'show']);
Route::get('flower', [FlowerControllerApi::class, 'index']);
Route::post('login', [AuthController::class, 'login']);
