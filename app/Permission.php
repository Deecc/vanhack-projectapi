<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
        'crud_user', 'crud_job', 'crud_company', 'crud_role', 'crud_category', 'crud_forum_as_user', 'crud_forum_as_admin'
    ];
    //
    public function role()
    {
        return $this->belongsTo('App\Role');
    }
}
