<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function books()
    {
        return $this->belongsToMany('App\Models\Project')->withTimestamps();
    }
}
