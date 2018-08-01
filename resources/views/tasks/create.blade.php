@extends('layout')

@section('content')
@include('tasks.errors')
<div class="container">
    <h3>Creat Tasks</h3>
  
            <div class="row">
                <div class="col-md-12">
            {!!Form::open(['route'=> ['tasks.store']])!!}
                <div class="form-group">
                    <input type="text" class="form-control" name = "title" value = "{{old('title')}}">
                    <br>
                    <textarea name="description" id="" cols="30" rows="10" class = "form-control">{{old('description')}}</textarea>
                    <br>
                    <button class="btn btn-success">Submit</button>
                </div>
                {!!Form::close()!!}
                </div>
            </div>
       
    </h3>
</div>
@endsection