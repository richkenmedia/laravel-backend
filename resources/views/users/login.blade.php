@extends('frontend-master')

@section('title', 'Login Here')

@section('header')
	@parent
	<link rel="stylesheet" href="{{ url('css/users/login.css') }}">
@endsection

@section('page-content')
	<div class="col-xs-12">
		<div id="content-wrapper" class="container">
			<div class="row">
				<div id="box-wrapper" class="col-xs-12 col-md-4 col-md-offset-4 bordered bg-white">
					<h1 class="text-center text-lato-hairline">LOGIN</h1>
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							@foreach ($errors->all() as $error)
								<p>{{ $error }}</p>
							@endforeach
						</div>
					@endif
					<div id="success">
						@if (Session::has('success'))
							<div class='alert alert-success'>{{ Session::get('success') }}</div>
						@endif
					</div>


					{!! Form::open(array('url' => 'user/login', 'method' => 'POST')) !!}
						<div class="form-group">
							{!! Form::label('login', 'Login Name') !!}
							{!! Form::text('login', old('login', ''), array('class' => 'form-control no-border-radius', 'autocomplete' => 'off')) !!}
						</div>
						<div class="form-group">
							{!! Form::label('password', 'Password') !!}
							{!! Form::password('password', array('class' => 'form-control no-border-radius', 'autocomplete' => 'off')) !!}
						</div>
						<div class="form-group">
							<label>
								{!! Form::checkbox('remember', 'true')!!}
								Remember Password
							</label>
						</div>

						<div class="row">
							<div class="form-group col-md-6 col-xs-12">
								<a class="btn btn-link " href="{{ url('user/forgot-password') }}">Forgot Your Password?</a>
							</div>
							<div class=" form-group col-md-6  col-xs-12 text-right">
								{!! Form::submit('Login', array('class' => 'btn btn-info no-border-radius')) !!}
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection