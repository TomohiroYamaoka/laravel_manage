@include('nav')
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>勤怠管理</title>

  <!--Hello-->
  <div class="jumbotron">
      <h1 class="display-4">お疲れ様です！〇〇さん！</h1>
      <p class="lead">今日は△△時から、出勤日ですね。頑張りましょう。</p>
      <hr class="my-4">
      <a class="btn btn-primary btn-lg " href="/mypage" role="button">マイページはこちら</a>
   </div>


  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
</head>

<body>
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

  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>
</body>
<html>