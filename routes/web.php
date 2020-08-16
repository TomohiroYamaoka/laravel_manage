<?php

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
Auth::routes();

//ページ遷移のルーティング
Route::get('/mypage','TimestampsController@MoveMypage');
Route::get('/times','TimestampsController@OrderTimes');
Route::get('/shift','TimestampsController@OrderShifts');
Route::get('/absent','TimestampsController@OrderAbsent');

//打刻ボタン、終了ボタンを押した時のルーティング
//Route::post('punchin','TimeController@punchIn')->name('timestamp/punchin');
//Route::post('punchout','TimeController@punchOut')->name('timestamp/punchout');
