<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function profile()
    {
        return $this->hasOne('App\Profile');
    }

    public function countries()
    {
        return $this->hasManyThrough('App\Countries', 'App\User');
    }
}

class Profile extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
