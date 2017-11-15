<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') &mdash; The Sunday Sim</title>
	<link rel="stylesheet" type="text/css" href="{{theme('css/backend.css')}}">
</head>
<body>
		<div class="container">
			<div class="row vertical-center">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2 class="panel-title">
								@yield('heading')
							</h2>
						</div>
						<div class="panel-body">
							@yield('content')
						</div>
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>	
		</div>
</body>
</html>