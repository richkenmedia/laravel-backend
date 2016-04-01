@extends('frontend-master')

@section('title', 'Home Page')

@section('header')
	@parent
	<link rel="stylesheet" href="{{ url('css/frontend/home.css') }}">
@endsection
@section('page-content')
	<div class="col-xs-12">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 margin-top-30">
					<h1 class="text-center font-large">HOME</h1>
					<p class="text-lato-hairline text-center">This will be your site's public area.</p>
				</div>
			</div>
		</div>
	</div>
@endsection