<!-- layouts/user.blade.phpを読み込む -->
@extends('layouts.user')
@section('title', 'Football Match')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>応募投稿作成</h1>
                <form action="{{ action('User\HomeController@submission') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="recruitment_start">試合開始日時</label>
                        <div class="col-md-10">
                            <input type="datetime-local" name="recruitment_start">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="recruitment_close">終了日時</label>
                        <div class="col-md-10">
                            <input type="datetime-local" name="recruitment_close">
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
                        <label class="col-md-2" for="areas">エリア・会場</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="areas">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="address">住所</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="url">URL</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="url">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="note">コメント</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="note" cols="20" rows="10"></textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="投稿する">
                </form>
            </div>
        </div>
    </div>
@endsection