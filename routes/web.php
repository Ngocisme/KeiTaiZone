<?php

use App\Repositories\Product\ProductRepositoriesInterface;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cilent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Cilent::class, 'showHome']);

Route::get('/cart', [Cilent::class, 'showCart']);

Route::get('/checkout', [Cilent::class, 'showCheckOut']);

Route::get('/contact', [Cilent::class, 'showContact']);

Route::get('/detail', [Cilent::class, 'showDetail']);

Route::get('/shopo', [Cilent::class, 'showShop']);

Route::get('/check', function(ProductRepositoriesInterface $productRepositories){
    return $productRepositories->find(6);
});