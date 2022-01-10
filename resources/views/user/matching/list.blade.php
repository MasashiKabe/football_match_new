<!-- layouts/user.blade.phpを読み込む -->
@extends('layouts.user')
@section('title', 'Football Match')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <h1>私から依頼した試合</h1>
                <div class="form-group row">
                    @foreach($applys as $apply)
                    <table class="table">
                        <td>
                          {{ $apply->recruitments->start_at }}
                          -
                          {{ $apply->recruitments->end_at }}
                        </td>
                    </table>
                    @endforeach
                    <table class="table">
                        <td>xx月xx日(x)xx:xx～xx:xx</td><td>承認待ち</td>
                    </table>
                    <form action="" method="get">
                        <input type="submit" class="btn btn-primary" value="詳細へ">
                    </form>
                </div>
                <div class="form-group row">
                    <table class="table">
                        <td>xx月xx日(x)xx:xx～xx:xx</td><td>マッチング</td>
                    </table>
                    <form action="{{ url('user/matching/matching_detail') }}" method="get">
                        <input type="submit" class="btn btn-primary" value="詳細へ">
                    </form>
                </div>
                <div class="form-group row">
                    <table class="table">
                        <td>xx月xx日(x)xx:xx～xx:xx</td><td>承認待ち</td>
                    </table>
                    <form action="" method="get">
                        <input type="submit" class="btn btn-primary" value="詳細へ">
                    </form>
                </div>
                <div>
                    <a href=" {{ url('/user/matching/search_apply') }}">対戦相手を探す→→→</a></li>
                </div>        
            </div>
            <div class="col-md-4 mx-auto">
                <h1>私に依頼が来た試合</h1>
                <div class="form-group row">
                    <table class="table">
                        <td>xx月xx日(x)xx:xx～xx:xx</td><td>マッチング</td>
                    </table>
                    <form action="" method="get">
                        <input type="submit" class="btn btn-primary" value="詳細へ">
                    </form>
                </div>
                <div class="form-group row">
                    <table class="table">
                        <td>xx月xx日(x)xx:xx～xx:xx</td><td>承認待ち</td>
                    </table>
                    <form action="" method="get">
                        <input type="submit" class="btn btn-primary" value="詳細へ">
                    </form>
                </div>
                <div class="form-group row">
                    <table class="table">
                        <td>xx月xx日(x)xx:xx～xx:xx</td><td>マッチング</td>
                    </table>
                    <form action="" method="get">
                        <input type="submit" class="btn btn-primary" value="詳細へ">
                    </form>
                </div>
                <div>
                    <a href=" {{ url('user/mypage/list') }}">自分の募集投稿一覧へ→→→</a></li>
                </div>        
            </div>
        </div>
    </div>
@endsection