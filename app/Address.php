<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    protected $fillable = [
        'street', 'number', 'complement', 'province', 'city', 'addressesId'
    ];
    
    public function countries() {
        return $this->hasOne('App\Country');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
