<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') &mdash; The Sunday Sim</title>
	<link rel="stylesheet" type="text/css" href="{{theme('css/backend.css')}}">
</head>
<body>
	<nav class="navbar navbar-static-top navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand">The Sunday Sim</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="#">Item 1</a></li>
				<li><a href="#">Item 2</a></li>
				<li><a href="#">Item 3</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><span class="navbar-text">Hello, Yousif</span></li>
				<li><a href="#">logout</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>@yield('title')</h3>
				@yield('content')
			</div>
		</div>
	</div>
</body>
</html>