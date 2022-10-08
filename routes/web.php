<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product\UsersController;
use App\Http\Controllers\ContactController;

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

// Sample
Route::get('/sample', [\App\Http\Controllers\Sample\IndexController::class, 'show']);
Route::get('/sample/{id}', [\App\Http\Controllers\Sample\IndexController::class, 'showId']);

Route::get('/product', \App\Http\Controllers\Product\IndexController::class)
->name('product.index');

Route::get('/search', \App\Http\Controllers\Product\UsersController::class)
->name('product.search');

Route::get('/contact', function () {
    return view('product.contact');
})->name('contact');

Route::post('/contact', [ContactController::class,'store'])->name('contact.store');

Route::middleware('auth')->group(function () {
    Route::post('/product/create', \App\Http\Controllers\Product\CreateController::class)->name('product.create');
    Route::get('/product/update/{productId}', \App\Http\Controllers\Product\Update\IndexController::class)->name('product.update.index');
    Route::put('/product/update/{productId}', \App\Http\Controllers\Product\Update\PutController::class)->name('product.update.put');
    Route::delete('/product/delete/{productId}', \App\Http\Controllers\Product\DeleteController::class)->name('product.delete');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
