@extends('layouts.app')

@section('content')

            <div class="panel panel-default">
                <div class="panel-heading text-center">Create a new Discussion</div>

                <div class="panel-body">
                   <form  action="{{route('discussion.store')}}" method="post">
                       {{csrf_field() }}
                       <div class="form-group">
                           <label for="title">title</label>
                           <input class="form-control" type="text" name="title">
                       </div>
                     <div class="form-group">
                      <label for="channel">Pick a Channel</label>
                         <select name="channel_id" id="channel_id" class="form-control">
                           @foreach($channels as $channel)
                             <option value="{{$channel->id}}">{{$channel->title}}</option>
                           @endforeach  
                           
                         </select>
                     </div> 
                     <div class="form-group"> 
                         <label for="content">Ask Question</label>
                         <textarea class="form-control" name="content" id="content" rows="10" cols="30">
                             
                         </textarea>

                     </div> 
                     <div class="form-group">
                         
                         <button class="btn btn-success pull-right" type="submit">create Discussion </button>
                     </div>  
                   </form>
                </div>
            </div>
        
@endsection
