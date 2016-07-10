@extends('admin')

@section('title', 'Create Role')

@section('page-content')
	<div class="col-xs-12">
		<div id="content-wrapper" class="container">
			<div class="section-header">
				<h1>Create Role</h1>
			</div>
			<!-- error or success message -->
		<div class="row">
			<div class="col-xs-12 col-md-12">
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
			</div>
		</div>

			{!! Form::open(array('method'=>'post','url' => 'admin/roles')) !!}
				@include('partials.roles-form')
				<div class="form-group row">
					<div class="col-xs-12 text-right">
						{!! Form::submit('CREATE', array('class' => 'btn btn-primary btn-sm')) !!}
					</div>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection
