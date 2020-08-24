<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;;
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

    //打刻ボタン、終了ボタンが押された時の処理
    //ボタンを押したユーザーidとボタンを押した時間を取得して、DBにcreateする
    public function punchIn()
    {
        //userテーブルからユーザーを参照
        $user=Auth::user();

        $oldTimestamp = Timestamp::where('user_id', $user->id)->latest()->first();
        if ($oldTimestamp) {
            $oldTimestampPunchIn = new Carbon($oldTimestamp->punchIn);
            $oldTimestampDay = $oldTimestampPunchIn->startOfDay();
        } else {
        $timestamp=Timestamp::create([
            'user_id'=> $user->id,
            'punchIn'=>Carbon::now()
        ]);

        $newTimestampDay = Carbon::today();

        //打刻完了メッセージ
        return redirect()->back()->with('my_status', '出勤打刻が完了しました');
    }
}
}