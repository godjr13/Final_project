<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;

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

Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/signup', 'App\Http\Controllers\PagesController@signup');
Route::get('/items/create', 'App\Http\Controllers\ItemsController@create');
Route::delete('/items', 'App\Http\Controllers\ItemsController@destroy');

Route::resource('/menu', ItemsController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');
Route::get('/add-to-cart/{id}', 'App\Http\Controllers\CartController@add')->name('cart.add')->middleware('auth');

Route::get('/cart', 'App\Http\Controllers\CartController@index')->middleware('auth');
