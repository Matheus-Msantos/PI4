<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require __DIR__.'/auth.php';

Route::get('/', function () {
    return redirect(Route('login'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group([ 'middleware' => 'isAdmin'], function() {
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/product/update/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product/destroy/{product}', [ProductController::class, 'destroy'])->name('product.destroy');

    Route::get('category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('category/update/{category}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('category/destroy/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');


    Route::get('address', [AddressController::class, 'index'])->name('address.index');
    Route::get('address/create', [AddressController::class, 'create'])->name('address.create');
    Route::post('address/store', [AddressController::class, 'store'])->name('address.store');
    Route::get('address/edit/{address}', [AddressController::class, 'edit'])->name('address.edit');
    Route::post('address/update/{address}', [AddressController::class, 'update'])->name('address.update');
    Route::get('address/destroy/{address}', [AddressController::class, 'destroy'])->name('address.destroy');

    Route::get('user', [UserController::class, 'index'])->name('user.index');
    Route::get('user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('user/store', [UserController::class, 'store'])->name('user.store');
    Route::get('user/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('user/update/{user}', [UserController::class, 'update'])->name('user.update');
    Route::get('user/destroy/{user}', [UserController::class, 'destroy'])->name('user.destroy');


    Route::get('/order', [OrderController::class, 'index'])->name('order.index');
    Route::get('/order/edit/{order}', [OrderController::class, 'edit'])->name('order.edit');
    Route::post('order/update/{order}', [OrderController::class, 'update'])->name('order.update');
});

