<?php

namespace App\Http\Controllers;
use Auth;
use Session;
use App\Discussion;
use App\Reply;
use Illuminate\Http\Request;

class DiscussionsController extends Controller
{
    public function create(){

    	return view('discuss');
    }
    public function store (){
    	$r = request();

    	$this->validate($r,[

            'channel_id' => 'required',
            'content' => 'required',
            'title' => 'required'
    		]);

    	$discussion = Discussion::create([
    	'title' => $r->title,
    	'content' => $r->content,
    	'channel_id' => $r->channel_id,
    	'user_id' => Auth::id(),
    	'slug' => str_slug($r->title)
    	]);


    	session::flash('success', 'Discussion Created Successfully');
    	return redirect()->route('discussion',['slug'=>$discussion->slug]);

    }

    public function show($slug){

      return view('discussions.show')->with('d', Discussion::where('slug', $slug)->first());
      
    }

    public function reply($id){

     $d = Discussion::find($id);
     $reply = Reply::create([
        'user_id'=> Auth::id(),
        'discussion_id'=> $id,
        'content'=>request()->reply
        ]);

     session::flash('success','Reply submitted to discussion');
     return redirect()->back();
    }
}
