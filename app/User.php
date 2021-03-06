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
    
    public function loadRelationshipCounts()
    {
        $this->loadCount('shows');
    }
    
    public function played_games_count($game,$shows)
    {
        $user = \Auth::user();
        
        $played_games_count = $shows->where('stage1',$game)->count() +
                              $shows->where('stage2',$game)->count() +
                              $shows->where('stage3',$game)->count() +
                              $shows->where('stage4',$game)->count() +
                              $shows->where('stage5',$game)->count() +
                              $shows->where('stage6',$game)->count() +
                              $shows->where('stage7',$game)->count();
                            
        return $played_games_count;
    }

    public function failed_games_count($game,$shows)
    {
        $user = \Auth::user();

        $failed_games = array();
        
        foreach($shows as $show){
            if($show->failed_game() !== null)
            {
                $failed_games[] = $show->failed_game();
            }
        }
        return count(array_keys($failed_games,$game));
    }
    
    public function cleared_games_count($game,$shows)
    {
        return $this->played_games_count($game,$shows) - $this->failed_games_count($game,$shows);
    }
    
    public function cleared_games_era($game,$shows)
    {
        if ($this->played_games_count($game,$shows) != 0)
        {
            return round($this->cleared_games_count($game,$shows) / $this->played_games_count($game,$shows) * 100, 2).'%';
        }
    }
    
    public function played_rounds_count($round,$shows)
    {
        $user = \Auth::user();
        
        $played_rounds_count = $shows->where('stage' . $round , '!=' ,null)->count();

        return $played_rounds_count;
    }
    
    public function failed_rounds_count($round,$shows)
    {
        $user = \Auth::user();

        $failed_rounds = array();
        
        foreach($shows as $show){
            if($show->failed_round() !== null)
            {
                $failed_rounds[] = $show->failed_round();
            }
        }
        return count(array_keys($failed_rounds,$round));
    }
    
    public function cleared_rounds_count($round,$shows)
    {
        return $this->played_rounds_count($round,$shows) - $this->failed_rounds_count($round,$shows);
    }
    
    public function cleared_rounds_era($round,$shows)
    {
        if ($this->played_rounds_count($round,$shows) !== 0)
        {
            return round($this->cleared_rounds_count($round,$shows) / $this->played_rounds_count($round,$shows) * 100, 2).'%';
        }
    }
    
    public function wins_count($shows)
    {
        $user = \Auth::user();
        return $shows->where('result', 1)->count();
    }
    
}