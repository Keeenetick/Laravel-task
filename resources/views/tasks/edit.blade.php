@extends('layout')

@section('content')
@include('tasks.errors')
<div class="container">
    <h3>Edit Tasks # - {{$task->id}}</h3>
  
            <div class="row">
                <div class="col-md-12">
            {!!Form::open(['route'=> ['tasks.update', $task->id], 'method' => 'post'])!!}
                <div class="form-group">
                    <input type="text" class="form-control" name = "title" value = "{{$task->title}}">
                    <br>
                    <textarea name="description" id="" cols="30" rows="10" class = "form-control">{{$task->description}}</textarea>
                    <br>
                    
                    <button class="btn btn-warning">Submit</button>
                </div>
                </form>
                {!!Form::close()!!} 
                </div>
            </div>
</div>
@endsection