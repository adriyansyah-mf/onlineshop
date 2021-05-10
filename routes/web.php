<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ProductIndex;
use App\Http\Livewire\CartIndex;
use App\Http\Controllers\PesananController;

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


Route::get('/', \App\Http\Livewire\ProductIndex::class)->name('product.index');
Route::get('/cart', \App\Http\Livewire\CartIndex::class)->name('cart.index');
Route::post('/checkout',[\App\Http\Controllers\PesananController::class, 'tambah']);
