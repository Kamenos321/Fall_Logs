@extends('layouts.app')

@section('content')

<div class='col-sm-10'>
    <p>ユーザーネーム：{{ $user->name }}</p>
    <p>登録日時：{{ $user->created_at }}</p>
    
    <div class='col-sm-3 my-5'>
        {!! Form::open(['route'=>['users.edit', $user->id],'method' => 'get']) !!}
        {!! Form::submit('編集', ['class' => "btn btn-info btn-block p-3 my-5"]) !!}
        {!! Form::close() !!}
        
        {!! Form::open(['route'=>['users.destroy_confirm', $user->id],'method' => 'get']) !!}
        {!! Form::submit('ユーザーを削除', ['class' => "btn btn-danger btn-block p-3 my-5"]) !!}
        {!! Form::close() !!}
    </div>
</div>


@endsection