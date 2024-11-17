<?php

use App\Http\Controllers\Api\ApiDiscountController;
use App\Http\Controllers\Api\ApiOrderController;
use App\Http\Controllers\Api\ApiOrderItemController;
use App\Http\Controllers\Api\ApiProductController;
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

// //products with pagination api
// Route::get('/product', [App\Http\Controllers\Api\ApiProductController::class, 'getProduct'])->middleware('auth:sanctum');

// //products with pagination api
// Route::get('/list-product', [App\Http\Controllers\Api\ApiProductController::class, 'getAllProduct'])->middleware('auth:sanctum');

Route::get('/product', [ApiProductController::class, 'index'])->middleware('auth:sanctum');
Route::post('/product', [ApiProductController::class, 'store'])->middleware('auth:sanctum');
Route::post('/products/edit', [ApiProductController::class, 'update'])->middleware('auth:sanctum');
Route::delete('/products/{id}', [ApiProductController::class, 'destroy'])->middleware('auth:sanctum');

//categories api
Route::get('/categories', [App\Http\Controllers\Api\ApiCategoryController::class, 'getCategories'])->middleware('auth:sanctum');
// Route::apiResource('/api-categories', App\Http\Controllers\Api\ApiCategoryController::class)->middleware('auth:sanctum');

//orders api
Route::post('/save-order', [ApiOrderController::class, 'saveOrder'])->middleware('auth:sanctum');

// //discounts api
Route::get('/discounts', [ApiDiscountController::class, 'index'])->middleware('auth:sanctum');

Route::post('/discounts', [ApiDiscountController::class, 'store'])->middleware('auth:sanctum');

// api resource report

Route::get('/orders/{date?}', [ApiOrderController::class, 'index'])->middleware('auth:sanctum');
Route::get('/summary/{date?}', [ApiOrderController::class, 'summary'])->middleware('auth:sanctum');
Route::get('/order-item/{date?}', [ApiOrderItemController::class, 'index'])->middleware('auth:sanctum');
Route::get('/order-sales', [ApiOrderItemController::class, 'orderSales'])->middleware('auth:sanctum');
