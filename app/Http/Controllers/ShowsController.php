<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Show;

class ShowsController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) { // 認証済みの場合
            // 認証済みユーザを取得
            $user = \Auth::user();
           // ユーザのshowの一覧を作成日時の昇順で取得
            $shows = $user->shows()->orderBy('created_at', 'desc')->paginate(100);
            
            $data = [
                'user' => $user,
                'shows' => $shows,
            ];
        }
        
        // indexビューでそれらを表示
        return view('shows.index', $data);
    }
    
    public function create()
    {
        $show = new Show;
        
        return view('shows.create',[
            'show' => $show,
            'stage1' => null, 
            'stage2' => null,
            'stage3' => null,
            'stage4' => null,
            'stage5' => null,
            'stage6' => null,
            'stage7' => null,
        ]);
    }
    
    public function store(Request $request)
    {
        // バリデーション
        $request->validate([
            'date' => 'required',
            'stage1' => 'required|max:20',
            'stage2' => 'max:20',
            'stage3' => 'max:20',
            'stage4' => 'max:20',
            'stage5' => 'max:20',
            'stage6' => 'max:20',
            'stage7' => 'max:20',
            'result' => 'required|max:20',            
            ]);
            
        // 認証済みユーザ(閲覧者)の投稿として作成(リクエストされた値をもとに作成)
        $request->user()->shows()->create([
            'date' => $request->date,
            'stage1' => $request->stage1,
            'stage2' => $request->stage2,
            'stage3' => $request->stage3,
            'stage4' => $request->stage4,
            'stage5' => $request->stage5,
            'stage6' => $request->stage6,
            'stage7' => $request->stage7,
            'result' => $request->result,
        ]);
        
        // 前のURLへリダイレクトさせる
        return redirect('/shows/create');
    }
    
    public function edit($id)
    {
        $show = Show::findOrFail($id);
            return view('shows.edit',[
                'show' => $show
            ]);
    }
    
    public function update(Request $request, $id)
    {
        // バリデーション
        $request->validate([
            'date' => 'required',
            'stage1' => 'required|max:20',
            'stage2' => 'max:20',
            'stage3' => 'max:20',
            'stage4' => 'max:20',
            'stage5' => 'max:20',
            'stage6' => 'max:20',
            'stage7' => 'max:20',
            'result' => 'max:20',
            ]);
            
        $show = Show::findOrFail($id);
        
        if(\Auth::id() === $show->user_id) {
            $show->date = $request->date;
            $show->stage1 = $request->stage1;
            $show->stage2 = $request->stage2;
            $show->stage3 = $request->stage3;
            $show->stage4 = $request->stage4;
            $show->stage5 = $request->stage5;
            $show->stage6 = $request->stage6;
            $show->stage7 = $request->stage7;
            $show->result = $request->result;
            $show->save();
        }
        return redirect('/shows');
    }
    
    public function destroy($id)
    {
        $show = Show::findOrFail($id);

        if(\Auth::id() === $show->user_id) {
            $show->delete();
        }
        return redirect('/shows');
    }
    
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
        
        // Welcomeビューでそれらを表示
        return view('shows.stats', $data);
    }
    
    public function period_search(Request $request)
    {
       // バリデーション
        $request->validate(
            ['date_from' => 'required',
             'date_to' => 'required'
            ]);

        $data = [];
        if (\Auth::check()) { // 認証済みの場合

            $user = \Auth::user();

            $shows = $user->shows()->where('date', '>=', $request->date_from)->where('date', '<=', $request->date_to)->orderBy('date', 'desc')->paginate(100);
        
            $data = [
                'user' => $user,
                'shows' => $shows,
            ];
        }
        return view('shows.index',$data);
    }

}