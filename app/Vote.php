<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    //
    protected $fillable = [
        'up_count', 'down_count'
    ];
}
