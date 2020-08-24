@extends('app')

@include('nav')

@section('content')
<!--打刻終了ボタン-->
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">打刻する際はこちら</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <form action="{{'timestamp/punchin'}}" method="POST">
        @csrf
        @method('POST')
        <button type="submit" class="btn btn-primary">打刻</button>
        </form> 
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">仕事が終わる際はこちら</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <form action="" method="POST">
        @csrf
        @method('POST')
        <button type="submit" class="btn btn-primary">終了</button>
        </form> 
      </div>
    </div>
  </div>
</div>

