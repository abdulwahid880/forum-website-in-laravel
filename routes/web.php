<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/discuss', function () {
    return view('discuss');
});

Auth::routes();

Route::get('/forum', [
     'uses'=>'ForumsController@index',
     'as'=>'forum'

	]);

 Route::get('discussion/{slug}',[
      'uses' => 'DiscussionsController@show',
        'as' => 'discussion'
    ]);

   Route::get('channel/{slug}', [
     'uses'=>'ForumsController@channel',
     'as'=>'channel'

  ]);





Route::group(['middleware'=>'auth'],function(){

   Route::resource('channels','ChannelsController');
   Route::get('Discussion/create', [
     'uses' => 'DiscussionsController@create',
     'as'   =>  'discussion.create'
   
   	]);
   Route::post('Discussion/store', [
     'uses' => 'DiscussionsController@store',
     'as'   =>  'discussion.store'
   
   	]);
   

   

   Route::post('discussion/reply/{id}',[
        'uses'=>'DiscussionsController@reply',
        'as'=>'discussion.reply'
   	]);

   Route::get('discussion/watch/{id}',[

    'uses'=>'WachtersController@watch',
    'as'=>'discussion.watch'

    ]);
   Route::get('discussion/unwatch/{id}',[

    'uses'=>'WachtersController@unwatch',
    'as'=>'discussion.unwatch'

    ]);
   });

  

   Route::get('reply/like/{id}',[
      'uses' =>'RepliesController@likes',
      'as'=>'reply.like'

    ]);

   Route::get('reply/unlike/{id}',[
      'uses' =>'RepliesController@unlikes',
      'as'=>'reply.unlike'

    ]);
   

