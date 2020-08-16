@extends('app')

@section('title', 'マイページ')

@include('nav')

@section('content')
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">ユーザー名</h5>
    <!--画像アップロードメソッド
    <form method="POST" action="/mypage/edit">
      <div class="form-group">
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
        <input type="submit">
      </div>
    </form>-->
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">ID</li>
    <li class="list-group-item">メールアドレス</li>
  </ul>
</div>
＠endesection