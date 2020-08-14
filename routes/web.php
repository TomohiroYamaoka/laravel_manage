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

Route::get('/','TimestampsController@punchIn');
Auth::routes();

Route::get('/mypage','TimestampsController@MoveMypage');
Route::get('/times','TimestampsController@OrderTimes');
Route::get('/shift','TimestampsController@OrderShifts');
Route::get('/absent','TimestampsController@OrderAbsent');


//Route::get('/home', 'HomeController@index')->name('home');
