@extends('layouts.app')

@section('content')
<body style='background-image: url("storage/background_image.jpg");'>
    
    @if (Auth::check())
        <div class='container'>
            <img src='{{ asset('storage/logo.jpg') }}' class='row col-sm-10 mx-auto'>
            <div class='row col-12 mt-3 mx-auto'>
                {{-- show作成ページへのリンク --}}
                {!! link_to_route('shows.create', 'show作成', [], ['class' => 'main_button btn btn-primary row col-sm-4 mx-auto']) !!}
                {{-- show一覧ページへのリンク --}}
                {!! link_to_route('shows.index', 'show一覧', [], ['class' => 'main_button btn btn-success row col-sm-4 mx-auto']) !!}
                {{-- statsページへのリンク --}}
                {!! link_to_route('users.stats', 'スタッツ', [], ['class' => 'main_button btn btn-danger row col-sm-4 mx-auto']) !!}
            </div>
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