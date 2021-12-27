<!-- layouts/user.blade.phpを読み込む -->
@extends('layouts.user')
@section('title', 'Football Match')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>応募詳細</h1>
                <div>
                    <h3>Fチーム</h3>
                    xx月xx日(x)xx:xx～xx:xx　神奈川県　募集中！！
                    <form action="{{ url('user/matching/apply') }}" method="get">
                        <input type="submit" class="btn btn-primary" value="応募する">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection