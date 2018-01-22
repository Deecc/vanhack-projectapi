<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'subject', 'content', 'status'
    ];
    
    public function thread()
    {
        return $this->belongsTo('App\Thread');
    }
}
