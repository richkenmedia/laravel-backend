@extends('master')

@section('page-title', 'Login Here')

@section('page-content')
	<div class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4">
			{!! Form::open(array('route' => 'auth.login')) !!}
				<div class="form-group">
					{!! Form::label('username', 'User Name') !!}
					{!! Form::text('username', '', array('class' => 'form-control')) !!}
				</div>
				<div class="form-group">
					{!! Form::label('password', 'Password') !!}
					{!! Form::password('password', array('class' => 'form-control')) !!}
				</div>
				<div class="form-group">
					{!! Form::submit('Login', array('class' => 'btn btn-info')) !!}
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection