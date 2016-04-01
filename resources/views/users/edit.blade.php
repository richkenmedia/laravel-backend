@extends('admin.home')

@section('title', 'Edit User')

@section('page-content')
	<div class="col-xs-12">
		<div id="content-wrapper" class="container">
			<div class="section-header">
				<h1>Edit User</h1></br>
			</div>
			{!! Form::open(array('url' => 'admin/user/'.$id, 'method'=>'put')) !!}
				<div class="row">
					<div class="col-xs-12 col-md-12">
						@if (count($errors) > 0)
							<div class="alert alert-danger">
								@foreach ($errors->all() as $error)
									<p>{{ $error }}</p>
								@endforeach
							</div>
						@endif
					</div>
				</div>
				<div id="success" class="col-xs-12 col-md-12">
					@if (Session::has('success'))
						<div class='alert alert-success'>{{ Session::get('success') }}</div>
					@endif
				</div>
				<div class="form-group row">
					<div class="col-xs-12 col-md-2">
						{!! Form::label('firstname', 'First Name') !!}
					</div>
					<div class="col-xs-12 col-md-10">
						{!! Form::text('firstname', $user->first_name , array('class' => 'form-control', 'autocomplete' => 'off')) !!}
					</div>
				</div>
				<div class="form-group row">
					<div class="col-xs-12 col-md-2">
						{!! Form::label('lastname', 'Last Name') !!}
					</div>
					<div class="col-xs-12 col-md-10">
						{!! Form::text('lastname', $user->last_name, array('class' => 'form-control', 'autocomplete' => 'off')) !!}
					</div>
				</div>
				<div class="form-group row">
					<div class="col-xs-12 col-md-2">
						{!! Form::label('username', 'User Name') !!}
					</div>
					<div class="col-xs-12 col-md-10">
						{!! Form::text('username', $user->username, array('class' => 'form-control', 'autocomplete' => 'off')) !!}
					</div>
				</div>
				<div class="form-group row">
					<div class="col-xs-12 col-md-2">
						{!! Form::label('email', 'Email') !!}
					</div>
					<div class="col-xs-12 col-md-10">
						{!! Form::text('email', $user->email, array('class' => 'form-control', 'autocomplete' => 'off')) !!}
					</div>
				</div>
				<div class="form-group row">
					<div class="col-xs-12 col-md-2">
						{!! Form::label('password', 'Password') !!}
					</div>
					<div class="col-xs-12 col-md-10">
						{!! Form::password('password', array('class' => 'form-control', 'autocomplete' => 'off')) !!}
					</div>
				</div>
				<div class="form-group row">
					<div class="col-xs-12 col-md-2">
						{!! Form::label('retype_password', 'Retype Password') !!}
					</div>
					<div class="col-xs-12 col-md-10">
						{!! Form::password('retype_password', array('class' => 'form-control', 'autocomplete' => 'off')) !!}
					</div>
				</div>
				<div class="form-group row">
					<div class="col-xs-12 text-right">
						{!! Form::submit('UPDATE', array('class' => 'btn btn-primary btn-sm')) !!}
					</div>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection