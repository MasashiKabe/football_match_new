<!-- layouts/user.blade.phpを読み込む -->
@extends('layouts.user')
@section('title', 'Football Match')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h1>受付詳細</h1>
        </div>
        <form action="" method="post">
            <div>
                <h3>私の投稿</h3>
                <div>
                    xx月xx日(x)xx:xx～xx:xx　神奈川県　ユニはxx色です。
                    チーム設立がまだ浅いので背中をお借りできれば嬉しいです！
                    宜しくお願い致します。
                </div>
                <h3>承認依頼内容</h3>
                <div>
                    依頼チーム：Aチーム
                </div>
                <div>
                    xx日試合をお願いしたいです！
                    チームユニはxx色です。
                    是非承認お願い致します。
                    承認頂けましたら詳細はメールします。
                </div>
                <div>
                    <input type="submit" value="承認する">
                </div>
                <div>
                    <input type="submit" value="承認しない">
                </div>
            </div>
        </form>
    </div>
@endsection