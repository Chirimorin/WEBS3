<!DOCTYPE HTML>
<html>
	<head>

		@include('shared.head')

	</head>

	<body>

		<div class="container">

			<div class="row">
			
			@include('shared.baner')
			
			</div>
			
			@include('shared.navigation')

			@yield('content')



		</div>

		@include('shared.footer')

	</body>
</html>