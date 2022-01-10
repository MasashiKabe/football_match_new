<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Team;
use App\Recruitment;
use Illuminate\Support\Carbon;

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
        $this->validate($request, Recruitment::$rules);

        $recruitments = new Recruitment;
        $form = $request->all();

        $user = Auth::user();
        $team = Team::where('user_id', $user->id)->first();
        $form['team_id'] = $team['id'];
        $form['start_at'] = date('Y-m-d H:i', strtotime($form['start_at']));
        $form['end_at'] = date('Y-m-d H:i', strtotime($form['end_at']));

        unset($form['_token']);
        unset($form['image']);

        $recruitments->fill($form);
        $recruitments->save();

        return redirect('user/mypage/list');
    }

    public function list()
    {
        Carbon::setLocale('ja');

        $user = Auth::user();
        $team = Team::where('user_id', $user->id)->first();
        $recruitments = Recruitment::where('team_id', $team->id)->get();

        return view('user.home.list', [
            'user' => $user,
            'team' => $team,
            'recruitments' => $recruitments,
        ]);
    }

}
