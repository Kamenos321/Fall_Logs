<?php $games_race = array('ぐるぐるファイト','ゲートクラッシュ','シーソーゲーム','スピンレース','ドアダッシュ','ヒットパレード','ヒヤヒヤロード','フルーツパニック'); ?>
<?php $games_survival = array('しっぽオニ','ジャンプクラブ','スライム・クライム','パーフェクトマッチ','ブロックパーティー','ロールアウト'); ?>
<?php $games_team = array('エッグ・スクランブル','ためこみ合戦','チームしっぽオニ','バッドラック','フープ・ループ・ゴール','フォールボール','ロックンロール'); ?>
<?php $games_final = array('クラウンマウンテン','ジャンプ・ショーダウン','止まるなキケン','ロイヤルファンブル'); ?>

<!--ステージ1入力フォーム-->
<div class='d-flex'>
@if($stage1 == null)
1stステージ
<div>
@foreach($games_race as $game_race)
{!! Form::open(['route' => 'complete_1st' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $game_race) !!}
    {!! Form::submit($game_race,['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
@endforeach
</div>
<div>
@foreach($games_survival as $game_survival)
{!! Form::open(['route' => 'complete_1st' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $game_survival) !!}
    {!! Form::submit($game_survival,['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}
@endforeach
</div>
<div>
@foreach($games_team as $game_team)
{!! Form::open(['route' => 'complete_1st' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $game_team) !!}
    {!! Form::submit($game_team,['class'=>'btn btn-success']) !!}
{!! Form::close() !!}
@endforeach
</div>
<div>
@foreach($games_final as $game_final)
{!! Form::open(['route' => 'complete_1st' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $game_final) !!}
    {!! Form::submit($game_final,['class'=>'btn btn-warning']) !!}
{!! Form::close() !!}
@endforeach
</div>
@endif
</div>

<!--ステージ2入力フォーム-->
<div class='d-flex'>
@if($stage1 != null && $stage2 == null)
2ndステージ
<div>
@foreach($games_race as $game_race)
{!! Form::open(['route' => 'complete_2nd' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', $game_race) !!}
    {!! Form::submit($game_race,['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
@endforeach
</div>
<div>
@foreach($games_survival as $game_survival)
{!! Form::open(['route' => 'complete_2nd' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', $game_survival) !!}
    {!! Form::submit($game_survival,['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}
@endforeach
</div>
<div>
@foreach($games_team as $game_team)
{!! Form::open(['route' => 'complete_2nd' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', $game_team) !!}
    {!! Form::submit($game_team,['class'=>'btn btn-success']) !!}
{!! Form::close() !!}
@endforeach
</div>
<div>
@foreach($games_final as $game_final)
{!! Form::open(['route' => 'complete_2nd' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', $game_final) !!}
    {!! Form::submit($game_final,['class'=>'btn btn-warning']) !!}
{!! Form::close() !!}
@endforeach
{!! Form::open(['route' => 'complete_1st' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', null) !!}
    {!! Form::submit('ステージ1入力へ戻る', ['class' => 'btn btn-info']) !!}
{!! Form::close() !!}
</div>
@endif
</div>

<!--ステージ3入力フォーム-->
<div class='d-flex'>
@if($stage2 != null && $stage3 == null)
3rdステージ
<div>
@foreach($games_race as $game_race)
{!! Form::open(['route' => 'complete_3rd' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', $stage2) !!}
    {!! Form::hidden('stage3', $game_race) !!}
    {!! Form::submit($game_race,['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
@endforeach
</div>
<div>
@foreach($games_survival as $game_survival)
{!! Form::open(['route' => 'complete_3rd' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', $stage2) !!}
    {!! Form::hidden('stage3', $game_survival) !!}
    {!! Form::submit($game_survival,['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}
@endforeach
</div>
<div>
@foreach($games_team as $game_team)
{!! Form::open(['route' => 'complete_3rd' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', $stage2) !!}
    {!! Form::hidden('stage2', $stage2) !!}
    {!! Form::hidden('stage3', $game_team) !!}
    {!! Form::submit($game_team,['class'=>'btn btn-success']) !!}
{!! Form::close() !!}
@endforeach
</div>
<div>
@foreach($games_final as $game_final)
{!! Form::open(['route' => 'complete_3rd' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', $stage2) !!}
    {!! Form::hidden('stage3', $game_final) !!}
    {!! Form::submit($game_final,['class'=>'btn btn-warning']) !!}
{!! Form::close() !!}
@endforeach
{!! Form::open(['route' => 'complete_2nd' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', null) !!}
    {!! Form::submit('ステージ2入力へ戻る', ['class' => 'btn btn-info']) !!}
{!! Form::close() !!}
</div>
@endif
</div>

<!--ステージ4入力フォーム-->
<div class='d-flex'>
@if($stage3 != null && $stage4 == null)
4thステージ
<div>
@foreach($games_race as $game_race)
{!! Form::open(['route' => 'complete_4th' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', $stage2) !!}
    {!! Form::hidden('stage3', $stage3) !!}
    {!! Form::hidden('stage4', $game_race) !!}
    {!! Form::submit($game_race,['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
@endforeach
</div>
<div>
@foreach($games_survival as $game_survival)
{!! Form::open(['route' => 'complete_4th' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', $stage2) !!}
    {!! Form::hidden('stage3', $stage3) !!}
    {!! Form::hidden('stage4', $game_survival) !!}
    {!! Form::submit($game_survival,['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}
@endforeach
</div>
<div>
@foreach($games_team as $game_team)
{!! Form::open(['route' => 'complete_4th' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', $stage2) !!}
    {!! Form::hidden('stage3', $stage3) !!}
    {!! Form::hidden('stage4', $game_team) !!}
    {!! Form::submit($game_team,['class'=>'btn btn-success']) !!}
{!! Form::close() !!}
@endforeach
</div>
<div>
@foreach($games_final as $game_final)
{!! Form::open(['route' => 'complete_4th' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', $stage2) !!}
    {!! Form::hidden('stage3', $stage3) !!}
    {!! Form::hidden('stage4', $game_final) !!}
    {!! Form::submit($game_final,['class'=>'btn btn-warning']) !!}
{!! Form::close() !!}
@endforeach
{!! Form::open(['route' => 'complete_3rd' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', $stage2) !!}
    {!! Form::hidden('stage3', null) !!}
    {!! Form::submit('ステージ3入力へ戻る', ['class' => 'btn btn-info']) !!}
{!! Form::close() !!}
</div>
@endif
</div>

<!--ステージ5入力フォーム-->
<div class='d-flex'>
@if($stage4 != null && $stage5 == null)
5thステージ
<div>
@foreach($games_race as $game_race)
{!! Form::open(['route' => 'complete_5th' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', $stage2) !!}
    {!! Form::hidden('stage3', $stage3) !!}
    {!! Form::hidden('stage4', $stage4) !!}
    {!! Form::hidden('stage5', $game_race) !!}
    {!! Form::submit($game_race,['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
@endforeach
</div>
<div>
@foreach($games_survival as $game_survival)
{!! Form::open(['route' => 'complete_5th' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', $stage2) !!}
    {!! Form::hidden('stage3', $stage3) !!}
    {!! Form::hidden('stage4', $stage4) !!}
    {!! Form::hidden('stage5', $game_survival) !!}
    {!! Form::submit($game_survival,['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}
@endforeach
</div>
<div>
@foreach($games_team as $game_team)
{!! Form::open(['route' => 'complete_5th' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', $stage2) !!}
    {!! Form::hidden('stage3', $stage3) !!}
    {!! Form::hidden('stage4', $stage4) !!}
    {!! Form::hidden('stage5', $game_team) !!}
    {!! Form::submit($game_team,['class'=>'btn btn-success']) !!}
{!! Form::close() !!}
@endforeach
</div>
<div>
@foreach($games_final as $game_final)
{!! Form::open(['route' => 'complete_5th' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', $stage2) !!}
    {!! Form::hidden('stage3', $stage3) !!}
    {!! Form::hidden('stage4', $stage4) !!}
    {!! Form::hidden('stage5', $game_final) !!}
    {!! Form::submit($game_final,['class'=>'btn btn-warning']) !!}
{!! Form::close() !!}
@endforeach
{!! Form::open(['route' => 'complete_4th' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', $stage2) !!}
    {!! Form::hidden('stage3', $stage3) !!}
    {!! Form::hidden('stage4', null) !!}
    {!! Form::submit('ステージ4入力へ戻る', ['class' => 'btn btn-info']) !!}
{!! Form::close() !!}
</div>
@endif
</div>

<!--ステージ6入力フォーム-->
<div class='d-flex'>
@if($stage5 != null && $stage6 == null)
6thステージ
<div>
@foreach($games_race as $game_race)
{!! Form::open(['route' => 'complete_6th' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', $stage2) !!}
    {!! Form::hidden('stage3', $stage3) !!}
    {!! Form::hidden('stage4', $stage4) !!}
    {!! Form::hidden('stage5', $stage5) !!}
    {!! Form::hidden('stage6', $game_race) !!}
    {!! Form::submit($game_race,['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
@endforeach
</div>
<div>
@foreach($games_survival as $game_survival)
{!! Form::open(['route' => 'complete_6th' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', $stage2) !!}
    {!! Form::hidden('stage3', $stage3) !!}
    {!! Form::hidden('stage4', $stage4) !!}
    {!! Form::hidden('stage5', $stage5) !!}
    {!! Form::hidden('stage6', $game_survival) !!}
    {!! Form::submit($game_survival,['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}
@endforeach
</div>
<div>
@foreach($games_team as $game_team)
{!! Form::open(['route' => 'complete_6th' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', $stage2) !!}
    {!! Form::hidden('stage3', $stage3) !!}
    {!! Form::hidden('stage4', $stage4) !!}
    {!! Form::hidden('stage5', $stage5) !!}
    {!! Form::hidden('stage6', $game_team) !!}
    {!! Form::submit($game_team,['class'=>'btn btn-success']) !!}
{!! Form::close() !!}
@endforeach
</div>
<div>
@foreach($games_final as $game_final)
{!! Form::open(['route' => 'complete_6th' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', $stage2) !!}
    {!! Form::hidden('stage3', $stage3) !!}
    {!! Form::hidden('stage4', $stage4) !!}
    {!! Form::hidden('stage5', $stage5) !!}
    {!! Form::hidden('stage6', $game_final) !!}
    {!! Form::submit($game_final,['class'=>'btn btn-warning']) !!}
{!! Form::close() !!}
@endforeach
{!! Form::open(['route' => 'complete_5th' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', $stage2) !!}
    {!! Form::hidden('stage3', $stage3) !!}
    {!! Form::hidden('stage4', $stage4) !!}
    {!! Form::hidden('stage5', null) !!}
   {!! Form::submit('ステージ5入力へ戻る', ['class' => 'btn btn-info']) !!}
{!! Form::close() !!}
</div>
@endif
</div>

<!--ステージ7入力フォーム-->
<div class='d-flex'>
@if($stage6 != null && $stage7 == null)
7thステージ
<div>
@foreach($games_race as $game_race)
{!! Form::open(['route' => 'complete_7th' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', $stage2) !!}
    {!! Form::hidden('stage3', $stage3) !!}
    {!! Form::hidden('stage4', $stage4) !!}
    {!! Form::hidden('stage5', $stage5) !!}
    {!! Form::hidden('stage6', $stage6) !!}
    {!! Form::hidden('stage7', $game_race) !!}
    {!! Form::submit($game_race,['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
@endforeach
</div>
<div>
@foreach($games_survival as $game_survival)
{!! Form::open(['route' => 'complete_7th' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', $stage2) !!}
    {!! Form::hidden('stage3', $stage3) !!}
    {!! Form::hidden('stage4', $stage4) !!}
    {!! Form::hidden('stage5', $stage5) !!}
    {!! Form::hidden('stage6', $stage6) !!}
    {!! Form::hidden('stage7', $game_survival) !!}
    {!! Form::submit($game_survival,['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}
@endforeach
</div>
<div>
@foreach($games_team as $game_team)
{!! Form::open(['route' => 'complete_7th' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', $stage2) !!}
    {!! Form::hidden('stage3', $stage3) !!}
    {!! Form::hidden('stage4', $stage4) !!}
    {!! Form::hidden('stage5', $stage5) !!}
    {!! Form::hidden('stage6', $stage6) !!}
    {!! Form::hidden('stage7', $game_team) !!}
    {!! Form::submit($game_team,['class'=>'btn btn-success']) !!}
{!! Form::close() !!}
@endforeach
</div>
<div>
@foreach($games_final as $game_final)
{!! Form::open(['route' => 'complete_7th' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', $stage2) !!}
    {!! Form::hidden('stage3', $stage3) !!}
    {!! Form::hidden('stage4', $stage4) !!}
    {!! Form::hidden('stage5', $stage5) !!}
    {!! Form::hidden('stage6', $stage6) !!}
    {!! Form::hidden('stage7', $game_final) !!}
    {!! Form::submit($game_final,['class'=>'btn btn-warning']) !!}
{!! Form::close() !!}
@endforeach
{!! Form::open(['route' => 'complete_6th' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', $stage2) !!}
    {!! Form::hidden('stage3', $stage3) !!}
    {!! Form::hidden('stage4', $stage4) !!}
    {!! Form::hidden('stage5', $stage5) !!}
    {!! Form::hidden('stage6', null) !!}
    {!! Form::submit('ステージ6入力へ戻る', ['class' => 'btn btn-info']) !!}
{!! Form::close() !!}
</div>
@endif
</div>

<!--ステージ7修正フォーム-->
@if($stage7 != null)
{!! Form::open(['route' => 'complete_7th' ,'method' => 'post']) !!}
    {!! Form::hidden('stage1', $stage1) !!}
    {!! Form::hidden('stage2', $stage2) !!}
    {!! Form::hidden('stage3', $stage3) !!}
    {!! Form::hidden('stage4', $stage4) !!}
    {!! Form::hidden('stage5', $stage5) !!}
    {!! Form::hidden('stage6', $stage6) !!}
    {!! Form::hidden('stage7', null) !!}
    {!! Form::submit('ステージ7入力へ戻る', ['class' => 'btn btn-info']) !!}
{!! Form::close() !!}
@endif