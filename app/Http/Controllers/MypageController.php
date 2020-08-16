<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MypageController extends Controller
{
    public function upload(Request $request)
    {
        $this->validate($request,[
            'file'=>[
                'required',
                'file',
                //画像ファイルかどうか確認
                'image',
                //画像形式を指定
                'mimes:jpeg,png',
            ]
        ]);

        if($request->file('file')->isVaild([])){
            $path=$request->file-store('public');

            
        }
    }
}
