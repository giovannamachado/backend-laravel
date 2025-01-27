<?php

use app\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::post('/categories', [CategoryController::class, 'store']);

