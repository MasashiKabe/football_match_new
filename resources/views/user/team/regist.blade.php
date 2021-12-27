<!-- layouts/user.blade.phpを読み込む -->
@extends('layouts.user')
@section('title', 'Football Match')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>チーム新規登録</h1>
                <form action="{{ action('User\TeamController@register') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="image">チーム写真</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="nickname">代表者ニックネーム</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="nickname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="team_name">チーム名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="team_name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="age">メンバー年代</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="age">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="league">加盟リーグ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="league">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="prefecture">都道府県</label>
                        <div class="col-md-10">
                            <select name="prefecture">
                                <option value="" selected>選択してください</option>
                                <option value="1">北海道</option>
                                <option value="2">青森県</option>
                                <option value="3">岩手県</option>
                                <option value="4">宮城県</option>
                                <option value="5">秋田県</option>
                                <option value="6">山形県</option>
                                <option value="7">福島県</option>
                                <option value="8">茨城県</option>
                                <option value="9">栃木県</option>
                                <option value="10">群馬県</option>
                                <option value="11">埼玉県</option>
                                <option value="12">千葉県</option>
                                <option value="13">東京都</option>
                                <option value="14">神奈川県</option>
                                <option value="15">新潟県</option>
                                <option value="16">富山県</option>
                                <option value="17">石川県</option>
                                <option value="18">福井県</option>
                                <option value="19">山梨県</option>
                                <option value="20">長野県</option>
                                <option value="21">岐阜県</option>
                                <option value="22">静岡県</option>
                                <option value="23">愛知県</option>
                                <option value="24">三重県</option>
                                <option value="25">滋賀県</option>
                                <option value="26">京都府</option>
                                <option value="27">大阪府</option>
                                <option value="28">兵庫県</option>
                                <option value="29">奈良県</option>
                                <option value="30">和歌山県</option>
                                <option value="31">鳥取県</option>
                                <option value="32">島根県</option>
                                <option value="33">岡山県</option>
                                <option value="34">広島県</option>
                                <option value="35">山口県</option>
                                <option value="36">徳島県</option>
                                <option value="37">香川県</option>
                                <option value="38">愛媛県</option>
                                <option value="39">高知県</option>
                                <option value="40">福岡県</option>
                                <option value="41">佐賀県</option>
                                <option value="42">長崎県</option>
                                <option value="43">熊本県</option>
                                <option value="44">大分県</option>
                                <option value="45">宮崎県</option>
                                <option value="46">鹿児島県</option>
                                <option value="47">沖縄県</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="area">活動地域</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="area">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="note">コメント</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="note" cols="20" rows="10"></textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="登録">
                </form>
            </div>
        </div>
    </div>
@endsection