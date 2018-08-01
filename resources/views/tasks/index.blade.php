@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <h3>My tasks</h3>
        <p><a href="{{route('tasks.create')}}" class = "btn btn-success">Create </a></p>
        <div class="col-md-10 col-md-offset-1">
            <table class="table">
                <thead>
                    <tr>
                    <td>ID</td>
                    <td>Title</td>
                    <td>Actions</td>

                    </tr>
                </thead>
                <tbody>

                @foreach($tasks as $task)
                <tr>
                    <td>{{$task->id}}</td>
                    <td>{{$task->title}}</td>
                    <td>
                    <a href="#">
                        <i class="glyphicon glyphicon-eye-open"></i>
                    </a>
                    <a href="{{route('tasks.edit', $task->id)}}">
                        <i class="glyphicon glyphicon-edit"></i>
                    </a>
                    <a href="#">
                        <i class="glyphicon glyphicon-remove"></i>
                    </a>
                    
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection