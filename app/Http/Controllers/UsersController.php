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

    public function period_stats(Request $request)
    {
       // バリデーション
        $request->validate(
            ['date_from' => 'required',
             'date_to' => 'required'
            ]);
        
        $data = [];
        if (\Auth::check()) { // 認証済みの場合
            // 認証済みユーザを取得
            $user = \Auth::user();

            $shows = $user->shows()->where('date', '>=', $request->date_from)->where('date', '<=', $request->date_to)->orderBy('created_at', 'asc')->paginate(100);
            
            $data = [
                'user' => $user,
                'shows' => $shows,
            ];

        }
        
        return view('users.stats', $data);


    }

}