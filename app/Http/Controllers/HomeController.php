<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     //「トップページ」一般ユーザーの閲覧画面
    public function index()
    {
        return view('index');
    }

    public function search()
    {
        return view('search');
    }

    public function list()
    {
        return view('list');
    }

    public function detail()
    {
        return view('detail');
    }
}
