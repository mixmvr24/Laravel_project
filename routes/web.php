<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\CheckAge;
use App\Http\Middleware\CheckDate;
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

Route::get('/check', [LoginController::class, 'check'])->middleware(CheckDate::class)->name('check');

Route::post('/add_to_wish', [CartController::class, 'addToWish'])->name('add_to_wish');
Route::get('/wish', [CartController::class, 'showWish'])->name('showWish');

Route::post('/add_to_cart', [CartController::class, 'addToCart'])->name('add_to_cart');
Route::get('/cart', [CartController::class, 'showCart'])->name('showCart');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'registration'])->name('registration');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'checklogin'])->name('checklogin');

Route::get('/', [HomeController::class, 'index'])->name('main_page');

Route::get('/catalog/{category}/{product}',[CatalogController::class, 'product'])->name('product');
Route::get('/catalog/{category}', [CatalogController::class, 'category'])->name('catalog_category');
Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');

Route::prefix('/adm')->name('admin.')->middleware(CheckAge::class)->group(function (){
    Route::view('/', 'admin.dashboard');
    Route::resources([
        '/categories'=> CategoryController::class,
        '/products'=> ProductController::class
    ]);
});







