<!-- layouts/user.blade.phpを読み込む -->
@extends('layouts.user')
@section('title', 'Football Match')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>応募投稿一覧</h1>
                <div class="form-group row">
                    <table class="table">
                        <td>xx月xx日(x)xx:xx～xx:xx</td><td>募集中</td>
                    </table>
                    <form action="" method="get">
                        <input type="submit" class="btn btn-primary" value="詳細へ">
                    </form>
                </div>
                <div class="form-group row">
                    <table class="table">
                        <td>xx月xx日(x)xx:xx～xx:xx</td><td>承認済み</td>
                    </table>
                    <form action="" method="get">
                        <input type="submit" class="btn btn-primary" value="詳細へ">
                    </form>
                </div>
                <div class="form-group row">
                    <table class="table">
                        <td>xx月xx日(x)xx:xx～xx:xx</td><td>承認済み</td>
                    </table>
                    <form action="" method="get">
                        <input type="submit" class="btn btn-primary" value="詳細へ">
                    </form>
                </div>
                <div class="form-group row">
                    <table class="table">
                        <td>xx月xx日(x)xx:xx～xx:xx</td><td>期限切れ</td>
                    </table>
                    <form action="" method="get">
                        <input type="submit" class="btn btn-primary" value="詳細へ">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection