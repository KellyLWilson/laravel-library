<?php

namespace App\Http\Controllers;
use App\Books;
//use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    

        // public function index()
        // {
        //     $books = DB::table('books')->get();
    
        //     return view('books.index', ['books' => $books]
        // );
        // }

    //     $book = DB::table('books')->get();

    //     //return view('books');  

    //     return view('books', [
    //                 'book' => $book
    //  ]);

    // }



    public function show(books $books)
    {
       $books = DB::table('books')->get();
        //return $this->whereKey($ids)->get($title);
        
        return view('books.show', ['books' => $books]
    );
    }

    // public function create()
    // {

    //     return view('books.create', [
    //         'tags' => Tag::all()
    //     ]);
    // }

    // public function store()
    // {

    //     $this->validateArticle();


    //     $article = new Article(request(['title', 'excerpt', 'body']));
    //     $article->user_id = 1;
    //     $article->save();

    //     $article->tags()->attach(request('tags'));

        //Article::create($this->validateArticle());
            

        //Article::create($validatedAttributes);

        // $article->title = request('title');
        // $article->excerpt = request('excerpt');
        // $article->body = request('body');

        // $article->save();

    //     return redirect(route('articles.index'));
    // }

    // public function edit(Article $article)
    // {
    //     //$article = Article::find($id);
    //     return view('articles.edit', compact('article'));
    // }

    // public function update(Article $article)
    // {
    //     $article->update($this->validateArticle());

        //$article = Article::find($id);
        

        // $article->title = request('title');
        // $article->excerpt = request('excerpt');
        // $article->body = request('body');
        // $article->save();

    //     return redirect(route('articles.show', $article));

    // }

    // public function validateArticle()
    // {
    //     return request()->validate([
    //         'title' => 'required',
    //         'excerpt' => 'required',
    //         'body' => 'required',
    //         'tags' => 'exists:tags,id'
    //     ]);
    // }


}