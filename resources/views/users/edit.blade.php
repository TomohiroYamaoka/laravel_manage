@extends('app')

@include('nav')

@section('content')
<div class="editPage">
 <header class="header">
  <div>マイページを編集する</div>
 </header>

     <label for="file_photo" class="rounded-circle userProfileImg">
         <div class="userProfileImg_description">画像をアップロード</div>
         <i class="fas fa-camera fa-3x"></i>
         <input type="file" id="file_photo" name="img_name">
     </label>

 <div class="form-group">
  <label>名前</label>
  <input type="text" name="name" class="form-control" value="{{$user->name ?? ''}}" >
 </div>

 <div class="form-group">
  <label>メールアドレス</label>
  <input type="email" name="email" class="form-control" value="{{$user->email ??''}}" >
 </div>



<div class="text-center">
  <butoon type="submit" class="btn submitBtn">変更する</button>
</div>

@endsection

<!--https://www.techpit.jp/courses/42/curriculums/45/sections/364/parts/1154-->