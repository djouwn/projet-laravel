<?php

use App\Http\Controllers\ProfileController;
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
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController; 

use App\Http\Controllers\OrderController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\RatingController;


use App\Models\Product;




Route::middleware('auth')->group(function () {
   
    Route::post('/favorite', [FavoriteController::class, 'store'])->name('favorite.store');
    
    
    Route::delete('/favorites/{id}', [FavoriteController::class, 'destroy']);
    
    Route::get('/favorites', [FavoriteController::class, 'index']);
    
        Route::get('/products/{product}', [FavoriteController::class, 'show'])->name('products.show');
});


use App\Http\Controllers\GoogleLoginController;
Route::get('/order', function () {
    return view('order');
})->middleware('auth');


Route::get('/api/order/total-billing', [OrderController::class, 'getTotalBilling'])->middleware('auth');


Route::post('/api/order/add', [OrderController::class, 'addToOrder'])->middleware('auth');

Route::resource('categories', CategoryController::class);
Route::get('/', function () {
    return view('splash');
})->name('splash');
Route::get('/welcome', [ProductController::class, 'index']);

Route::get('/products-show', [ProductController::class, 'index'])->name('products.index');
Route::get('/products-show/{id}', [ProductController::class, 'show'])->name('products.show');


Route::get('/sneakers', [ProductController::class, 'showSneakers'])
    ->middleware('client');
    Route::get('/google/redirect', [App\Http\Controllers\GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
    Route::get('/google/callback', [App\Http\Controllers\GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');
 //   Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
 Route::get('/products-create', [ProductController::class, 'create'])->name('products.create');
Route::get('/dashboard', [ProductController::class, 'index2'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
Route::middleware('admin')->group(function () {
    Route::resource('promotions', PromotionController::class);
    Route::resource('/categories', CategoryController::class);
});
Route::resource('ratings', RatingController::class);

Route::put('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::get('/showcategories', function () {
    return view('categories/create');
});

use App\Http\Controllers\ClientController; 

Route::middleware('client')->group(function () {
    Route::resource('products', ProductController::class);
    Route::get('/client/dashboard', [ClientController::class, 'index'])->name('client.dashboard');
    Route::resource('client/products', ProductController::class);
    Route::resource('client/orders', OrderController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
use App\Http\Controllers\PromotionController;



require __DIR__.'/auth.php';
