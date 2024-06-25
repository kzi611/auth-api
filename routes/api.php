<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login'])->name('login');
Route::post('logout', [UserController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware(['auth:sanctum'])->get('products', [ProductController::class, 'index']);
Route::middleware(['auth:sanctum', 'role:admin'])->post('products', [ProductController::class, 'store']);
Route::middleware(['auth:sanctum', 'role:user'])->get('products/{id}', [ProductController::class, 'show']);
Route::middleware(['auth:sanctum', 'role:admin'])->put('products/{id}', [ProductController::class, 'update']);
Route::middleware(['auth:sanctum', 'role:admin'])->delete('products/{id}', [ProductController::class, 'destroy']);