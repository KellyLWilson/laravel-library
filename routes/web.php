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

// Route::get('/books', function () {
    
//     return view('books');
// });

    // Route::get('/books', function() {
    //     $books = DB::table('books')->get();
    //     //$books = App\Books::all();

    //     dd($books);  

    // //     //return $book;
        
    // //     //return view('books');
    // });

// Route::get('/patrons', function () {
//     $patron = App\Patron::all();
//     dd($patron);
//     //return view('patrons');
// });


Route::get('books', 'BooksController@show');
Route::get('patrons', 'PatronsController@show');
Route::get('authors', 'AuthorsController@show');
//Route::get('books', 'BooksController@index');
//Route::get('/books/{book}', 'BooksController@show')->name('books.show');