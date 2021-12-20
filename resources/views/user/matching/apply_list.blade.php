<!-- layouts/user.blade.phpを読み込む -->
@extends('layouts.user')
@section('title', 'Football Match')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h1>他チーム応募検索結果</h1>
        </div>
        <div>
            <h3>Fチーム</h3>
            <div>
                xx月xx日(x)xx:xx～xx:xx　神奈川県　募集中！！
            </div>
            <a href="">応募詳細へ</a>
        </div>
        <div>
            <h3>Gチーム</h3>
            <div>
                xx月xx日(x)xx:xx～xx:xx　神奈川県　募集中です。
            </div>
            <a href="">応募詳細へ</a>
        </div>
        <div>
            <h3>Yチーム</h3>
            <div>
                xx月xx日(x)xx:xx～xx:xx　神奈川県　募集中しています。
            </div>
            <a href="">応募詳細へ</a>
        </div>
    </div>
@endsection