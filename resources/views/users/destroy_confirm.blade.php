@extends('layouts.app')

@section('content')
<div class='col-sm-10'>
    <p>※注意!<br>ユーザーを削除するとShow記録もすべて失われます。<br>よろしいですか?</p>

    <div class='col-sm-3'>
    {!!link_to_route('users.show', '戻る', ['user' => Auth::user()->id], ['class' => 'btn btn-primary btn-block p-3 my-5']) !!}

    <div class='space' style='height:300px;'></div>
    {!! Form::open(['route'=>['users.destroy', $user->id],'method' => 'delete']) !!}
        {!! Form::submit('削除',['class' => 'btn btn-danger btn-block p-3 my-5']) !!}
    {!! Form::close() !!}
    </div>
</div>
@endsection