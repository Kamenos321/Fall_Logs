<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Show;

class UsersController extends Controller
{
    public function stats()
    {
        $data = [];
        if (\Auth::check()) { // 認証済みの場合
            // 認証済みユーザを取得
            $user = \Auth::user();
           // ユーザのshowの一覧を作成日時の昇順で取得
            $shows = $user->shows()->orderBy('created_at', 'asc')->paginate(100);
            
            $data = [
                'user' => $user,
                'shows' => $shows,
            ];
        }
        
        // ビューでそれらを表示
        return view('users.stats', $data);
    }

    public function played_games_count($game)
    {
        $user = \Auth::user();
        
        $played_games_count = $user->shows()->where('stage1',$game)
                                ->orWhere('stage2',$game)
                                ->orWhere('stage3',$game)
                                ->orWhere('stage4',$game)
                                ->orWhere('stage5',$game)
                                ->orWhere('stage6',$game)
                                ->orWhere('stage7',$game)                             
                                ->count();
                            
        return view('users.stats',[
            'user' => $user,
            'played_games_count' => $played_games_count
            ]);
    }

}
