<!-- layouts/user.blade.phpを読み込む -->
@extends('layouts.user')
@section('title', 'Football Match')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h1>キャンセル申請</h1>
        </div>
        <form action="" method="post">
            <div>
                <label for="comment">キャンセル理由</label>
                <textarea name="comment" cols="30" rows="20"></textarea>
            </div>
            <input type="submit" value="キャンセルする">
        </form>
    </div>
@endsection