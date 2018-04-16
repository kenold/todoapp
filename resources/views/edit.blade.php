@extends('layout')

@section('content')
    <div class="todo-form">
        <form action="{{ route('todo.update', ['id' => $todo->id]) }}" method="POST">
            {{ csrf_field() }}
            <input type="text" class="input is-large" value="{{ $todo->name }}" name="name">
        </form>                
    </div>  
@endsection