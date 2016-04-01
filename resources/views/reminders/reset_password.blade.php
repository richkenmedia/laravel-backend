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
							@if (Session::has('message'))
								<div class='alert alert-danger'>{{ Session::get('message') }}</div>
							@endif
						{!! Form::open(array('url' => 'forgot_password',  'method' => 'post' )) !!}
							<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}">-->
							<div class="form-group">
								{!! Form::label('email', 'Email') !!}
								{!! Form::text('email', '', array('class' => 'form-control' )) !!}

							</div>



							<div class="form-group text-right">
									{!!Form::submit('Send Mail',array('class' => 'btn btn-info')) !!}
							</div>

						{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection

