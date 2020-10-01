@extends('layouts.app')

@section('content')

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">at</th>
      <th scope="col">1st</th>
      <th scope="col">2nd</th>
      <th scope="col">3rd</th>
      <th scope="col">4th</th>
      <th scope="col">5th</th>
      <th scope="col">6th</th>
      <th scope="col">7th</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($shows as $show)
        <td scope="row">{{ $show->created_at }}</th>
        <td scope="row">{{ $show->stage1 }}</th>
        <td scope="row">{{ $show->stage2 }}</td>
        <td scope="row">{{ $show->stage3 }}</td>
        <td scope="row">{{ $show->stage4 }}</td>
        <td scope="row">{{ $show->stage5 }}</td>
        <td scope="row">{{ $show->stage6 }}</td>
        <td scope="row">{{ $show->stage7 }}</td>
        <td scope="row">
            {!! Form::open(['route'=>['shows.edit', $show->id],'method' => 'get']) !!}
                {!! Form::submit('編集',['class' => 'btn btn-info']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection