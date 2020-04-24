<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{

    protected $fillable = ['title', 'excerpt', 'status'];

    public function path()
    {
        return route('books.show', $this);
    }
}
