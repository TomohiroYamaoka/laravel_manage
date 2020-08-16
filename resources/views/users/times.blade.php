@extends('app')

@section('title', '打刻')

@section('content')
<!--打刻終了ボタン-->
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">打刻する際はこちら</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">打刻</a>
        <form action="{{ route('timestamp/punchin') }}" method="POST">
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
        <form action="{{ route('timestamp/punchout') }}" method="POST">
        @csrf
        @method('POST')
        <button type="submit" class="btn btn-primary">終了</button>
        </form> 
      </div>
    </div>
  </div>
</div>


<h2>打刻・終了履歴</h2>
<!--打刻した時間を-->
<table class="table table-bordered">
   <!--項目-->
   <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">日付</th>
      <th scope="col">打刻時間</th>
      <th scope="col">終了時刻</th>
    </tr>
　　</thead>

  <tbody>
    @foreach($timestamps as $timestamp)
    <!--1行を繰り返す-->
    <tr>
      <th scope="row"></th>
      <td>12/15</td>
      <td>{{ $timestamp->punchIn }}</td>
      <td>{{ $timestamp->punchOut }}</td>
    </tr>
  </tbody>
</table>
@endsection