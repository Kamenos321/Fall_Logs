<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color:#ff69b4">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand col-sm-2" href="/">Fall Logs</a>
        {!! link_to_route('shows.create', 'Show作成', [], ['class' => 'navbar-brand col-sm-2']) !!}
        {!! link_to_route('shows.index', 'Show一覧', [], ['class' => 'navbar-brand col-sm-2']) !!}
        {!! link_to_route('users.stats', 'スタッツ', [], ['class' => 'navbar-brand col-cm-2']) !!}

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if (Auth::check())
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            {{-- ユーザ詳細ページへのリンク --}}
                            <li class="dropdown-item"><a href="#">My profile</a></li>
                            <li class="dropdown-divider"></li>
                            {{-- ログアウトへのリンク --}}
                            <li class="dropdown-item">{!! link_to_route('logout.get', 'Logout') !!}</li>
                        </ul>
                    </li>
                @else
                    {{-- ユーザ登録ページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link']) !!}</li>
                    {{-- ログインページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('login', 'Login', [], ['class' => 'nav-link']) !!}</li>
                @endif
            </ul>
        </div>
    </nav>
</header>