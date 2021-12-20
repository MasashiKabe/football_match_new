<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //「マイページ」マイページ　
    public function mypage()
    {
        return view('user.home.mypage');
    }
    
    public function apply_create()
    {
        return view('user.home.apply_create');
    }

    public function submission(Request $request)
    {
        redirect('user/home/mypage');
    }

}
