@extends('shared.main')

@section ('title')
	Home
@stop

@section ('content')
	
	<div id="categories" class="col-sm-offset-1 col-sm-10">

		<h2 class="text-center">Welkom op het forum voor echte klimmers, hier onder vind u alle onderwerpen.</h2>

		@foreach ($categories as $categorie)
    
			<div class="categoriesItem col-sm-offset-2 col-sm-8">

				<h3>{{ $categorie->title }}</h3>

				<h4 class="text-primary col-sm-offset-1">{{ $categorie->description }}</h4>

				<h5 class="text-muted">Gemaakt op: {{$categorie->created_at}}<h5>

			</div>

		@endforeach

		<hr class="endItem">

	</div>
	
@stop