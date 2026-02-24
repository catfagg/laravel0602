<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function show()
    {
         return 'hello user';
    }

    public function all()
    {
        return 'hello all';
    }
}