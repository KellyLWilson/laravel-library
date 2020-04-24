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


    public function create(Patrons $patrons)
    {
        return view('patrons.create',);
    }

    public function store()
    {
        $patrons = new Patrons(request(['firstname', 'lastname','email', 'phone']));
    
        $patrons->save();

        return view('patrons.index', ['patrons' => $patrons]);
    }
    
    }
