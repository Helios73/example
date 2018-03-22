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

Route::get('/', 'Controller@index')->name('index');

Route::get('/books', 'BooksController@index')->name('books.index');
Route::get('/books/create', 'BooksController@create')->name('books.create');
Route::post('/books', 'BooksController@store')->name('books.store');
Route::get('/books/edit/{id}', 'BooksController@edit')->name('books.edit');
Route::put('/books/{id}', 'BooksController@update')->name('books.update');
Route::delete('/books/{id}', 'BooksController@destroy')->name('books.destroy');

Route::get('/authors', 'AuthorsController@index')->name('authors.index');
Route::get('/authors/create', 'AuthorsController@create')->name('authors.create');
Route::post('/authors', 'AuthorsController@store')->name('authors.store');
Route::get('/authors/edit/{id}', 'AuthorsController@edit')->name('authors.edit');
Route::put('/authors/{id}', 'AuthorsController@update')->name('authors.update');
Route::delete('/authors/{id}', 'AuthorsController@destroy')->name('authors.destroy');

Route::get('/search/', 'Controller@search')->name('search');