<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Apply;

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
        $this->validate($request, Apply::$rules);

        $apply = new Apply;
        $form = $request->all();

        unset($form['_token']);
        unset($form['image']);

        $apply->fill($form);
        $apply->save();

        return redirect('user/mypage/list');
    }

    public function list()
    {
        return view('user.home.list');
    }

}
