<!-- layouts/user.blade.phpを読み込む -->
@extends('layouts.user')
@section('title', 'Football Match')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>応募投稿一覧</h1>
                <div class="form-group row">
                    @foreach($recruitments as $recruitment)
                    <table class="table">
                        <td>
                            <a href="" class="btn btn-outline-primary">編集</a>
                        </td>
                        <td>
                            {{ $recruitment->start_at }}
                            ～
                            {{ $recruitment->end_at }}
                        </td>
                        <td>
                            {{ $recruitment->areas }}
                        </td>
                        <td>
                            {{ $recruitment->note }}
                        </td>
                        <td>
                            @if (strtotime($recruitment->closed_at) < now())
                            募集中
                            @endif
                        </td>
                    </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection