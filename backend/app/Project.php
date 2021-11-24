<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function people()
    {
        return $this->belongsToMany('App\Models\Person')->withTimestamps();
    }
}
