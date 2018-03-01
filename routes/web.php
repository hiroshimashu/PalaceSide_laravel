<?php

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
    return view('home');
});


Route::get('/shop', function () {
   return view('actions/shop');
});


Route::get('/shopMap', function () {
    return view('actions/shopMap');
});


Route::get('/contact', 'HelloController@index');

Route::post('/contact', 'HelloController@post');

