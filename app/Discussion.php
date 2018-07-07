<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Discussion extends Model
{
    protected $fillable = ['title','content','user_id','channel_id','slug'];


    public function channel (){
    	return $this->belongsTo('App\Channel');
    }
    public function user(){

    	return $this->belongsTo('App\User');
    }

    public function replies(){

    	return $this->hasMany('App\Reply');
    }
    public function wacthers(){
        return $this->hasMany('App\Wachter');
    }

    public function is_being_watched_by_auth_user(){
      $id = Auth::id();
      $wacthers_ids = array();
      foreach($this->wacthers as $w):
          array_push($wacthers_ids,$w->user_id);

        endforeach;

        if(in_array($id, $wacthers_ids)){
            return true;
        }
        else{
            false;
        }

    }
}
