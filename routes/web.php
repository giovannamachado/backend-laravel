<?php

use app\Http\Controllers\CategoryController;
use app\Http\Controllers\TransactionController;
use app\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/categories', [CategoryController::class, 'store']);
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::get('/categories', [CategoryController::class, 'index']);
Route::post('/transactions', [TransactionController::class, 'store']);
Route::delete('/transactions/{id}', [TransactionController::class, 'destroy'])->name('transactions.destroy');
Route::get('/transacoes', [TransactionController::class, 'index']);
Route::put('/user/{id}', [UserController::class, 'editar']);




