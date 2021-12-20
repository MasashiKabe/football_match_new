<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MatchingController extends Controller
{
    //「試合依頼」マッチング済一覧、マッチング詳細、キャンセル、応募検索、応募詳細、応募する
    public function list()
    {
        return view('user.matching.list');
    }

    public function matching_detail()
    {
        return view('user.matching.matching_detail');
    }

    public function cancel()
    {
        return view('user.matching.cancel');
    }

    public function true_cancel(Request $request)
    {
        redirect('user/matching/list');
    }

    public function search_apply()
    {
        return view('user.matching.search_apply');
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
        redirect('user/matching/list');
    }
}
