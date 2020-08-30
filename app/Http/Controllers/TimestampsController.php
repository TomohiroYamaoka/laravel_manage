<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use App\User;
use App\Timestamp;

class TimestampsController extends Controller
{
    public function index()
    {
        return view('users.index');
    }
    public function OrderTimes()
    {
        return view('users.times');
    }
    public function OrderShifts()
    {
        return view('users.shift');
    }
    public function OrderAbsent()
    {
        return view('users.absent');
    }
    public function MoveMypage()
    {
        return view('users.mypage');
    }

    /** 
    *打刻ボタン、終了ボタンが押された時の処理
    *ボタンを押したユーザーidとボタンを押した時間を取得して、DBにcreateする
    */
    public function punchIn()
    {
        //userテーブルからユーザーを参照
        $user=Auth::user();

        $oldTimestamp = Timestamp::where('user_id', $user->id)->latest()->first();
        if ($oldTimestamp) {
            $oldTimestampPunchIn = new Carbon($oldTimestamp->punchIn);
            $oldTimestampDay = $oldTimestampPunchIn->startOfDay();
        } 
        else {
        $timestamp=Timestamp::create([
            'user_id'=> $user->id,
            'punchIn'=>Carbon::now()
        ]);
        $newTimestampDay = Carbon::today();
        return redirect()->back()->with('my_status', '出勤打刻が完了しました');}
    }
    
    //退勤時
    public function punchOut()
    {
        //Userテーブルを$userに代入をする。
        $user=Auth::user();

        //Userテーブルのuseridに、最新のものを取得し、$timestampに代入をする。
        $timestamp=Timestamp::where('user_id',$user->id)->latest()->first();

        //punchOutにすでに記載されている場合、エラーをだす。
        if( !empty($timestamp->punchOut)){
            return redirect()->back()->with('error','すでに打刻されてます。');
        }        
        //$timestampのpunchOutカラムに、Carbonowで取得をした時刻をDBに入れる。
        $timestamp->update([
            'punchOut'=> Carbon::now()
        ]);

        return redirect()->back()->with('my_status', '打刻完了しました');
    }

    public function editMypage($id){
        $user=Auth::user()->$id;
        return view('users.edit');
    }
}

