<?php $games_race = array('ウォールガイズ','ぐるぐるファイト','ゲートクラッシュ','シーソーゲーム','スピンレース','スライム・クライム','ドアダッシュ','ナイトフィーバー','ヒットパレード','ヒヤヒヤロード','フルーツパニック'); ?>
<?php $games_survival = array('しっぽオニ','ジャンプクラブ','パーフェクトマッチ','フープ・ループ・レジェンド','ブロックパーティー','ロールアウト'); ?>
<?php $games_team = array('エッグ・キャッスル','エッグ・スクランブル','ためこみ合戦','チームしっぽオニ','バッドラック','フープ・ループ・ゴール','フォールボール','ロックンロール'); ?>
<?php $games_final = array('クラウンマウンテン','ジャンプ・ショーダウン','止まるなキケン','ロイヤルファンブル'); ?>

<div class='container'>

    @if($stage1 == null)
    <h3>1stステージ</h3>
    <div class='row d-flex'>
        <div class='col-md-3'>
        @foreach($games_race as $game_race)
        {!! Form::open(['route' => 'complete_1st' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $game_race) !!}
            @include('submit_button.race')
        {!! Form::close() !!}
        @endforeach
        </div>
        <div class='col-md-3'>
        @foreach($games_survival as $game_survival)
        {!! Form::open(['route' => 'complete_1st' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $game_survival) !!}
            @include('submit_button.survival')
        {!! Form::close() !!}
        @endforeach
        </div>
        <div class='col-md-3'>
        @foreach($games_team as $game_team)
        {!! Form::open(['route' => 'complete_1st' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $game_team) !!}
            @include('submit_button.team')
        {!! Form::close() !!}
        @endforeach
        </div>
        <div class='col-md-3'>
        @foreach($games_final as $game_final)
        {!! Form::open(['route' => 'complete_1st' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $game_final) !!}
            @include('submit_button.final')
        {!! Form::close() !!}
        @endforeach
        </div>
    </div>
    @endif
    
    <!--ステージ2入力フォーム-->
    @if($stage1 != null && $stage2 == null)
    <h3>2ndステージ</h3>
    <div class='row d-flex'>
        <div class='col-md-3'>
        @foreach($games_race as $game_race)
        {!! Form::open(['route' => 'complete_2nd' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $stage1) !!}
            {!! Form::hidden('stage2', $game_race) !!}
            @include('submit_button.race')
        {!! Form::close() !!}
        @endforeach
        </div>
        <div class='col-md-3'>
        @foreach($games_survival as $game_survival)
        {!! Form::open(['route' => 'complete_2nd' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $stage1) !!}
            {!! Form::hidden('stage2', $game_survival) !!}
            @include('submit_button.survival')
        {!! Form::close() !!}
        @endforeach
        </div>
        <div class='col-md-3'>
        @foreach($games_team as $game_team)
        {!! Form::open(['route' => 'complete_2nd' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $stage1) !!}
            {!! Form::hidden('stage2', $game_team) !!}
            @include('submit_button.team')
        {!! Form::close() !!}
        @endforeach
        </div>
        <div class='col-md-3'>
        @foreach($games_final as $game_final)
        {!! Form::open(['route' => 'complete_2nd' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $stage1) !!}
            {!! Form::hidden('stage2', $game_final) !!}
            @include('submit_button.final')
        {!! Form::close() !!}
        @endforeach
        {!! Form::open(['route' => 'complete_1st' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', null) !!}
            {!! Form::submit('ステージ1入力へ戻る', ['class' => 'btn btn-info btn-block mt-3']) !!}
        {!! Form::close() !!}
        </div>
    </div>
    @endif
    
    <!--ステージ3入力フォーム-->
    @if($stage2 != null && $stage3 == null)
    <h3>3rdステージ</h3>
    <div class='row d-flex'>
        <div class='col-md-3'>
        @foreach($games_race as $game_race)
        {!! Form::open(['route' => 'complete_3rd' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $stage1) !!}
            {!! Form::hidden('stage2', $stage2) !!}
            {!! Form::hidden('stage3', $game_race) !!}
            @include('submit_button.race')
        {!! Form::close() !!}
        @endforeach
    </div>
        <div class='col-md-3'>
        @foreach($games_survival as $game_survival)
        {!! Form::open(['route' => 'complete_3rd' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $stage1) !!}
            {!! Form::hidden('stage2', $stage2) !!}
            {!! Form::hidden('stage3', $game_survival) !!}
            @include('submit_button.survival')
        {!! Form::close() !!}
        @endforeach
    </div>
        <div class='col-md-3'>
        @foreach($games_team as $game_team)
        {!! Form::open(['route' => 'complete_3rd' ,'method' => 'post']) !!}
        {!! Form::hidden('stage1', $stage1) !!}
        {!! Form::hidden('stage2', $stage2) !!}
        {!! Form::hidden('stage2', $stage2) !!}
        {!! Form::hidden('stage3', $game_team) !!}
        @include('submit_button.team')
        {!! Form::close() !!}
        @endforeach
    </div>
        <div class='col-md-3'>
        @foreach($games_final as $game_final)
        {!! Form::open(['route' => 'complete_3rd' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $stage1) !!}
            {!! Form::hidden('stage2', $stage2) !!}
            {!! Form::hidden('stage3', $game_final) !!}
                @include('submit_button.final')
        {!! Form::close() !!}
        @endforeach
        {!! Form::open(['route' => 'complete_2nd' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $stage1) !!}
            {!! Form::hidden('stage2', null) !!}
            {!! Form::submit('ステージ2入力へ戻る', ['class' => 'btn btn-info btn-block mt-3']) !!}
        {!! Form::close() !!}
        </div>
    </div>
    @endif
    
    <!--ステージ4入力フォーム-->
    @if($stage3 != null && $stage4 == null)
    <h3>4thステージ</h3>
    <div class='row d-flex'>
        <div class='col-md-3'>
        @foreach($games_race as $game_race)
        {!! Form::open(['route' => 'complete_4th' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $stage1) !!}
            {!! Form::hidden('stage2', $stage2) !!}
            {!! Form::hidden('stage3', $stage3) !!}
            {!! Form::hidden('stage4', $game_race) !!}
            @include('submit_button.race')
        {!! Form::close() !!}
        @endforeach
        </div>
        <div class='col-md-3'>
        @foreach($games_survival as $game_survival)
        {!! Form::open(['route' => 'complete_4th' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $stage1) !!}
            {!! Form::hidden('stage2', $stage2) !!}
            {!! Form::hidden('stage3', $stage3) !!}
            {!! Form::hidden('stage4', $game_survival) !!}
            @include('submit_button.survival')
        {!! Form::close() !!}
        @endforeach
        </div>
        <div class='col-md-3'>
        @foreach($games_team as $game_team)
        {!! Form::open(['route' => 'complete_4th' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $stage1) !!}
            {!! Form::hidden('stage2', $stage2) !!}
            {!! Form::hidden('stage3', $stage3) !!}
            {!! Form::hidden('stage4', $game_team) !!}
            @include('submit_button.team')
        {!! Form::close() !!}
        @endforeach
        </div>
        <div class='col-md-3'>
        @foreach($games_final as $game_final)
        {!! Form::open(['route' => 'complete_4th' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $stage1) !!}
            {!! Form::hidden('stage2', $stage2) !!}
            {!! Form::hidden('stage3', $stage3) !!}
            {!! Form::hidden('stage4', $game_final) !!}
                @include('submit_button.final')
        {!! Form::close() !!}
        @endforeach
        {!! Form::open(['route' => 'complete_3rd' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $stage1) !!}
            {!! Form::hidden('stage2', $stage2) !!}
            {!! Form::hidden('stage3', null) !!}
            {!! Form::submit('ステージ3入力へ戻る', ['class' => 'btn btn-info btn-block mt-3']) !!}
        {!! Form::close() !!}
        </div>
    </div>
    @endif
    
    <!--ステージ5入力フォーム-->
    @if($stage4 != null && $stage5 == null)
    <h3>5thステージ</h3>
    <div class='row d-flex'>
        <div class='col-md-3'>
        @foreach($games_race as $game_race)
        {!! Form::open(['route' => 'complete_5th' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $stage1) !!}
            {!! Form::hidden('stage2', $stage2) !!}
            {!! Form::hidden('stage3', $stage3) !!}
            {!! Form::hidden('stage4', $stage4) !!}
            {!! Form::hidden('stage5', $game_race) !!}
            @include('submit_button.race')
        {!! Form::close() !!}
        @endforeach
        </div>
        <div class='col-md-3'>
        @foreach($games_survival as $game_survival)
        {!! Form::open(['route' => 'complete_5th' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $stage1) !!}
            {!! Form::hidden('stage2', $stage2) !!}
            {!! Form::hidden('stage3', $stage3) !!}
            {!! Form::hidden('stage4', $stage4) !!}
            {!! Form::hidden('stage5', $game_survival) !!}
            @include('submit_button.survival')
        {!! Form::close() !!}
        @endforeach
        </div>
        <div class='col-md-3'>
        @foreach($games_team as $game_team)
        {!! Form::open(['route' => 'complete_5th' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $stage1) !!}
            {!! Form::hidden('stage2', $stage2) !!}
            {!! Form::hidden('stage3', $stage3) !!}
            {!! Form::hidden('stage4', $stage4) !!}
            {!! Form::hidden('stage5', $game_team) !!}
            @include('submit_button.team')
        {!! Form::close() !!}
        @endforeach
        </div>
        <div class='col-md-3'>
        @foreach($games_final as $game_final)
        {!! Form::open(['route' => 'complete_5th' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $stage1) !!}
            {!! Form::hidden('stage2', $stage2) !!}
            {!! Form::hidden('stage3', $stage3) !!}
            {!! Form::hidden('stage4', $stage4) !!}
            {!! Form::hidden('stage5', $game_final) !!}
            @include('submit_button.final')
        {!! Form::close() !!}
        @endforeach
        {!! Form::open(['route' => 'complete_4th' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $stage1) !!}
            {!! Form::hidden('stage2', $stage2) !!}
            {!! Form::hidden('stage3', $stage3) !!}
            {!! Form::hidden('stage4', null) !!}
            {!! Form::submit('ステージ4入力へ戻る', ['class' => 'btn btn-info btn-block mt-3']) !!}
        {!! Form::close() !!}
        </div>
    </div>
    @endif
    
    <!--ステージ6入力フォーム-->
    @if($stage5 != null && $stage6 == null)
    <h3>6thステージ</h3>
    <div class='row d-flex'>
        <div class='col-md-3'>
        @foreach($games_race as $game_race)
        {!! Form::open(['route' => 'complete_6th' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $stage1) !!}
            {!! Form::hidden('stage2', $stage2) !!}
            {!! Form::hidden('stage3', $stage3) !!}
            {!! Form::hidden('stage4', $stage4) !!}
            {!! Form::hidden('stage5', $stage5) !!}
            {!! Form::hidden('stage6', $game_race) !!}
            @include('submit_button.race')
        {!! Form::close() !!}
        @endforeach
        </div>
        <div class='col-md-3'>
        @foreach($games_survival as $game_survival)
        {!! Form::open(['route' => 'complete_6th' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $stage1) !!}
            {!! Form::hidden('stage2', $stage2) !!}
            {!! Form::hidden('stage3', $stage3) !!}
            {!! Form::hidden('stage4', $stage4) !!}
            {!! Form::hidden('stage5', $stage5) !!}
            {!! Form::hidden('stage6', $game_survival) !!}
            @include('submit_button.survival')
        {!! Form::close() !!}
        @endforeach
        </div>
        <div class='col-md-3'>
        @foreach($games_team as $game_team)
        {!! Form::open(['route' => 'complete_6th' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $stage1) !!}
            {!! Form::hidden('stage2', $stage2) !!}
            {!! Form::hidden('stage3', $stage3) !!}
            {!! Form::hidden('stage4', $stage4) !!}
            {!! Form::hidden('stage5', $stage5) !!}
            {!! Form::hidden('stage6', $game_team) !!}
                @include('submit_button.team')
        {!! Form::close() !!}
        @endforeach
        </div>
        <div class='col-md-3'>
        @foreach($games_final as $game_final)
        {!! Form::open(['route' => 'complete_6th' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $stage1) !!}
            {!! Form::hidden('stage2', $stage2) !!}
            {!! Form::hidden('stage3', $stage3) !!}
            {!! Form::hidden('stage4', $stage4) !!}
            {!! Form::hidden('stage5', $stage5) !!}
            {!! Form::hidden('stage6', $game_final) !!}
                @include('submit_button.final')
        {!! Form::close() !!}
        @endforeach
        {!! Form::open(['route' => 'complete_5th' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $stage1) !!}
            {!! Form::hidden('stage2', $stage2) !!}
            {!! Form::hidden('stage3', $stage3) !!}
            {!! Form::hidden('stage4', $stage4) !!}
            {!! Form::hidden('stage5', null) !!}
           {!! Form::submit('ステージ5入力へ戻る', ['class' => 'btn btn-info btn-block mt-3']) !!}
        {!! Form::close() !!}
        </div>
    </div>
    @endif
    
    <!--ステージ7入力フォーム-->
    @if($stage6 != null && $stage7 == null)
    <h3>7thステージ</h3>
    <div class='row d-flex'>
        <div class='col-md-3'>
        @foreach($games_race as $game_race)
        {!! Form::open(['route' => 'complete_7th' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $stage1) !!}
            {!! Form::hidden('stage2', $stage2) !!}
            {!! Form::hidden('stage3', $stage3) !!}
            {!! Form::hidden('stage4', $stage4) !!}
            {!! Form::hidden('stage5', $stage5) !!}
            {!! Form::hidden('stage6', $stage6) !!}
            {!! Form::hidden('stage7', $game_race) !!}
            @include('submit_button.race')
        {!! Form::close() !!}
        @endforeach
        </div>
        <div class='col-md-3'>
        @foreach($games_survival as $game_survival)
        {!! Form::open(['route' => 'complete_7th' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $stage1) !!}
            {!! Form::hidden('stage2', $stage2) !!}
            {!! Form::hidden('stage3', $stage3) !!}
            {!! Form::hidden('stage4', $stage4) !!}
            {!! Form::hidden('stage5', $stage5) !!}
            {!! Form::hidden('stage6', $stage6) !!}
            {!! Form::hidden('stage7', $game_survival) !!}
            @include('submit_button.survival')
        {!! Form::close() !!}
        @endforeach
        </div>
        <div class='col-md-3'>
        @foreach($games_team as $game_team)
        {!! Form::open(['route' => 'complete_7th' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $stage1) !!}
            {!! Form::hidden('stage2', $stage2) !!}
            {!! Form::hidden('stage3', $stage3) !!}
            {!! Form::hidden('stage4', $stage4) !!}
            {!! Form::hidden('stage5', $stage5) !!}
            {!! Form::hidden('stage6', $stage6) !!}
            {!! Form::hidden('stage7', $game_team) !!}
                @include('submit_button.team')
        {!! Form::close() !!}
        @endforeach
        </div>
        <div class='col-md-3'>
        @foreach($games_final as $game_final)
        {!! Form::open(['route' => 'complete_7th' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $stage1) !!}
            {!! Form::hidden('stage2', $stage2) !!}
            {!! Form::hidden('stage3', $stage3) !!}
            {!! Form::hidden('stage4', $stage4) !!}
            {!! Form::hidden('stage5', $stage5) !!}
            {!! Form::hidden('stage6', $stage6) !!}
            {!! Form::hidden('stage7', $game_final) !!}
                @include('submit_button.final')
        {!! Form::close() !!}
        @endforeach
        {!! Form::open(['route' => 'complete_6th' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $stage1) !!}
            {!! Form::hidden('stage2', $stage2) !!}
            {!! Form::hidden('stage3', $stage3) !!}
            {!! Form::hidden('stage4', $stage4) !!}
            {!! Form::hidden('stage5', $stage5) !!}
            {!! Form::hidden('stage6', null) !!}
            {!! Form::submit('ステージ6入力へ戻る', ['class' => 'btn btn-info btn-block mt-3']) !!}
        {!! Form::close() !!}
        </div>
    </div>
    @endif
    
    <!--ステージ7修正フォーム-->
    @if($stage7 != null)
    <div class='row d-flex'>
        <div class='col-md-3'>
        {!! Form::open(['route' => 'complete_7th' ,'method' => 'post']) !!}
            {!! Form::hidden('stage1', $stage1) !!}
            {!! Form::hidden('stage2', $stage2) !!}
            {!! Form::hidden('stage3', $stage3) !!}
            {!! Form::hidden('stage4', $stage4) !!}
            {!! Form::hidden('stage5', $stage5) !!}
            {!! Form::hidden('stage6', $stage6) !!}
            {!! Form::hidden('stage7', null) !!}
            {!! Form::submit('ステージ7入力へ戻る', ['class' => 'btn btn-info btn-block mt-3']) !!}
        {!! Form::close() !!}
        </div>
    </div>
    @endif
</div>