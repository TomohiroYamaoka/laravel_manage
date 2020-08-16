<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

//最初のログイン画面
Route::get('/','TimestampsController@index');

//ログイン機能デフォルトの
Auth::routes();
Route::get('/login','Auth\LoginController@showLoginForm')->name('login');
Route::post('/login','Auth\LoginController@login')->name('name');
Route::post('/logout','Auth\LoginController@logout')->name('logout');

//ページ遷移のルーティング
Route::get('/mypage','TimestampsController@MoveMypage');
Route::get('/times','TimestampsController@OrderTimes');
Route::get('/shift','TimestampsController@OrderShifts');
Route::get('/absent','TimestampsController@OrderAbsent');

//打刻ボタン、終了ボタンを押した時のルーティング
//Route::post('punchin','TimeController@punchIn')->name('timestamp/punchin');
//Route::post('punchout','TimeController@punchOut')->name('timestamp/punchout');

//マイページでの画像アップロード機能
//Route::post('/mypage/upload','MypageController@upload');
//Route::get('/mypage/output','MypageController@output');