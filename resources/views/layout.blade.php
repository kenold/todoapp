<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ToDo App 1.0</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <style>
      a { color: inherit; }
      hr { margin: 0.6rem 0; }
      .todo-form { margin-bottom: 2rem; }
    </style>
  </head>
  <body>
  <section class="section">
    <div class="container">
      <h1 class="title">ToDo App 1.0</h1>
      <p class="subtitle">
        Create with <span class="has-text-danger">Laravel PHP</span> and <span class="has-text-primary">Bulma</span>!
      </p>
      <hr>
      <div class="columns">
        <div class="column is-three-fifths">
          @yield('content')
        </div>
      </div>
    </div>
  </section>
  </body>
</html>