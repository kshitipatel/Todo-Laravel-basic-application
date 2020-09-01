@extends('layout')

@section('content')


<form method="post" action="/create/todo">
    {{ csrf_field() }}
    <center>
        <input type="text" name="todo" class="form-control input-lg" placeholder="Create a new to do">
    </center>
</form>
<br>
@foreach($todos as $todo)
{{ $todo->list }}

<a href="{{ route('todo.delete', ['id'=>$todo->id]) }}" class="btn btn-danger">Delete</a>
<a href="{{ route('todo.updateview', ['id'=>$todo->id]) }}" class="btn btn-primary">Update</a>
@if($todo->completed == 0)
<a href="{{ route('todo.completed', ['id'=>$todo->id])}}" class="btn btn-success">Mark as Completed</a>
@else
Completed
@endif
<hr>
@endforeach

@stop

