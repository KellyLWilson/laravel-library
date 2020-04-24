<?php
namespace App\Http\Controllers;
use App\Patrons;



use Illuminate\Support\Facades\DB;

class PatronsController extends Controller
{
        
    public function show(patrons $patrons)
    {
       $patrons = DB::table('patrons')->get();
        //return $this->whereKey($ids)->get($title);
        
        return view('patrons.show', ['patrons' => $patrons]
    );
    }
    
    
    
    
       
          
    
    
    }
