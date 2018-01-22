<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable = [
        'legal_name', 'operation_name', 'email', 'phone_number', 'image_url'
    ];

    public function address()
    {
        return $this->hasOne('App\Address');
    }

    public function jobs()
    {
        return $this->hasMany('App\Job');
    }
}
