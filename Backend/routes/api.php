<?php

use App\Http\Controllers\CameraController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/cameras', [CameraController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);
