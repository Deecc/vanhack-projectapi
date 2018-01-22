<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    //
    protected $fillable = [
        'subject', 'status'
    ];
    
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
