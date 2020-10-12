@extends('layouts.app')

@section('content')
<body style='background-image: url("../storage/background_welcome.jpg");'>


    @if (Auth::check())

        <img src='{{ asset('storage/logo.jpg') }}' class='row col-sm-12 mx-auto rounded-pill'>
        <div class='row col-12 mt-3 mx-auto'>
            {{-- show作成ページへのリンク --}}
            {!! link_to_route('shows.create', 'show作成', [], ['class' => 'main_button btn btn-primary rounded-pill row col-sm-4 mx-auto']) !!}
            {{-- show一覧ページへのリンク --}}
            {!! link_to_route('shows.index', 'show一覧', [], ['class' => 'main_button btn btn-success rounded-pill row col-sm-4 mx-auto']) !!}
            {{-- statsページへのリンク --}}
            {!! link_to_route('users.stats', 'スタッツ', [], ['class' => 'main_button btn btn-danger rounded-pill row col-sm-4 mx-auto']) !!}
        </div>

    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Fall Logs</h1>
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', 'ユーザー登録', [], ['class' => 'btn btn-lg btn-primary mx-1']) !!}
                {{-- ログインページへのリンク --}}
                {!! link_to_route('login.post', 'ログイン', [], ['class' => 'btn btn-lg btn-primary mx-1']) !!}
            </div>
        </div>
    @endif

</body>
@endsection