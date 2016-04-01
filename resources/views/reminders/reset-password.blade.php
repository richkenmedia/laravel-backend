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
						@if (count($errors) > 0)
								<div class="alert alert-danger">
									@foreach ($errors->all() as $error)
										<p>{{ $error }}</p>
									@endforeach
								</div>
							@endif

						{!! Form::open(array('url' => 'user/forgot-password',  'method' => 'post' )) !!}
							<div class="form-group">
								{!! Form::label('email', 'Email') !!}
								{!! Form::text('email', '', array('class' => 'form-control', 'autocomplete' => 'off' )) !!}
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

