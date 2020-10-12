@extends('layouts.app')

@section('content')

<div class='col-sm-10'>
    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put']) !!}
        <div class="form-group row">
            {!! Form::label('name', 'ユーザーネーム', ['class' => 'col-sm-2']) !!}
            {!! Form::text('name', old('name'), ['class' => 'form-control col-sm-8']) !!}
        </div>
        {!! Form::submit('更新', ['class' => 'btn btn-primary p-3 col-sm-2 my-4']) !!}    
    {!! Form::close() !!}
</div>

@endsection