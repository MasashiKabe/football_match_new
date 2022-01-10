<!-- layouts/user.blade.phpを読み込む -->
@extends('layouts.user')
@section('title', 'Football Match')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>チーム新規登録</h1>
                <form action="{{ action('User\TeamController@register') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="picture">チーム写真</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="picture">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="nickname">代表者ニックネーム</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="nickname" value="{{ old('nickname') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="team_name">チーム名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="team_name" value="{{ old('team_name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="age">メンバー年代</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="age" value="{{ old('age') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="league">加盟リーグ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="league" value="{{ old('league') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="prefecture">都道府県</label>
                        <div class="col-md-10">
                            <select name="prefecture">
                            @foreach(config('prefectures') as $prefectures_id => $name)
                                <option value="{{ $prefectures_id }}">{{ $name }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="area">活動地域</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="area" value="{{ old('area') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="note">コメント</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="note" cols="20" rows="10">{{ old('note') }}</textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="登録">
                </form>
            </div>
        </div>
    </div>
@endsection