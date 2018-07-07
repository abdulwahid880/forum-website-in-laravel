<?php

namespace App\Http\Controllers;
use App\Channel;
use App\Discussion;
use App\User;
use Illuminate\Http\Request;


class ForumsController extends Controller
{
    public function index(){

    $discussions = Discussion::orderBy('created_at','desc')->paginate(2);
       return view('forum',['discussions'=>$discussions]);

    }
    public function channel($slug){
      $channel = Channel::where('slug',$slug)->first();

     
     
      return view('channel')->with('discussions',$channel->disscusions()->paginate(5));


    }
}
