{!! link_to_route('users.stats', '全期間', [], ['class' => 'btn btn-success']) !!}

{!! Form::open(['route'=>'users.period_stats', 'method'=>'get']) !!}
    {!! Form::date('date_from', 'null', ['class'=>'m-2']) !!} ～
    {!! Form::date('date_to', date('Y-m-d'), ['class'=>'m-2']) !!}
{!! Form::submit('絞り込み', ['class' => 'btn btn-primary my-2']) !!}
{!! Form::close() !!}