<!-- layouts/user.blade.phpを読み込む -->
@extends('layouts.user')
@section('title', 'Football Match')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h1>マッチング一覧</h1>
        </div>
        <div>
            <h3>1件目</h3>
            <div>
                xx月xx日(x)xx:xx～xx:xx
            </div>
            <a href="">詳細へ</a>
        </div>
        <div>
            <h3>2件目</h3>
            <div>
                xx月xx日(x)xx:xx～xx:xx
            </div>
            <a href="">詳細へ</a>
        </div>
        <div>
            <h3>3件目</h3>
            <div>
                xx月xx日(x)xx:xx～xx:xx
            </div>
            <a href="">詳細へ</a>
        </div>
        <div>
        <a href=" {{ url('/user/matching/search_apply') }}">対戦相手を探す→→→</a></li>
        </div>
    </div>
@endsection