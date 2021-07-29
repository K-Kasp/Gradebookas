<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    public function grade()
    {
        return $this->hasMany('App\Grades');
    }
}
