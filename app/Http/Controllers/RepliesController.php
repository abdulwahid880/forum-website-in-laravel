<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reply;
use App\like;
use Auth;
use Session;
class RepliesController extends Controller
{
    public function likes($id){
    
      

     like::create([

      'reply_id' => $id,
      'user_id' => Auth::id()


     	]);

     session::flash('success','you liked the reply');
     return redirect()->back();

    }

    public function unlikes($id){

    	$like=like::where('reply_id',$id)->where('user_id',Auth::id())->first();
    	$like->delete();
    	session::flash('success','you unliked the reply');
         return redirect()->back();
    }

}
