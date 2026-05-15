<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Userss extends Model
{
    protected $table = 'userss';

    public function profiles()
    {
        return $this->hasOne('App\Models\Profiles');
    }
}
