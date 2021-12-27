<!-- layouts/user.blade.phpを読み込む -->
@extends('layouts.user')
@section('title', 'Football Match')

@section('content')
    <div class="container">
        <div class="row"></div>
            <div class="col-md-8 mx-auto">
                <h1>受付詳細</h1>
                <div class="form-group row">
                    <h3>私の投稿</h3>
                    <table class="table">
                        <td>
                        xx月xx日(x)xx:xx～xx:xx　神奈川県　ユニはxx色です。
                        チーム設立がまだ浅いので背中をお借りできれば嬉しいです！
                        宜しくお願い致します。
                        </td>
                     </table>
                </div>
                <div class="form-group row">                
                    <h3>承認依頼内容</h3>
                    <table class="table">
                        <td>依頼チーム</td>
                        <td>
                        Aチーム
                        </td>
                        <td>
                        xx日試合をお願いしたいです！
                        チームユニはxx色です。
                        是非承認お願い致します。
                        承認頂けましたら詳細はメールします。
                        </td>
                    </table>
                </div>
                <div class="row">
                    <div class="col-2">
                        <form action="{{ url('user/approval/list') }}" method="get">
                            <input type="submit" class="btn btn-primary" value="承認する">
                        </form>
                    </div>
                    <div class="col-2">
                        <form action="{{ url('user/approval/list') }}" method="get">
                            <input type="submit" class="btn btn-primary" value="承認しない">
                        </form>
                    </div>
                </div>
            </div>            
        </div>
    </div>
@endsection