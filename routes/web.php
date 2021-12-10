<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
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

Route::middleware(['auth'])->group( function(){

    Route::get('cart',[CartController::class, 'myCart'])->name('cart');
    Route::post('addQty/{id}',[CartController::class, 'addQty'])->name('addQty');
    Route::post('minusQty/{id}',[CartController::class, 'minusQty'])->name('minusQty');

    Route::post('category',[OrderController::class, 'showCategory']);
    Route::resource('orders', OrderController::class);

} );

require __DIR__.'/auth.php';
