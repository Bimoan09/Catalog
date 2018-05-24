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



Route::get('kontak','ProductController@index')->name('kontak');
Route::get('kontak_create','ProductController@create');
Route::post('kontak','ProductController@store')->name('kontak.store');
Route::get('kontak_edit/{id}','ProductController@edit')->name('kontak_edit');
Route::put('kontak_edit/{id}','ProductController@update')->name('kontak_update');
Route::delete('kontak','ProductController@destroy')->name('kontak_destroy');


Route::get('/', function () {
    return view('index');
});

Route::get('/halaman-kedua', function () {
    return view('halamandua');
});



