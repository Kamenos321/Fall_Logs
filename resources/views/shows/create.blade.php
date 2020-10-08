@extends('layouts.app')

@section('content')

@include('shows.stage_form')

    <div class="row">
        <div class='col-10'>
        {!! Form::open(['route' => 'shows.store','name' => 'creates', 'method' => 'post']) !!}
            <div class="form-group row">
                {!! Form::label('date', 'date', ['class' => 'col-sm-2']) !!}
                {!! Form::date('date', date('Y-m-d'), ['class' => 'form-control col-sm-8']) !!}
            </div>
            <div class="form-group row">
                {!! Form::label('stage1', '1st', ['class' => 'col-sm-2']) !!}
                {!! Form::text('stage1', $stage1 , ['class' => 'form-control col-sm-8','readonly']) !!}
            </div>
            <div class="form-group row">
                {!! Form::label('stage2', '2nd', ['class' => 'col-sm-2']) !!}
                {!! Form::text('stage2', $stage2, ['class' => 'form-control col-sm-8','readonly']) !!}
            </div>
            <div class="form-group row">
                {!! Form::label('stage3', '3rd', ['class' => 'col-sm-2']) !!}
                {!! Form::text('stage3', $stage3, ['class' => 'form-control col-sm-8','readonly']) !!}
            </div>
            <div class="form-group row">
                {!! Form::label('stage4', '4th', ['class' => 'col-sm-2']) !!}
                {!! Form::text('stage4', $stage4, ['class' => 'form-control col-sm-8','readonly']) !!}
            </div>
            <div class="form-group row">
                {!! Form::label('stage5', '5th', ['class' => 'col-sm-2']) !!}
                {!! Form::text('stage5', $stage5, ['class' => 'form-control col-sm-8','readonly']) !!}
            </div>
            <div class="form-group row">
                {!! Form::label('stage6', '6th', ['class' => 'col-sm-2']) !!}
                {!! Form::text('stage6', $stage6, ['class' => 'form-control col-sm-8','readonly']) !!}
            </div>
            <div class="form-group row">
                {!! Form::label('stage7', '7th', ['class' => 'col-sm-2']) !!}
                {!! Form::text('stage7', $stage7, ['class' => 'form-control col-sm-8','readonly']) !!}
            </div>
            <div class="form-group row">
                {!! Form::label('result', '結果', ['class' => 'col-sm-2']) !!}
                {!! Form::select('result',['lose', 'win']) !!}
            </div>
            {!! Form::submit('作成', ['class' => 'btn btn-primary btn-block']) !!}    
        {!! Form::close() !!}
        </div>
    </div>

@endsection