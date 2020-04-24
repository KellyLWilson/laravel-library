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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('books', 'BooksController@show');
Route::get('patrons', 'PatronsController@show');
Route::get('authors', 'AuthorsController@show');
Route::get('/patrons/create', 'PatronsController@create');
Route::get('/books/create', 'BooksController@create');
Route::get('/authors/create', 'AuthorsController@create');
Route::post('/authors/create', 'AuthorsController@store');
Route::get('/books/create', 'BooksController@create');
Route::post('/books/create', 'BooksController@store');
Route::get('/patrons/create', 'PatronsController@create');
Route::post('/patrons/create', 'PatronsController@store');
