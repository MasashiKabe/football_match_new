<!-- layouts/user.blade.phpを読み込む -->
@extends('layouts.user')
@section('title', 'Football Match')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>応募画面</h1>
                <form action="{{ action('User\MatchingController@apply_now') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <h3>応募投稿内容</h3>
                        <table class="table">
                            <td>応募チーム</td>
                            <td>Aチーム</td>
                            <td>xx月xx日(x)xx:xx～xx:xx　神奈川県　募集中！！</td>
                        </table>
                    </div>
                    <h3>応募依頼コメント</h3>
                    <div class="form-group row">
                        <label class="col-md-2" for="note">コメント</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="note" cols="20" rows="10"></textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="応募する">
                </form>
            </div>
        </div>
    </div>
@endsection