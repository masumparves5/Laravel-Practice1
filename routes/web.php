<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
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

Route::get('/', [HomeController::class, 'index']) ->name('home');
Route::get('/contact', [HomeController::class, 'contact']) ->name('contact');
Route::get("/products", [HomeController::class, 'products']) ->name('products');
Route::get("/detail/{id}", [HomeController::class, 'detail']) ->name('detail');
Route::get("/categories/{id}", [HomeController::class, 'category']) ->name('categories');
Route::post('/makeOddEven', [HomeController::class, 'makeOddEven']) ->name('makeOddEven') ;

Route::get('/add-blog', [BlogController::class, 'index']) ->name('blog.add');               // for view file
Route::get('/manage-blog', [BlogController::class, 'manageBlog']) ->name('blog.manage');    // send data to view file
Route::post('/new-blog', [BlogController::class, 'saveBlog']) ->name('blog.new');           // get data from view file





