<!DOCTYPE HTML>
<html>
	<head>

		@include('shared.head')

	</head>

	<body>

		@include('shared.baner')
		
		<div class="container">

			@include('shared.navigation')

			@yield('content')

		</div>

		@include('shared.footer')

	</body>
</html>