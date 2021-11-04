<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['file_name'];

    public function comments()
    {
        return $this->hasMany('App\Comment')->orderBy('id','desc');
    }
}
