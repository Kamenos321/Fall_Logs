<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $fillable = ['date','stage1','stage2','stage3','stage4','stage5','stage6','stage7','result'];

    /**
     * このshowをプレイしたユーザ。（ Userモデルとの関係を定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function failed_game()
    {
        if($this->result == 1) {
            return null;
        }
        elseif($this->stage7 !== null) {
            return $this->stage7;
        } 
        elseif($this->stage6 !== null) {
            return $this->stage6;
        } 
        elseif($this->stage5 !== null) {
            return $this->stage5;
        } 
        elseif($this->stage4 !== null) {
            return $this->stage4;
        } 
        elseif($this->stage3 !== null) {
            return $this->stage3;
        } 
        elseif($this->stage2 !== null) {
            return $this->stage2;
        } 
        else{
            return $this->stage1;
        }
    }
    
    public function failed_round()
    {
        if($this->result == 1) {
            return null;
        }
        elseif($this->stage7 !== null) {
            return 7;
        } 
        elseif($this->stage6 !== null) {
            return 6;
        } 
        elseif($this->stage5 !== null) {
            return 5;
        } 
        elseif($this->stage4 !== null) {
            return 4;
        } 
        elseif($this->stage3 !== null) {
            return 3;
        } 
        elseif($this->stage2 !== null) {
            return 2;
        } 
        else{
            return 1;
        }
    }
    
    

    
}
