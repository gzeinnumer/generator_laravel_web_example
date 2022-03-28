<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ProductController::class, 'index'])->name('product.index');

Route::prefix('product')->group(function () {
    //list
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
    //add
    Route::post('/create', [ProductController::class, 'create'])->name('product.create');
    //info
    Route::get('/find/{id}', [ProductController::class, 'find'])->name('product.find');
    //update
    Route::get('/find_update/{id}', [ProductController::class, 'find_update'])->name('product.find_delete');
    Route::post('/update', [ProductController::class, 'update'])->name('product.update');
    //delete
    Route::get('/find_delete/{id}', [ProductController::class, 'find_delete'])->name('product.find_delete');
    Route::post('/delete', [ProductController::class, 'delete'])->name('product.delete');
});
