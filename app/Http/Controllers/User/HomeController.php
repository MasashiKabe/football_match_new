<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Recruitments;

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
        $this->validate($request, Recruitments::$rules);

        $recruitments = new Recruitments;
        $form = $request->all();

        $form['team_id'] = $team['id'];

        unset($form['_token']);
        unset($form['image']);

        $recruitments->fill($form);
        $recruitments->save();

        return redirect('user/mypage/list');
    }

    public function list()
    {
        return view('user.home.list');
    }

}
