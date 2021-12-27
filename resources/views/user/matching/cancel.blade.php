<!-- layouts/user.blade.phpを読み込む -->
@extends('layouts.user')
@section('title', 'Football Match')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>キャンセル申請</h1>
                <form action="{{ action('User\MatchingController@true_cancel') }}" method="post">
                    <div class="form-group row">
                        <label class="col-md-2" for="cancel">キャンセル理由</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="cancel" cols="20" rows="10"></textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="キャンセルする">
                </form>
            </div>
        </div>
    </div>
@endsection