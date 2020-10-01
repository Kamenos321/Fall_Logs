<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\User;
use App\Show;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * このユーザがプレイしたshow。（ Showモデルとの関係を定義）
     */
    public function shows()
    {
        return $this->hasMany(Show::class);
    }
    
    /**
     * このユーザのプレイ結果。（ Resultモデルとの関係を定義）
     */
    public function results()
    {
        return $this->hasMany(Result::class);
    }
    
    public function loadRelationshipCounts()
    {
        $this->loadCount('shows');
    }
    
    public function played_games_count($game)
    {
        $user = \Auth::user();
        
        $played_games_count = $user->shows()->where('stage1',$game)->count() +
                              $user->shows()->where('stage2',$game)->count() +
                              $user->shows()->where('stage3',$game)->count() +
                              $user->shows()->where('stage4',$game)->count() +
                              $user->shows()->where('stage5',$game)->count() +
                              $user->shows()->where('stage6',$game)->count() +
                              $user->shows()->where('stage7',$game)->count();
                            
        return $played_games_count;
    }
    
    public function failed_games_count($game)
    {
        $user = \Auth::user();

        $shows = $user->shows()->get();

        $failed_games = array();
        
        foreach($shows as $show){
            if($show->failed_game() !== null)
            {
                $failed_games[] = $show->failed_game();
            }
        }
        return count(array_keys($failed_games, $game));
    }
    
    public function cleared_games_count($game)
    {
        return $this->played_games_count($game) - $this->failed_games_count($game);
    }
    
    public function cleared_games_era($game)
    {
        if ($this->played_games_count($game) !== 0)
        {
            return round($this->cleared_games_count($game) / $this->played_games_count($game) * 100, 2);
        } else {
            return 0;
        }
    }
    
    public function played_rounds_count($round)
    {
        $user = \Auth::user();
        
        $played_rounds_count = $user->shows()->where('stage' . $round , '!=' ,null)->count();

        return $played_rounds_count;
    }
    
    public function failed_rounds_count($round)
    {
        $user = \Auth::user();

        $shows = $user->shows()->get();

        $failed_rounds = array();
        
        foreach($shows as $show){
            if($show->failed_round() !== null)
            {
                $failed_rounds[] = $show->failed_round();
            }
        }
        return count(array_keys($failed_rounds, $round));
    }
    
    public function cleared_rounds_count($round)
    {
        return $this->played_rounds_count($round) - $this->failed_rounds_count($round);
    }
    
    public function cleared_rounds_era($round)
    {
        if ($this->played_rounds_count($round) !== 0)
        {
            return round($this->cleared_rounds_count($round) / $this->played_rounds_count($round) * 100, 2);
        } else {
            return 0;
        }
    }
    
    public function wins_count()
    {
        $user = \Auth::user();
        $shows = $user->shows()->get();
        return $user->shows()->where('result', 'win')->count();
    }
    
}