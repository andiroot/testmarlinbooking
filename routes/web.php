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
    return view('data');
});

Auth::routes();
Route::post('/cek','CekOngkirController@check')->name('cek.ongkir');
Route::get('/get',function(){
    return RajaOngkir::city();
});
Route::get('/home', 'HomeController@index')->name('home');
