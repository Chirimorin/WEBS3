<!DOCTYPE HTML>
<html>
	<head>

		@include('shared.head')

	</head>

	<body>

		@include('shared.header')
		
		<div class="container greenShadow">

			<div class="row">
			
				<!--@include('shared.navigation')-->

				@yield('content')

			</div>



		</div>

		@include('shared.footer')

	</body>
</html>