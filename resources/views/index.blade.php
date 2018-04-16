@extends('layout')

@section('content')
    <h1 class="title">ToDo App 1.0</h1>
      <p class="subtitle">
        Create with <span class="has-text-danger">Laravel PHP</span> and <span class="has-text-primary">Bulma</span>!
      </p>

      <ul>
          @foreach($todos as $todo)
            <li>{{ $todo->name }}</li>
          @endforeach
      </ul>
@endsection