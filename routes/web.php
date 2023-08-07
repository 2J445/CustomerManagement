<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('newpage',[\App\Http\Controllers\NewPageController::class, 'newpage']);
Route::get('/shops', [\App\Http\Controllers\ShopListController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/roles', [App\Http\Controllers\RoleController::class,'index'])->name('ロール一覧')->middleware('auth');
Route::resource('/customers', \App\Http\Controllers\CustomerController::class)->middleware('auth');

/*検索機能*/
Route::get('/customer_search', '\App\Http\Controllers\CustomerSearchController@index')->middleware('auth');
Route::post('customer_search', '\App\Http\Controllers\CustomerSearchController@search')->middleware('auth');

Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('社員一覧')->middleware('auth');
URL::forceScheme('https');
