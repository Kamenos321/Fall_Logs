@extends('layouts.app')

@section('content')
    @if (Auth::check())
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
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection