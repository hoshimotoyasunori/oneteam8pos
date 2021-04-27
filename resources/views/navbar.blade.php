@section('navbar')
    <nav class=" navbar navbar-expand-lg navbar-light bg-light px-3">
      <a class="navbar__brand navbar__mainLogo" href="/"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse bg-light text-right" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/users/{{ Auth::user()->id }}">マイページ</a>
            </li>
            <li class="nav-item active">
             <a class="nav-link " href="/">画像一覧</a>
            </li>
            <li class="nav-item active">
             <a class="nav-link " href="/posts/new">画像投稿</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" rel="nofollow" data-method="POST" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
            </li>
        </ul>
      </div>
      
    </nav>
@endsection