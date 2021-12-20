<!-- layouts/user.blade.phpを読み込む -->
@extends('layouts.user')
@section('title', 'Football Match')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h1>応募画面</h1>
        </div>
        <form action="" method="post">
            <div>
                <h3>応募投稿</h3>
                <div>
                    応募チーム：Aチーム
                </div>
                <div>
                    xx月xx日(x)xx:xx～xx:xx　神奈川県　募集中！！
                </div>
                <h3>応募依頼コメント</h3>
                <div>
                    <label for="comment">コメント</label>
                    <textarea name="comment" cols="30" rows="20"></textarea>
                </div>
                <div>
                    <input type="submit" value="応募する">
                </div>
            </div>
        </form>
    </div>
@endsection