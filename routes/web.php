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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([ 'middleware' => ['auth'] ], function () {
	Route::get('/barang', 'BarangController@index')->name('brg_all');
	Route::get('/barang/{id}', 'BarangController@show')->name('brg_show');
	Route::post('/barang', 'BarangController@store')->name('brg_create');
	Route::put('/barang/{id}', 'BarangController@update')->name('brg_update');
	Route::delete('/barang/{id}', 'BarangController@destroy')->name('brg_delete');
});
