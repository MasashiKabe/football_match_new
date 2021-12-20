<!-- layouts/user.blade.phpを読み込む -->
@extends('layouts.user')
@section('title', 'Football Match')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>応募投稿作成</h1>
                <form action="{{ action('User\HomeController@submission') }}" method="post">
                    <div class="form-group row">
                        <label class="col-md-2" for="date">募集日時</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="area">エリア・会場</label>
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
                    <input type="submit" class="btn btn-primary" value="投稿する">
                </form>
            </div>
        </div>
    </div>
@endsection