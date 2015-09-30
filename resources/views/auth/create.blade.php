@extends('master')

@section('page-title', 'Create New  User Here')

@section('page-content')
	<div class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4">
			<h1>Create New User</h1>
			{!! Form::open(array('route' => 'auth.store')) !!}
				<div class="form-group">
					{!! Form::label('username', 'User Name') !!}
					{!! Form::text('username', '', array('class' => 'form-control')) !!}
				</div>
				<div class="form-group">
					{!! Form::label('password', 'Password') !!}
					{!! Form::password('password', array('class' => 'form-control')) !!}
				</div>
				<div class="form-group">
					{!! Form::label('retype-password', 'Retype Password') !!}
					{!! Form::password('retype-password', array('class' => 'form-control')) !!}
				</div>
				<div class="form-group">
					{!! Form::submit('Create', array('class' => 'btn btn-info')) !!}
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection