<?php

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

Route::get('inventario', [App\Http\Controllers\ProductController::class, 'listar']);
Route::get('crear', [App\Http\Controllers\ProductController::class, 'crear']);
Route::get('new_update', [App\Http\Controllers\ProductController::class, 'new_update_product']);
Route::get('delete', [App\Http\Controllers\ProductController::class, 'delete_product']);
Route::get('venta', [App\Http\Controllers\ProductController::class, 'sale']);