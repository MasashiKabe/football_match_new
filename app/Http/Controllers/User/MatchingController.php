<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Recruitment;
use App\Team;
use App\Apply;

class MatchingController extends Controller
{
    //「試合依頼」マッチング済一覧、マッチング詳細、キャンセル、応募検索、応募詳細、応募する
    public function list()
    {
        $user = Auth::user();
        $team = Team::where('user_id', $user->id)->first();
        $recruitments = Recruitment::where('team_id', $team->id)->first();
        $applys = Apply::where('recruitment_id', $recruitments->id)->get();

        return view('user.matching.list', [
            'user' => $user,
            'team' => $team,
            'recruitments' => $recruitments,
            'applys' => $applys,
        ]);
    }

    public function matching_detail()
    {
        $user = Auth::user();
        $team = Team::where('user_id', $user->id)->first(); 

        return view(
            'user.matching.matching_detail', [
                'user' => $user,
                'team' => $team,
        ]);
    }

    public function cancel()
    {
        return view('user.matching.cancel');
    }

    public function true_cancel(Request $request)
    {
        return redirect('user/matching/list');
    }

    public function search_apply()
    {
        $user = Auth::user();
        $team = Team::where('user_id', $user->id)->first(); 
        //応募を探す
        $recruitments = Recruitment::get();

        return view('user.matching.search_apply', [
            'user' => $user,
            'team' => $team,
            'recruitments' => $recruitments,
        ]);
    }

    public function apply_list()
    {
        return view('user.matching.apply_list');
    }

    public function apply_detail()
    {
        return view('user.matching.apply_detail');
    }

    public function apply()
    {
        return view('user.matching.apply');
    }

    public function apply_now(Request $request)
    {
        $this->validate($request, Apply::$rules);

        $apply = new Apply;
        $form = $request->all();

        $user = Auth::user();
        $team = Team::where('user_id', $user->id)->first();
        $recruitments = Recruitment::where('team_id', $team->id)->first();
        $form['team_id'] = $team['id'];
        $form['recruitment_id'] = $recruitments['id'];

        $form['is_approval'] = false;

        unset($form['_token']);

        $apply->fill($form);
        $apply->save();

        return redirect('user/matching/list');
    }
}
