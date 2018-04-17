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
      .name { color: normal; }
      hr { margin: 0.6rem 0; }
      .todo-form { margin-bottom: 2rem; }
	  .completed {text-decoration: line-through; }
    </style>
  </head>
  <body>
  <section class="section">
    <div class="container">
      
      <div class="columns">
        <div class="column is-three-fifths">
			<h1 class="title">ToDo App 1.0</h1>
			<p class="subtitle">
				Create with <span class="has-text-danger">Laravel PHP</span> and <span class="has-text-primary">Bulma</span>!
			</p>
			<hr>
			@if(Session::has('success'))
				<div class="notification is-success">
					{{ Session::get('success') }}
				</div>
			@endif

          	@yield('content')
        </div>
      </div>

      <div class="footer">        
        &copy;{{ date('Y') }} <a href="https://twitter.com/kenoldb"><span class="has-text-primary">Kenold Beauplan</span></a>. All rights reserved.
      </div>
    </div>
  </section>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script>
		$(document).ready(function(){
			$('.notification').delay(3000).fadeOut(1000);
		// 	$(".todo-item").click(function(){
		// 		alert('clicked');
		// 		$(this).addClass("completed");
		// 	});
		});
	</script>
  </body>
</html>