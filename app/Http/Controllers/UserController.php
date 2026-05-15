<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Userss;

class UserController extends Controller
{
    public function getAll()
    {
        $users = Userss::get();
        $profiles = Userss::find(1)->profiles;
        return view('users.all', ['userss' => $users, 'profiles' => $profiles]);
    }
}
