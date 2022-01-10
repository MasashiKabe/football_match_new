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
                    @foreach($recruitments as $recruitment)
                    <table class="table">
                        <td>
                          {{ $recruitment->start_at }}
                          -
                          {{ $recruitment->end_at }}
                        </td>
                        <td>
                          {{ $recruitment->team->team_name }}
                        </td>
                        <td>
                          {{ $recruitment->areas }}
                        </td>
                        <td>
                          @if (strtotime($recruitment->closed_at) < now()) 募集中 @endif
                        </td>
                        <td>
                            <form action="{{ url('user/matching/apply') }}" method="post">
                            @csrf
                            <input type="text" name="note">
                            <input type="submit" class="btn btn-primary" value="応募する">
                            <input type="hidden" name="recruitment_id" value="{{ $recruitment->id }}">
                            <input type="hidden" name="team_id" value="{{ $team->id }}">
                            </form>
                        </td>
                    </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection