<!-- layouts/user.blade.phpを読み込む -->
@extends('layouts.user')
@section('title', 'Football Match')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h1>マイページ</h1>
        </div>
        <ul>
            <li><a href=" {{ url('/user/mypage/apply_create') }}">応募投稿作成</a></li>
        </ul>
    </div>
@endsection