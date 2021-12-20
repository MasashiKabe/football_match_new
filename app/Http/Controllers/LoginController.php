<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //いらない？
    public function login()
    {
        return view ('user.login');
    }
}
