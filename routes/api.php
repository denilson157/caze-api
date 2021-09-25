<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::group(['middleware' => 'auth:sanctum'], function () {

    Route::post('/brand', [BrandController::class, 'store']);
    Route::put('/brand/{brand}', [BrandController::class, 'update']);
    Route::delete('/brand/{brand}', [BrandController::class, 'destroy']);
    Route::post('/brand/restore/{brand}', [BrandController::class, 'restore']);
    Route::post('/brand/trash', [BrandController::class, 'getTrashed']);

    Route::post('/category', [CategoryController::class, 'store']);
    Route::put('/category/{category}', [CategoryController::class, 'update']);
    Route::delete('/category/{category}', [CategoryController::class, 'destroy']);
    Route::post('/category/restore/{category}', [CategoryController::class, 'restore']);
    Route::post('/category/trash', [CategoryController::class, 'getTrashed']);

    Route::post('/product', [ProductController::class, 'store']);
    Route::put('/product/{product}', [ProductController::class, 'update']);
    Route::delete('/product/{product}', [ProductController::class, 'destroy']);
    Route::post('/product/restore/{product}', [ProductController::class, 'restore']);
    Route::post('/product/trash', [ProductController::class, 'getTrashed']);

    Route::post('/logout', [UserController::class, 'logout']);
});

Route::get('/brand', [BrandController::class, 'index']);
Route::get('/brand/{brand}', [BrandController::class, 'show']);

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{category}', [CategoryController::class, 'show']);

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/{product}', [ProductController::class, 'show']);

Route::post('/login', [UserController::class, 'login']);

