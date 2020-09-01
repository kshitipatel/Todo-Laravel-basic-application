@extends('layout')

@section('content')

<h3>Update your to do</h3>
<h4>{{$todo->list}}</h4>
<br>
<form method="post" action="{{ route('todo.update',['id'=>$todo->id]) }}">
    {{ csrf_field() }}
    <center>
        <input type="text" name="todo" class="form-control input-lg" placeholder="Updated to do">
    </center>
</form>

@stop