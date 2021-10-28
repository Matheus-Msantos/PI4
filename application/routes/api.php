<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\OrderController;




/*-- Route user e auth --*/
Route::group([ 'middleware' =>'auth:sanctum'], function(){
    Route::get('/product', [ProductController::class, 'indexApi']);
    Route::get('/cart/add/{product}', [CartsController::class, 'add']);
    Route::get('/cart/remove/{product}', [CartsController::class, 'remove']);
    Route::get('/cart', [CartsController::class, 'index']);
    Route::get('/cart/payment', [CartsController::class, 'payment']);
    Route::post('/order/add', [OrderController::class, 'add']);
    Route::get('/order', [OrderController::class, 'indexApi']);

});

Route::post('/login', [UserController::class, 'login']);
Route::post('/user', [UserController::class, 'storeApi']);
Route::put('/user/{user}', [UserController::class, 'updateApi']);
Route::delete('/user/{user}', [UserController::class, 'destroyApi']);

/*-- Route Product --*/
Route::post('/product', [ProductController::class, 'storeApi']);
Route::get('/product/{product}', [ProductController::class, 'show']);
Route::put('/product/{product}', [ProductController::class, 'updateApi']);
Route::delete('/product/{product}', [ProductController::class, 'destroyApi']);

/*-- Route Category --*/
Route::get('/category', [CategoryController::class, 'indexApi']);
Route::post('/category', [CategoryController::class, 'storeApi']);
Route::get('/category/{category}', [CategoryController::class, 'show']);
Route::put('/category/{category}', [CategoryController::class, 'updateApi']);
Route::delete('/category/{category}', [CategoryController::class, 'destroyApi']);


/*-- Route Address --*/
Route::get('/address', [AddressController::class, 'index']);
Route::post('/address', [AddressController::class, 'store']);
Route::get('/address/{address}', [AddressController::class, 'show']);
Route::put('/address/{address}', [AddressController::class, 'update']);
Route::delete('/address/{address}', [AddressController::class, 'destroy']);
