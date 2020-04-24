<?php
namespace App\Http\Controllers;
use App\Authors;



use Illuminate\Support\Facades\DB;

class AuthorsController extends Controller
{
        
    public function show(authors $authors)
    {
        $authors = Authors::all();
        //$authors = DB::table('authors')->get();
        //return $this->whereKey($ids)->get($title);
        
        return view('authors.show', ['authors' => $authors]
    );
    }

    public function create(Authors $authors)
    {
        return view('authors.create',);
    }

    public function store()
    {
        $authors = new Authors(request(['firstname', 'lastname','bio']));
    
        $authors->save();

        
        return view('authors.index', ['authors' => $authors]);
    }
    
    }
