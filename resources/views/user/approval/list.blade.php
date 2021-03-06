<!-- layouts/user.blade.phpを読み込む -->
@extends('layouts.user')
@section('title', 'Football Match')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>承認受付一覧</h1>
                <div class="form-group row">
                    <h3>1件目</h3>
                    <table class="table">
                        <td>依頼チーム</td>
                        <td>Aチーム</td>
                        <td>xx月xx日(x)xx:xx～xx:xx</td>
                    </table>
                    <form action="{{ url('user/approval/detail') }}" method="get">
                        <input type="submit" class="btn btn-primary" value="詳細へ">
                    </form>
                </div>
                <div class="form-group row">
                    <h3>2件目</h3>
                    <table class="table">
                        <td>依頼チーム</td>
                        <td>Dチーム</td>
                        <td>xx月xx日(x)xx:xx～xx:xx</td>
                    </table>
                    <form action="" method="get">
                        <input type="submit" class="btn btn-primary" value="詳細へ">
                    </form>
                </div>
                <div class="form-group row">
                    <h3>3件目</h3>
                    <table class="table">
                        <td>依頼チーム</td>
                        <td>Gチーム</td>
                        <td>xx月xx日(x)xx:xx～xx:xx</td>
                    </table>
                    <form action="" method="get">
                        <input type="submit" class="btn btn-primary" value="詳細へ">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection