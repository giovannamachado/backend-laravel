<?php

use app\Http\Controllers\CategoryController;
use app\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::post('/categories', [CategoryController::class, 'store']);
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::get('/categories', [CategoryController::class, 'index']);
Route::post('/transactions', [TransactionController::class, 'store']);



