<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{

    protected $fillable = ['firstname', 'lastname', 'bio'];


    public function path()
    {
        return route('authors.show', $this);
    }
}
