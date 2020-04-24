<?php

namespace App\Http\Controllers;
use App\Books;
//use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    
    public function show(books $books)
    {
       $books = Books::all();
        //$books = DB::table('books')->get();
        //return $this->whereKey($ids)->get($title);
        
        return view('books.show', ['books' => $books]
    );
    }

    public function create(Books $books)
    {
        return view('books.create',);
    }

    public function store()
    {
        $books = new Books(request(['title', 'excerpt','status']));
    
        $books->save();

        return view('books.index', ['books' => $books]);
    }

}