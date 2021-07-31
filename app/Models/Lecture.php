<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $fillable = ['title', 'description'];

    public function grade()
    {
        return $this->hasMany('App\Grade');
    }
}

