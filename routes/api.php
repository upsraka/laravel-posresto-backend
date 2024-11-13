<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//login api
Route::post('/login', [App\Http\Controllers\Api\ApiAuthController::class, 'login']);

//logout api
Route::post('/logout', [App\Http\Controllers\Api\ApiAuthController::class, 'logout'])->middleware('auth:sanctum');

//products with pagination api
Route::get('/product', [App\Http\Controllers\Api\ApiProductController::class, 'getProduct'])->middleware('auth:sanctum');

//products with pagination api
Route::get('/list-product', [App\Http\Controllers\Api\ApiProductController::class, 'getAllProduct'])->middleware('auth:sanctum');

//categories api
Route::get('/categories', [App\Http\Controllers\Api\ApiCategoryController::class, 'getCategories'])->middleware('auth:sanctum');
// Route::apiResource('/api-categories', App\Http\Controllers\Api\ApiCategoryController::class)->middleware('auth:sanctum');

// //orders api
// Route::post('/save-order', [App\Http\Controllers\Api\OrderController::class, 'saveOrder'])->middleware('auth:sanctum');

// //discounts api
// Route::get('/api-discounts', [App\Http\Controllers\Api\DiscountController::class, 'index'])->middleware('auth:sanctum');

// Route::post('/api-discounts', [App\Http\Controllers\Api\DiscountController::class, 'store'])->middleware('auth:sanctum');
