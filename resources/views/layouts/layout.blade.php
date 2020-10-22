<!DOCTYPE html>
<html>

	
<head>
	<title>Cat Database</title>
	<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
</head>
<body class="grey lighten-4">
	<nav class="white z-depth-0">
    <div class="container">
      <img id="logo" src="{{ URL::asset('images/cat-icon.png') }}">
      <a href="{{ URL::route('index') }}" class="brand-logo brand-text">Cat Database</a>
		<ul id="nav-mobile" class="right hide-on-small-and-down">
			<li class="grey-text">Hello username</li>
			<li><a href="#" class="btn brand z-depth-0">Log Out</a></li>
			<li><a href="#" class="btn brand z-depth-0">Add a Cat</a></li>
				
      </ul>
    </div>
  </nav>

	@yield('content')
	
	<footer class="section">
		<div class="center grey-text">&copy; 2020 The Robersonian Institute of Learning</div>
	</footer>
</body>

</html>
