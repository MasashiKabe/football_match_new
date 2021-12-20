<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    //「試合承認」承認受付一覧、承認受付詳細、承認、承認しない
    public function list()
    {
        return view ('user.approval.list');
    }

    public function detail()
    {
        return view ('user.approval.detail');
    }

    public function approval(Request $request)
    {
        redirect('user/approval/list');
    }

    public function disapproval(Request $request)
    {
        redirect('user/approval/list');
    }

}
