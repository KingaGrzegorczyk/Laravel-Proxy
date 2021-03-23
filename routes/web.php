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
    return view('MainView');
});
Route::get('/proxy', 'App\Http\Controllers\ProxyController@proxy')->name('proxy');
Route::get('/show', 'App\Http\Controllers\ProxyController@show')->name('show');
