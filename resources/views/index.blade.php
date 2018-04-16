@extends('layout')

@section('content')
    <div class="columns">
        <div class="column is-three-fifths">
            <div class="todo-form">
                <form action="" method="POST">
                    <input type="text" class="input is-large" name="name" placeholder="Create a new todo and press ENTER...">
                </form>                
            </div>                        
        
            <ul>
                @foreach($todos as $todo)
                    <li>
                        <span class="icon has-text-info">
                            <a href=""><i class="fas fa-edit"></i></a>
                        </span>
                        <span class="icon has-text-danger">
                            <a href=""><i class="fas fa-trash-alt"></i></a>
                        </span>
                        <span class="icon has-text-primary">
                            <a href=""><i class="fas fa-check-circle"></i></a>
                        </span>
                        {{ $todo->name }}
                        <hr>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection