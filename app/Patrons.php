<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patrons extends Model
{

    protected $fillable = ['firstname', 'lastname', 'email', 'phone'];

    public function path()
    {
        return route('patrons.show', $this);
    }
}
