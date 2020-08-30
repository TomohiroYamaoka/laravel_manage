<!--https://qiita.com/sutara79/items/128b669eec39791c1fa8-->
@if(session('my_status')
 <div class="container mt-2">
     <div class="alert alert-success">
         {{ session('my_status')}}
     </div>
 </div>
@endif

@if(session('error'))
  <div class="container mt-2">
      <div class="alert alert-danger">
          {{ session('error') }}
      </div>
  </div>
@endif

