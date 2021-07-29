<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grades extends Model
{
    public function lecture()
    {
        return $this->belongsTo('App\Lectures');
    }

    public function student()
    {
        return $this->belongsTo('App\Students');
    }
}
