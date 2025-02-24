<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruebaController;

Route::prefix('api')->group(function () {
    Route::get('/pruebas', [PruebaController::class, 'index']);
    Route::post('/pruebas', [PruebaController::class, 'store']);
});
