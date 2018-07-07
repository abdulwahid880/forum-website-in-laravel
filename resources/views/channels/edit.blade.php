@extends('layouts.app')

@section('content')

            <div class="panel panel-default">
                <div class="panel-heading">Edit Channel : {{$channel->title}}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                     <form action="{{route('channels.update',['channel'=>$channel->id])}}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                
                                <input class="form-control"type="text" value="{{$channel->title}}" name="channel">
                            </div>
                            <div class="form-group">
                                
                                <div class="text-center">
                                    <button class="btn btn-success">Update Channel </button>
                                </div>
                            </div>
                         
                     </form>
                            
                </div>
            </div>
   
@endsection
