<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wachter;
use Session;
use Auth;

class WachtersController extends Controller
{
    public function watch($id){
    	Wachter::create([
            'discussion_id'=>$id,
            'user_id'=>Auth::id()

    		]);
    	session::flash('success','you are watching this discussion');
         return redirect()->back();
    }

    	public function unwatch($id){
    		$watcher = Wachter::where('discussion_id',$id)->where('user_id',Auth::id());
    		$watcher->delete();
    	
    	session::flash('success','you are no longer watching this discussion');
         return redirect()->back();
    }
}
