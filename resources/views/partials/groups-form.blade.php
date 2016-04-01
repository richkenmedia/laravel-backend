	<div class="row">
	  	<div class="col-xs-12 col-md-12">
		  	@if (Session::has('message'))
		    	<div class='alert alert-warning'>{{ Session::get('message') }}</div>
		   	@endif
	 	</div>
 	</div>
	<div class="form-group row">
		<div class="col-md-2 col-xs-12">
			{!! Form::label('name', 'Name') !!}
		</div>
		<div class="col-md-10 col-xs-12">
			{!! Form::text('name', '', array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-2 col-xs-12">
			{!! Form::label('slug', 'Slug') !!}
		</div>
		<div class="col-md-10 col-xs-12">
			{!! Form::text('slug', '', array('class' => 'form-control')) !!}
		</div>
	</div>
	