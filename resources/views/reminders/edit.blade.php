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


							{!! Form::open(array('url' => 'user/password-reset',  'method' => 'post' )) !!}


								{!! Form::hidden('id', $id) !!}
								{!! Form::hidden('code', $code) !!}
							<div class="form-group">
									{!! Form::label('password', 'Password') !!}
									{!! Form::password('password', array('placeholder'=>'new password',  'class' => 'form-control', 'autocomplete' => 'off')) !!}
								</div>

							<div class="form-group">
									{!! Form::label('password_confirmation', 'Password Confirmation') !!}
									{!! Form::password('password_confirmation', array('placeholder'=>'new password confirmation', 'class' => 'form-control', 'autocomplete' => 'off')) !!}
							</div>

							<div class="form-group">
									{!! Form::submit('Reset Password',array('class' => 'btn btn-info')) !!}
							</div>

						{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection	