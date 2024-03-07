<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MessegeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PriceDetailController;
use App\Http\Controllers\ProductBrendController;
use App\Http\Controllers\ProductRepairController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TypeRepairController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/role', [RoleController::class, 'index']);
Route::post('/role', [RoleController::class, 'store']);
Route::get('/role/{id}', [RoleController::class, 'show']);
Route::patch('/role/{id}', [RoleController::class, 'update']);
Route::delete('/role/{id}', [RoleController::class, 'destroy']);



Route::get('/category', [CategoryController::class, 'index']);
Route::post('/category', [CategoryController::class, 'store']);
Route::get('/category/{id}', [CategoryController::class, 'show']);
Route::patch('/category/{id}', [CategoryController::class, 'update']);
Route::delete('/category/{id}', [CategoryController::class, 'destroy']);


Route::get('/messege', [MessegeController::class, 'index']);
Route::post('/messege', [MessegeController::class, 'store']);
Route::get('/messege/{id}', [MessegeController::class, 'show']);
Route::patch('/messege/{id}', [MessegeController::class, 'update']);
Route::delete('/messege/{id}', [MessegeController::class, 'destroy']);


Route::get('/order', [OrderController::class, 'index']);
Route::post('/order', [OrderController::class, 'store']);
Route::get('/order/{id}', [OrderController::class, 'show']);
Route::patch('/order/{id}', [OrderController::class, 'update']);
Route::delete('/order/{id}', [OrderController::class, 'destroy']);




Route::get('/pricedetail', [PriceDetailController::class, 'index']);
Route::post('/pricedetail', [PriceDetailController::class, 'store']);
Route::get('/pricedetail/{id}', [PriceDetailController::class, 'show']);
Route::patch('/pricedetail/{id}', [PriceDetailController::class, 'update']);
Route::delete('/pricedetail/{id}', [PriceDetailController::class, 'destroy']);

Route::get('/productbrend', [ProductBrendController::class, 'index']);
Route::post('/productbrend', [ProductBrendController::class, 'store']);
Route::get('/productbrend/{id}', [ProductBrendController::class, 'show']);
Route::patch('/productbrend/{id}', [ProductBrendController::class, 'update']);
Route::delete('/productbrend/{id}', [ProductBrendController::class, 'destroy']);


Route::get('/productrepair', [ProductRepairController::class, 'index']);
Route::post('/productrepair', [ProductRepairController::class, 'store']);
Route::get('/productrepair/{id}', [ProductRepairController::class, 'show']);
Route::patch('/productrepair/{id}', [ProductRepairController::class, 'update']);
Route::delete('/productrepair/{id}', [ProductRepairController::class, 'destroy']);



Route::get('/status', [StatusController::class, 'index']);
Route::post('/status', [StatusController::class, 'store']);
Route::get('/status/{id}', [StatusController::class, 'show']);
Route::patch('/status/{id}', [StatusController::class, 'update']);
Route::delete('/status/{id}', [StatusController::class, 'destroy']);

Route::get('/typerepair', [TypeRepairController::class, 'index']);
Route::post('/typerepair', [TypeRepairController::class, 'store']);
Route::get('/typerepair/{id}', [TypeRepairController::class, 'show']);
Route::patch('/typerepair/{id}', [TypeRepairController::class, 'update']);
Route::delete('/typerepair/{id}', [TypeRepairController::class, 'destroy']);

