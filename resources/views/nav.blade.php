<nav class="navbar navbar-expand-lg navbar-light blue">
  <a class="navbar-brand" href="/">勤怠管理</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" href="/mypage">マイページ <span class="sr-only">(current)</span></a>
      <a class="nav-link">ログアウト</a>
      <form id="logout-button" method="POST" action="{{ route('logout') }}">
        @csrf
      </form>
    </div>
  </div>
</nav>