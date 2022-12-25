<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', [\App\Http\Controllers\FirstController::class, 'index']);
Route::get('/catalog', [\App\Http\Controllers\CatalogController::class, 'catalog']);
Route::get('/catalog/{category}', [\App\Http\Controllers\CatalogController::class, 'category']);
Route::get('/catalog/{category}/{product}', [\App\Http\Controllers\CatalogController::class, 'product']);
Route::post('/add-to-cart', [\App\Http\Controllers\CartController::class, 'addToCart'])
->name('addToCart');
Route::get('/cart', [\App\Http\Controllers\CartController::class, 'show']);

Route::prefix('admin')->middleware('role:admin')->group(function (){
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('categories', CategoryController::class)
        ->except('show');
    Route::resource('products', ProductController::class);
});


Auth::routes();
