<!-- layouts/user.blade.phpを読み込む -->
@extends('layouts.user')
@section('title', 'Football Match')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>対戦チームを探す</h1>
                <div class="form-group row">
                    <h2>条件を指定して検索する</h2>
                    <form action="{{ url('user/matching/apply_list') }}" method="get">
                        <input type="submit" class="btn btn-primary" value="検索">
                    </form>
                </div>
                <h1>応募投稿</h1>
                <div class="form-group row">
                    <table class="table">
                        <td>Aチーム</td><td>xx月xx日(x)xx:xx～xx:xx　神奈川県　募集中！！</td>
                    </table>
                    <form action="" method="get">
                        <input type="submit" class="btn btn-primary" value="応募詳細へ">
                    </form>
                </div>
                <div>
                <div class="form-group row">
                    <table class="table">
                        <td>Bチーム</td><td>xx月xx日(x)xx:xx～xx:xx　千葉県　募集中です。</td>
                    </table>
                    <form action="" method="get">
                        <input type="submit" class="btn btn-primary" value="応募詳細へ">
                    </form>
                </div>
                <div class="form-group row">
                    <table class="table">
                        <td>Cチーム</td><td>xx月xx日(x)xx:xx～xx:xx　静岡県　募集中しています。</td>
                    </table>
                    <form action="" method="get">
                        <input type="submit" class="btn btn-primary" value="応募詳細へ">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection