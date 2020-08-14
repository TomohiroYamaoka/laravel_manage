<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;;
use Carbon\Carbon;
use App\User;
use App\Timestamp;

class TimestampsController extends Controller
{
    public function punchIn()
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
}
