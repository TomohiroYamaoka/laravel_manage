@extends('app')

@section('title', '勤怠管理')

@include('nav')

@section('content')
  <!--メイン画面-->
  <div class="jumbotron">
      <h2 class="display-4">お疲れ様です！
      {{ Auth::user()->name ?? '' }}さん！
      </h2>
      <p class="lead">今日は△△時から、出勤日ですね。頑張りましょう。</p>
      <hr class="my-4">
      <a class="btn btn-primary btn-lg " href="/mypage" role="button">マイページはこちら</a>
   </div>
   
   <!-- 打刻申請 -->
     <div class="row">
       <div class="col-sm-6">
         <div class="card">
           <div class="card-body">
             <h5 class="card-title">打刻</h5>
             <p class="card-text">アルバイトの勤務の開始と終わり時に必ず確認してください。</p>
             <a href="/times" class="btn btn-primary">打刻をする</a>
           </div>
        </div>
      </div>
      
      <!-- シフト申請 -->
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">シフト申請</h5>
            <p class="card-text">毎月26日までに申請をを完了させて下さい。</p>
            <a href="/shift" class="btn btn-primary">シフト申請をする</a>
          </div>
        </div>
      </div>
    </div>
    
    <!-- 欠勤連絡 -->
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">欠勤連絡</h5>
            <p class="card-text">前日、当日の休みの際は直接連絡をして下さい。</p>
            <a href="/absent" class="btn btn-primary">欠勤連絡をする</a>
          </div>
        </div>
      </div>
    </div>
@endsection