<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/add_product', function(){
//     return view('add_product');
// })->name('product');

Route::get('/', [ProductController::class, 'index'])->name('product.index');
Route::get('/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/update/{id}', [ProductController::class, 'update'])->name('product.update');

Route::get('/showSale', [ProductController::class, 'showSale'])->name('product.showSale');
Route::post('/saleupdate', [ProductController::class, 'salesProcess'])->name('product.salesProcess');

