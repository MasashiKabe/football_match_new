<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//■一般閲覧者用
Route::get('/', 'HomeController@index');
Route::get('/search', 'HomeController@search');
Route::get('/list', 'HomeController@list');
Route::get('/detail', 'HomeController@detail');

//■代表者用
Route::group(['prefix' => 'user'], function() {  

    //■代表者ホーム
    Route::get('mypage', 'User\HomeController@mypage');
    Route::get('mypage/apply_create', 'User\HomeController@apply_create');
    Route::post('mypage/apply_create', 'User\HomeController@submission');
    Route::get('mypage/list', 'User\HomeController@list');
    Route::get('mypage', 'User\TeamController@index');

    //■代表者チーム
    Route::get('team/regist', 'User\TeamController@regist');
    Route::post('team/regist', 'User\TeamController@register');
    Route::get('team/edit', 'User\TeamController@edit');

    //■試合依頼(自分から他者へ)
    //マッチング済み操作
    Route::get('matching/list', 'User\MatchingController@list');
    Route::get('matching/matching_detail', 'User\MatchingController@matching_detail');
    Route::get('matching/cancel', 'User\MatchingController@cancel');
    Route::post('matching/cancel', 'User\MatchingController@true_cancel');
    //試合依頼操作(自分から他者へ)
    Route::get('matching/search_apply', 'User\MatchingController@search_apply');
    Route::get('matching/apply_list', 'User\MatchingController@apply_list');
    Route::get('matching/apply_detail', 'User\MatchingController@apply_detail');
    Route::get('matching/apply', 'User\MatchingController@apply');
    Route::post('matching/apply', 'User\MatchingController@apply_now');

    //試合承認
    Route::get('approval/list', 'User\ApprovalController@list');
    Route::get('approval/detail', 'User\ApprovalController@detail');
    Route::post('approval/detail', 'User\ApprovalController@approval');
    Route::post('approval/detail', 'User\ApprovalController@disapproval');

});

//デフォルトのログイン画面
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');