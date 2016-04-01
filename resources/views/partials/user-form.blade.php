<div class="row">
	<div class="col-xs-12 col-md-12">
		@if (Session::has('message'))
			<div class='alert alert-warning'>{{ Session::get('message') }}</div>
		@endif
	</div>
</div>
<div class="form-group row">
	<div class="col-xs-12 col-md-2">
		{!! Form::label('firstname', 'First Name') !!}
	</div>
	<div class="col-xs-12 col-md-10">
		{!! Form::text('firstname', '', array('class' => 'form-control')) !!}
	</div>
</div>
<div class="form-group row">
	<div class="col-xs-12 col-md-2">
		{!! Form::label('lastname', 'Last Name') !!}
	</div>
	<div class="col-xs-12 col-md-10">
		{!! Form::text('lastname', '', array('class' => 'form-control')) !!}
	</div>
</div>
<div class="form-group row">
	<div class="col-xs-12 col-md-2">
		{!! Form::label('username', 'User Name') !!}
	</div>
	<div class="col-xs-12 col-md-10">
		{!! Form::text('username', '', array('class' => 'form-control')) !!}
	</div>
</div>
<div class="form-group row">
	<div class="col-xs-12 col-md-2">
		{!! Form::label('email', 'Email') !!}
	</div>
	<div class="col-xs-12 col-md-10">
		{!! Form::text('email', '', array('class' => 'form-control')) !!}
	</div>
</div>
<div class="form-group row">
	<div class="col-xs-12 col-md-2">
		{!! Form::label('password', 'Password') !!}
	</div>
	<div class="col-xs-12 col-md-10">
		{!! Form::password('password', array('class' => 'form-control')) !!}
	</div>
</div>
<div class="form-group row">
	<div class="col-xs-12 col-md-2">
		{!! Form::label('retype_password', 'Retype Password') !!}
	</div>
	<div class="col-xs-12 col-md-10">
		{!! Form::password('retype_password', array('class' => 'form-control')) !!}
	</div>
</div>