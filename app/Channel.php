<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Channel extends Model
{

    protected $fillable = ['title','slug'];

    public function disscusions(){
    	return $this->hasMany('App\Discussion');
    }
}
