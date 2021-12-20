<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    //「代表者新規登録」代表者チーム新規登録、チーム編集
    public function regist()
    {
        return view('user.team.regist');
    }

    public function register(Request $request)
    {
        return redirect('user/home/mypage');
    }

    public function edit()
    {
        return view('user.team.edit');
    }

}
