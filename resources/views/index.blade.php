<!-- layouts/ordinary.blade.phpを読み込む -->
@extends('layouts.ordinary')
@section('title', 'Football Match')

@section('content')
    <div class="container">
        <div class="col-md-8 mx-auto">
            <h1>Football Matchi</h1>
            <p class="sub-title">～試合相手を探そう～</p>
            <div class="form-group row">
                <h2>条件を指定して検索する</h2>
            </div>
            <div class="form-group row">
                <form action="{{ url('/list') }}" method="get">
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
            <div class="form-group row">
                <table class="table">
                    <td>Xチーム</td><td>xx月xx日(x)xx:xx～xx:xx　千葉県　募集中です。</td>
                </table>
                <form action="" method="get">
                    <input type="submit" class="btn btn-primary" value="応募詳細へ">
                </form>
            </div>
            <div class="form-group row">
                <table class="table">
                    <td>Fチーム</td><td>xx月xx日(x)xx:xx～xx:xx　静岡県　募集中しています。</td>
                </table>
                <form action="" method="get">
                    <input type="submit" class="btn btn-primary" value="応募詳細へ">
                </form>
            </div>
            <div class="form-group row">
                <table class="table">
                    <td>Cチーム</td><td>xx月xx日(x)xx:xx～xx:xx　長野県　募集中～</td>
                </table>
                <form action="" method="get">
                    <input type="submit" class="btn btn-primary" value="応募詳細へ">
                </form>
            </div>
            <div class="form-group row">
                <table class="table">
                    <td>Yチーム</td><td>xx月xx日(x)xx:xx～xx:xx　大阪府　対戦お願いします！</td>
                </table>
                <form action="" method="get">
                    <input type="submit" class="btn btn-primary" value="応募詳細へ">
                </form>
            </div>
        </div>
    </div>
@endsection
