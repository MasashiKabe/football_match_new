<!-- layouts/user.blade.phpを読み込む -->
@extends('layouts.user')
@section('title', 'Football Match')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h1>他チーム応募検索</h1>
        </div>
        <div>
            <h2>条件を指定して検索する</h2>
            <button>検索</button>
        </div>
        <div>
            <h1>応募投稿</h1>
            <h3>Aチーム</h3>
            <div>
                xx月xx日(x)xx:xx～xx:xx　神奈川県　募集中！！
            </div>
            <a href="">応募詳細へ</a>
        </div>
        <div>
            <h3>Bチーム</h3>
            <div>
                xx月xx日(x)xx:xx～xx:xx　千葉県　募集中です。
            </div>
            <a href="">応募詳細へ</a>
        </div>
        <div>
            <h3>Cチーム</h3>
            <div>
                xx月xx日(x)xx:xx～xx:xx　静岡県　募集中しています。
            </div>
            <a href="">応募詳細へ</a>
        </div>
    </div>
@endsection