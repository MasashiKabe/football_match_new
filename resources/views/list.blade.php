<!-- layouts/ordinary.blade.phpを読み込む -->
@extends('layouts.ordinary')
@section('title', 'Football Match')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>応募検索結果</h1>
                <div class="form-group row">
                    <table class="table">
                        <td>Fチーム</td><td>xx月xx日(x)xx:xx～xx:xx　神奈川県　募集中！！</td>
                    </table>
                    <form action="{{ url('/detail') }}" method="get">
                        <input type="submit" class="btn btn-primary" value="応募詳細へ">
                    </form>
                </div>
                <div class="form-group row">
                    <table class="table">
                        <td>Gチーム</td><td>xx月xx日(x)xx:xx～xx:xx　神奈川県　募集中！！</td>
                    </table>
                    <form action="" method="get">
                        <input type="submit" class="btn btn-primary" value="応募詳細へ">
                    </form>
                </div>
                <div class="form-group row">
                    <table class="table">
                        <td>Yチーム</td><td>xx月xx日(x)xx:xx～xx:xx　神奈川県　募集中！！</td>
                    </table>
                    <form action="" method="get">
                        <input type="submit" class="btn btn-primary" value="応募詳細へ">
                    </form>
                </div>  
            </div>
        </div>
    </div>
@endsection