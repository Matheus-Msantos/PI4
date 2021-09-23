<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AddressController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*-- Route Product --*/
Route::get('/product', [ProductController::class, 'indexApi']);
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
