@extends('layouts.app')

@section('content')
<body style='background-image: url("storage/background_image.jpg");'>
    
    @if (Auth::check())
        <img src='{{ asset('storage/logo.jpg') }}' class='row col-sm-8'>
        {{ Auth::user()->name }}
        {{-- show作成ページへのリンク --}}
        {!! link_to_route('shows.create', 'show作成', [], ['class' => 'btn btn-primary']) !!}
        {{-- show一覧ページへのリンク --}}
        {!! link_to_route('shows.index', 'show一覧', [], ['class' => 'btn btn-success']) !!}
        {{-- statsページへのリンク --}}
        {!! link_to_route('users.stats', 'スタッツ', [], ['class' => 'btn btn-danger']) !!}
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