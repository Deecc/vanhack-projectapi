<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    protected $fillable = [
        'title', 'description', 'positions'
    ];

    public function category()
    {
        return $this->hasOne('App\Category');
    }

    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
