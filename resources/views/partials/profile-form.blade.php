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
		{!! Form::label('company_name', 'Company Name') !!}
	</div>
	<div class="col-xs-12 col-md-10">
		{!! Form::text('company_name', '', array('class' => 'form-control')) !!}
	</div>
</div>
<div class="form-group row">
	<div class="col-xs-12 col-md-2">
		{!! Form::label('primary_domain', 'Primary Domain') !!}
	</div>
	<div class="col-xs-12 col-md-10">
		{!! Form::text('primary_domain', '', array('class' => 'form-control')) !!}
	</div>
</div>
