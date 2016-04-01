@extends('admin.home')

@section('title', 'Edit Group')

@section('page-content')
	<div class="col-xs-12">
		<div id="content-wrapper" class="container">
			<div class="section-header">
			<h1>Edit Group</h1>
			</div>
			{!! Form::open(array('method'=>'PUT','url' =>'admin/group/'.$id)) !!}
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

				<div class="form-group row">
					<div class="col-md-2 col-xs-12">
						{!! Form::label('name', 'Name') !!}
					</div>
					<div class="col-md-10 col-xs-12">
						{!! Form::text('name', $role->name, array('class' => 'form-control','autocomplete' => 'off')) !!}
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-2 col-xs-12">
						{!! Form::label('slug', 'Slug') !!}
					</div>
					<div class="col-md-10 col-xs-12">
						{!! Form::text('slug', $role->slug, array('class' => 'form-control','autocomplete' => 'off')) !!}
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