<?php

use app\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::post('/categories', [CategoryController::class, 'store']);
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');



