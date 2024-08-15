<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/log', [\App\Http\Controllers\LoggerController::class, 'log']);
Route::get('/log-to/{type}', [\App\Http\Controllers\LoggerController::class, 'logTo']);
Route::get('/log-all', [\App\Http\Controllers\LoggerController::class, 'logToAll']);
