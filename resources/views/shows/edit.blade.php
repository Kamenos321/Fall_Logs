@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-10">
            {!! Form::model($show, ['route' => ['shows.update', $show->id], 'method' => 'put']) !!}
                <div class="form-group row">
                    {!! Form::label('date', 'date', ['class' => 'col-sm-2']) !!}
                    {!! Form::date('date', old('date'), ['class' => 'form-control col-sm-8']) !!}
                </div>
                <div class="form-group row">
                    {!! Form::label('stage1', '1st', ['class' => 'col-sm-2']) !!}
                    {!! Form::text('stage1', old('stage1'), ['class' => 'form-control col-sm-8']) !!}
                </div>
                <div class="form-group row">
                    {!! Form::label('stage2', '2nd', ['class' => 'col-sm-2']) !!}
                    {!! Form::text('stage2', old('stage2'), ['class' => 'form-control col-sm-8']) !!}
                </div>
                <div class="form-group row">
                    {!! Form::label('stage3', '3rd', ['class' => 'col-sm-2']) !!}
                    {!! Form::text('stage3', old('stage3'), ['class' => 'form-control col-sm-8']) !!}
                </div>
                <div class="form-group row">
                    {!! Form::label('stage4', '4th', ['class' => 'col-sm-2']) !!}
                    {!! Form::text('stage4', old('stage4'), ['class' => 'form-control col-sm-8']) !!}
                </div>
                <div class="form-group row">
                    {!! Form::label('stage5', '5th', ['class' => 'col-sm-2']) !!}
                    {!! Form::text('stage5', old('stage5'), ['class' => 'form-control col-sm-8']) !!}
                </div>
                <div class="form-group row">
                    {!! Form::label('stage6', '6th', ['class' => 'col-sm-2']) !!}
                    {!! Form::text('stage6', old('stage6'), ['class' => 'form-control col-sm-8']) !!}
                </div>
                <div class="form-group row">
                    {!! Form::label('stage7', '7th', ['class' => 'col-sm-2']) !!}
                    {!! Form::text('stage7', old('stage7'), ['class' => 'form-control col-sm-8']) !!}
                </div>
                <div class="form-group row">
                    {!! Form::label('result', '結果', ['class' => 'col-sm-2']) !!}
                    {!! Form::select('result',['lose', 'win']) !!}
                </div>
                {!! Form::submit('更新', ['class' => 'btn btn-primary px-5']) !!}    
            {!! Form::close() !!}
            
            {!! Form::open(['route'=>['shows.destroy', $show->id],'method' => 'delete']) !!}
                {!! Form::submit('削除',['class' => 'btn btn-danger mt-5 px-5 ']) !!}
            {!! Form::close() !!}
        </div>

    </div>
    
@endsection