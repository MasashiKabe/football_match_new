<!-- layouts/user.blade.phpを読み込む -->
@extends('layouts.user')
@section('title', 'Football Match')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>チーム新規登録</h1>
                <form action="{{ action('User\TeamController@register') }}" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-md-2" for="image">チーム写真</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="nickname">代表者ニックネーム</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="nickname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="team_name">チーム名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="team_name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="age">メンバー年代</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="age">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="league">加盟リーグ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="league">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="area">活動地域</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="area">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="comment">コメント</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="comment" cols="30" rows="20"></textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" value="登録">
                </form>
            </div>
        </div>
    </div>
@endsection