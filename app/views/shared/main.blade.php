<!DOCTYPE HTML>
<html>
	<head>

		@include('shared.head')

	</head>

	<body>

		<div class="container">
			
			@include('shared.baner')

			@include('shared.navigation')

			@yield('content')

		</div>

		@include('shared.footer')

	</body>
</html>