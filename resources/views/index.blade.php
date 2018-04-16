@extends('layout')

@section('content')
    <div class="todo-form">
        <form action="todo/create" method="POST">
            {{ csrf_field() }}
            <input type="text" class="input is-large" name="name" placeholder="Create a new todo and press ENTER...">
        </form>                
    </div>                        

    <ul>
        @foreach($todos as $todo)
            <li>
                <span class="icon has-text-info">
                    <a href="{{ route('todo.edit', ['id' => $todo->id]) }}"><i class="fas fa-edit"></i></a>
                </span>
                <span class="icon has-text-danger">
                    <a href="{{ route('todo.delete', ['id' => $todo->id]) }}"><i class="fas fa-trash-alt"></i></a>
                </span>
                @if($todo->completed)
                    <span class="icon has-text-primary">
                @else
                    <span class="icon has-text-grey-light completed">
                @endif
                    <a href="{{ route('todo.completed', ['id' => $todo->id]) }}"><i class="fas fa-check-circle"></i></a>
                </span>
                <span class="todo-item">{{ $todo->name }}</span>
                <hr>
            </li>
        @endforeach
    </ul>     
@endsection