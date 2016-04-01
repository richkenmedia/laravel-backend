@extends('frontend-master')

@section('title', 'Reset Password')

@section('header')
	@parent
	<link rel="stylesheet" href="{{ url('css/users/login.css') }}">
@endsection

@section('content')
	<div class="col-xs-12">
		<div id="content-wrapper" class="container">
			<div class="row">
				<h1 class="text-center text-white text-lato-hairline">Reset Password</h1>
				<div id="box-wrapper" class="col-xs-12 col-md-4 col-md-offset-4 bordered rounded-6">
					<h1 class="text-center">
						<img src="{{ url('images/logo.png') }}" alt="Logo">
					</h1>
						<div class="container">
							<div class="row">
								<div class="col-md-12 ">
									<div class="panel panel-default">

										<div class="panel-body">
										 Please check your email for Password Reset.
										</div>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
@endsection