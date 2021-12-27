<!-- layouts/user.blade.phpを読み込む -->
@extends('layouts.user')
@section('title', 'Football Match')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>マッチング詳細</h1>
                <form action="{{ url('user/matching/cancel') }}" method="get">
                    <div>
                        <h3>Fチーム</h3>
                        xx月xx日(x)xx:xx～xx:xx　神奈川県　募集中！！
                    </div>
                    <input type="submit" class="btn btn-primary" value="キャンセルする">
                </form>
            </div>
        </div>
    </div>
@endsection