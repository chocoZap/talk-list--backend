<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/talkLists', 'App\Http\Controllers\TalkListController@index');
// 登録
Route::post('/talkLists', 'App\Http\Controllers\TalkListController@store');
// 詳細取得
Route::get('/talkLists/{task}', 'App\Http\Controllers\TalkListController@show');
// 編集
Route::put('/talkLists/{task}', 'App\Http\Controllers\TalkListController@update');
// 削除
Route::delete('/talkLists/{task}', 'App\Http\Controllers\TalkListController@destroy');
// 登録
Route::post('/reviews', 'App\Http\Controllers\ReviewController@store');
