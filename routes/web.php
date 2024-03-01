<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class, 'index']);

Route::get('/products',[ProductController::class, 'index']);
Route::get('/products/category/food-beverage',[ProductController::class, 'category']);
Route::get('/products/category/beauty-health',[ProductController::class, 'category']);
Route::get('/products/category/home-care',[ProductController::class, 'category']);
Route::get('/products/category/baby-kid',[ProductController::class, 'category']);

Route::get('/user/{id}/name/{name}', [userController::class, 'index']);

Route::get('/transaction', [TransactionController::class, 'index']);