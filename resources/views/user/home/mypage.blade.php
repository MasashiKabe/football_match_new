<!-- layouts/user.blade.phpを読み込む -->
@extends('layouts.user')
@section('title', 'Football Match')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>マイページ</h1>
                <div class="form-group row">
                    <form action="{{ url('user/mypage/apply_create') }}" method="get">
                        <input type="submit" class="btn btn-primary" value="募集投稿を作成する">
                    </form>
                </div>
                <div class="form-group row">
                    <form action="{{ url('user/mypage/list') }}" method="get">
                        <input type="submit" class="btn btn-primary" value="私の募集投稿一覧">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection