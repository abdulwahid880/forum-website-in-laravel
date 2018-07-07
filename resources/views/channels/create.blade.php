@extends('layouts.app')

@section('content')

            <div class="panel panel-default">
                <div class="panel-heading">Create a new Channel</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                     <form action="{{route('channels.store')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                
                                <input class="form-control"type="text" name="channel">
                            </div>
                            <div class="form-group">
                                
                                <div class="text-center">
                                    <button class="btn btn-success">Create</button>
                                </div>
                            </div>
                         
                     </form>
                            
                </div>
            </div>
  
@endsection
