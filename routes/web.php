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


Route::get('index', [ItemController::class, 'createindex'])->name('allItems');

Route::get('create', [ItemController::class, 'create'])->name('newItem');

Route::post('store', [ItemController::class, 'store'])->name('saveItem');

Route::get('delete', [ItemController::class, 'destroy'])->name('deleteItem');

Route::get('edit', [ItemController::class, 'edit'])->name('editItem');

Route::post('update', [ItemController::class, 'update'])->name('updateItem');

Route::get('/', function ()

{
    return view('welcome');
});
