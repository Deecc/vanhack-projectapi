<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryForum extends Model
{
    //
    protected $fillable = [
        'name', 'description'
    ];
}
