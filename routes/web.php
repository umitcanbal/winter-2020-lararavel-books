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


Route::get('/api/books', 'APIBookController@index');

Route::get('/books', 'BookController@index');

Route::get('/books-orm', 'BookORMController@index');
Route::get('/books-orm/create', 'BookORMController@create');
Route::get('/books-orm/{id}', 'BookORMController@show');

Route::get('/publishers', 'PublisherController@index');
Route::get('/publishers/create', 'PublisherController@create');
Route::get('/publishers/{id}', 'PublisherController@show');
Route::post('/publishers', 'PublisherController@store');


hghghgh