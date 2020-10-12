<header class="mb-5">
    <nav class="navbar navbar-expand-sm navbar-dark" style='background-color:#ff42a0;'>
            
        <a class="navbar-brand col-2" href="/">Fall Logs</a>
            
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class='collapse navbar-collapse' id='nav-bar'>
            {!! link_to_route('shows.create', 'Show作成', [], ['class' => 'navbar-brand col-sm-2']) !!}
            {!! link_to_route('shows.index', 'Show一覧', [], ['class' => 'navbar-brand col-sm-2']) !!}
            {!! link_to_route('users.stats', 'スタッツ', [], ['class' => 'navbar-brand col-sm-2']) !!}
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav ml-2" style='font-size:140%;'>
                @if (Auth::check())
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            {{-- ユーザ詳細ページへのリンク --}}
                            <li class="dropdown-item">
                            {!!link_to_route('users.show', 'ユーザー情報', ['user' => Auth::user()->id]) !!}
                            </li>
                            <li class="dropdown-divider"></li>
                            {{-- ログアウトへのリンク --}}
                            <li class="dropdown-item">{!! link_to_route('logout.get', 'ログアウト') !!}</li>
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


