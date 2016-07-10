@extends('admin')

@section('title', 'User List')

@section('page-content')
	<div class="col-xs-12">
		<div id="content-wrapper" class="container">
			<section class="col-sm-12">
				<div class="section-header">
					<h1>User List</h1><br>
				</div>
				<a id="btn_style" href="{{url('admin/users/create')}}" class='btn btn-primary btn-sm'>Create New User</a>
			</section>
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
			<section class="col-sm-12 table-responsive">
				<div class="panel panel-default">
					<table class="table table-striped table-bordered">
						@if(count($users)>0)
							<tr>
								<th class="text-center">
									<label id="select_all">
										<!-- checkbox to select all records -->
										{!! Form::checkbox('check_all_users', 'value', null, ['id' => 'check_all_users'])!!}
										SELECT ALL
									</label>
								</th>
								<th class="text-center">User Name</th>
								<th class="text-center">Email</th>
								<th></th>
							</tr>
							<!-- Started Loop for fetching records from DB (for loop) -->
							@foreach($users as $data => $value)
								<tr>
									<td class="text-center">
										<!-- checkbox to select the particular records -->
										{!! Form::checkbox('user_list[]', $value->id, null, ['class' => 'user_list'])!!}
									</td>
									<td>{{ $value->name }}</td>
									<td>{{ $value->email }}</td>
									<!-- we will also add show, edit, and delete buttons -->
									<td>
										<!-- show the client (uses the show method found at GET /user/{id} -->
										<a class="btn btn-small btn-primary btn-sm" href="{{ URL::to('admin/users/'.$value->id) }}">Show</a>

										<!-- edit this client (uses the edit method found at GET /user/{id}/edit -->
										<a class="btn btn-small btn-info btn-sm" href="{{ URL::to('admin/users/'.$value->id.'/edit') }}">Edit</a>

										<!-- delete the client (uses the destroy method DESTROY /user/{id} -->
										{!! Form::open(array('class' => 'inline_form','method'=>'DELETE','url' =>'admin/users/'.$value->id)) !!}
											{!! Form::submit('Delete', array('class' => 'btn btn-small btn-warning btn-sm')) !!}
										{!!  Form::close() !!}
									</td>
								</tr>
								@endforeach
								<!-- endfor loop -->
								<tr>
									<td colspan="6">
										{!! Form::open(array('method'=>'POST','url' =>'admin/users/delete-all', 'id' => 'delete_wrapper_form')) !!}
											{!! Form::submit('Delete All', array('class' => 'btn btn-small btn-warning btn-sm', 'id' => 'delete_all')) !!}
										{!!  Form::close() !!}
									</td>
								</tr>
							@else
							<tr><h4 class="text-center">Sorry!! No records found</h4></tr>
						@endif
					</table>
				</div>
			</section>
		</div>
	</div>
@endsection

@section('footer')
	@parent
	<script src="{{ url('js/users/index.js') }}"></script>
@endsection