<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Teams;

class TeamController extends Controller
{
    //「代表者新規登録」代表者チーム新規登録、登録したチームを画面に表示、そこからチーム編集、
    public function regist()
    {
        return view('user.team.regist');
    }

    public function register(Request $request)
    {
        $this->validate($request, Teams::$rules);

        $teams = new Teams;
        $form = $request->all();

        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $teams->picture = basename($path);
        } else {
            $teams->picture = null;
        }

        unset($form['_token']);
        unset($form['image']);

        $teams->fill($form);
        $teams->save();

        return redirect('user/mypage');
    }

    public function index(Request $request)
    {
        $posts = Teams::all();

        return view('user.home.mypage',['posts' => $posts]);
    }

    public function edit()
    {
        return view('user.team.edit');
    }

}
