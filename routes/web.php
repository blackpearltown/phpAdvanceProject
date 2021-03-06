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


Route::get('/', function(){
    return view('welcome');
});
//Admin Panel
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('index');
    Route::resource('products', 'ProductController');
    Route::resource('brands', 'BrandController');
    Route::resource('types', 'TypeController');
    Route::resource('nations', 'NationController');
    
});



Route::group(['middleware' => ['web', 'admin'], 'prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::resource('products', 'ProductController');
    Route::resource('brands', 'BrandController');
    Route::resource('types', 'TypeController');
    Route::resource('nations', 'NationController');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

