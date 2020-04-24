<?php
namespace App\Http\Controllers;
use App\Authors;



use Illuminate\Support\Facades\DB;

class AuthorsController extends Controller
{
        
    public function show(authors $authors)
    {
       $authors = DB::table('authors')->get();
        //return $this->whereKey($ids)->get($title);
        
        return view('authors.show', ['authors' => $authors]
    );
    }
    
    }
