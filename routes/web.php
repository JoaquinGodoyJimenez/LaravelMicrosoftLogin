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

Route::get('foo', function () {
    return 'Hello World';
});

Route::get('product/create/', 'ProductController@create');
Route::get('person/create/', 'PersonController@create');

Route::get('product', 'ProductController@index')->name('product.index');
Route::get('person', 'PersonController@index')->name('person.index');

Route::post('product', 'ProductController@store')->name('product.store');
Route::post('person', 'PersonController@store')->name('person.store');

Route::get('product/{id}', 'ProductController@show');
Route::get('person/{id}', 'PersonController@show');

Route::get('product/edit/{id}', 'ProductController@edit');
Route::get('person/edit/{id}', 'PersonController@edit');

Route::patch('product/update/{id}', 'ProductController@update')->name('product.update');
Route::patch('person/update/{id}', 'PersonController@update')->name('person.update');

Route::delete('/product/{id}', 'ProductController@destroy')->name('product.destroy');
Route::delete('/person/{id}', 'PersonController@destroy')->name('person.destroy');