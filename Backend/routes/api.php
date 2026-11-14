<?php

use App\Http\Controllers\CameraController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/cameras', [CameraController::class, 'index']);
Route::get('/cameras/{id}', [CameraController::class, 'show'])->whereNumber('id');
Route::post('/cameras', [CameraController::class, 'store']);
Route::put('/cameras/{id}', [CameraController::class, 'update'])->whereNumber('id');
Route::delete('/cameras/{id}', [CameraController::class, 'destroy'])->whereNumber('id');
Route::get('/categories', [CategoryController::class, 'index']);
