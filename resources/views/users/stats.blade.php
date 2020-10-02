@extends('layouts.app')

@section('content')

<?php $games_race = array('ぐるぐるファイト','ゲートクラッシュ','シーソーゲーム','スピンレース','ドアダッシュ','ヒットパレード','ヒヤヒヤロード','フルーツパニック'); ?>
<?php $games_survival = array('しっぽオニ','ジャンプクラブ','スライム・クライム','パーフェクトマッチ','ブロックパーティー','ロールアウト'); ?>
<?php $games_team = array('エッグ・スクランブル','ためこみ合戦','チームしっぽオニ','バッドラック','フープ・ループ・ゴール','フォールボール','ロックンロール'); ?>
<?php $games_final = array('クラウンマウンテン','ジャンプ・ショーダウン','止まるなキケン','ロイヤルファンブル'); ?>
<?php $rounds = array(1,2,3,4,5,6,7); ?>

@include('users.period_stats')

<table class='table table-bordered'>
    <tr>
        <th>総プレイSHOW</th>
        <th>優勝回数</th>
    </tr>
    <tr>
        <td>{{ $shows->count() }}</td>
        <td>{{ $user->wins_count($shows) }}</td>
    </tr>
</table>

<table class='table table-bordered'>
    <thead>
        <tr>
            <th>種目</th>
            <th>プレイ数</th>
            <th>クリア数</th>
            <th>脱落数</th>
            <th>クリア率</th>
        </tr>
    </thead>
    <tbody>
        @foreach($games_race as $game_race)
        <tr>
            <td>{{ $game_race }}</td>
            <td>{{ $user->played_games_count($game_race,$shows) }}</td>
            <td>{{ $user->cleared_games_count($game_race,$shows) }}</td>
            <td>{{ $user->failed_games_count($game_race,$shows) }}</td>
            <td>{{ $user->cleared_games_era($game_race,$shows) }}</td>
            <?php $played_games_race[] = $user->played_games_count($game_race,$shows); 
                  $cleared_games_race[] = $user->cleared_games_count($game_race,$shows); 
                  $failed_games_race[] = $user->failed_games_count($game_race,$shows); ?>
        </tr>
        @endforeach
        <tr>
            <td>レースラウンド累計</td>
            <td><?php print array_sum($played_games_race); ?></td>
            <td><?php print array_sum($cleared_games_race); ?></td>
            <td><?php print array_sum($failed_games_race); ?></td>
            <td><?php if(array_sum($played_games_race) != 0){print round(array_sum($cleared_games_race) / array_sum($played_games_race)*100, 2) . '%';} ?></td>
        </tr>
        @foreach($games_survival as $game_survival)
        <tr>
            <td>{{ $game_survival }}</td>
            <td>{{ $user->played_games_count($game_survival,$shows) }}</td>
            <td>{{ $user->cleared_games_count($game_survival,$shows) }}</td>
            <td>{{ $user->failed_games_count($game_survival,$shows) }}</td>
            <td>{{ $user->cleared_games_era($game_survival,$shows) }}</td>
            <?php $played_games_survival[] = $user->played_games_count($game_survival,$shows);
                  $cleared_games_survival[] = $user->cleared_games_count($game_survival,$shows);
                  $failed_games_survival[] = $user->failed_games_count($game_survival,$shows); ?>
        </tr>
        @endforeach
        <tr>
            <td>サバイバルラウンド累計</td>
            <td><?php print array_sum($played_games_survival); ?></td>
            <td><?php print array_sum($cleared_games_survival); ?></td>
            <td><?php print array_sum($failed_games_survival); ?></td>
            <td><?php if(array_sum($played_games_survival) != 0){print round(array_sum($cleared_games_survival) / array_sum($played_games_survival)*100, 2) . '%';} ?></td>
        </tr>
        @foreach($games_team as $game_team)
        <tr>
            <td>{{ $game_team }}</td>
            <td>{{ $user->played_games_count($game_team,$shows) }}</td>
            <td>{{ $user->cleared_games_count($game_team,$shows) }}</td>
            <td>{{ $user->failed_games_count($game_team,$shows) }}</td>
            <td>{{ $user->cleared_games_era($game_team,$shows) }}</td>
            <?php $played_games_team[] = $user->played_games_count($game_team,$shows);
                  $cleared_games_team[] = $user->cleared_games_count($game_team,$shows);
                  $failed_games_team[] = $user->failed_games_count($game_team,$shows); ?>
        </tr>
        @endforeach
        <tr>
            <td>チームラウンド累計</td>
            <td><?php print array_sum($played_games_team); ?></td>
            <td><?php print array_sum($cleared_games_team); ?></td>
            <td><?php print array_sum($failed_games_team); ?></td>
            <td><?php if(array_sum($played_games_team) != 0){print round(array_sum($cleared_games_team) / array_sum($played_games_team)*100, 2) . '%';} ?></td>
        </tr>
        @foreach($games_final as $game_final)
        <tr>
            <td>{{ $game_final }}</td>
            <td>{{ $user->played_games_count($game_final,$shows) }}</td>
            <td>{{ $user->cleared_games_count($game_final,$shows) }}</td>
            <td>{{ $user->failed_games_count($game_final,$shows) }}</td>
            <td>{{ $user->cleared_games_era($game_final,$shows) }}</td>
            <?php $played_games_final[] = $user->played_games_count($game_final,$shows);
                  $cleared_games_final[] = $user->cleared_games_count($game_final,$shows);
                  $failed_games_final[] = $user->failed_games_count($game_final,$shows); ?>
        </tr>
        @endforeach
        <tr>
            <td>ファイナルラウンド累計</td>
            <td><?php print array_sum($played_games_final); ?></td>
            <td><?php print array_sum($cleared_games_final); ?></td>
            <td><?php print array_sum($failed_games_final); ?></td>
            <td><?php if(array_sum($played_games_final) != 0){print round(array_sum($cleared_games_final) / array_sum($played_games_final)*100, 2) . '%';} ?></td>
        </tr>
        <tr>
            <td>総合</td>
            <td><?php $played_games_total = array_sum($played_games_race) + array_sum($played_games_survival) + array_sum($played_games_team) +  array_sum($played_games_final); 
                    print $played_games_total; ?></td>
            <td><?php $cleared_games_total = array_sum($cleared_games_race) + array_sum($cleared_games_survival) + array_sum($cleared_games_team) +  array_sum($cleared_games_final); 
                    print $cleared_games_total; ?></td>
            <td><?php $failed_games_total = array_sum($failed_games_race) + array_sum($failed_games_survival) + array_sum($failed_games_team) +  array_sum($failed_games_final);
                    print $failed_games_total; ?></td>
            <td><?php if($played_games_total != 0){print round($cleared_games_total / $played_games_total * 100, 2) . '%';} ?> </td>
        </tr>
    </tbody>
    <thead>
        <tr>
            <th>ラウンド</th>
            <th>プレイ数</th>
            <th>クリア数</th>
            <th>脱落数</th>
            <th>クリア率</th>
        </tr>
    </thead>
    <tbody>
        @foreach($rounds as $round)
        <tr>
            <td>ラウンド{{ $round }}</td>
            <td>{{ $user->played_rounds_count($round,$shows) }}</td>
            <td>{{ $user->cleared_rounds_count($round,$shows) }}</td>
            <td>{{ $user->failed_rounds_count($round,$shows) }}</td>
            <td>{{ $user->cleared_rounds_era($round,$shows) }}</td>
        </tr>
        @endforeach


    </tbody>
</table>




@endsection