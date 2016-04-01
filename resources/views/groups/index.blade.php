@extends('admin.home')

@section('title', 'Group List')

@section('page-content')
	<div class="col-xs-12">
		<div id="content-wrapper" class="container">
			<section class="col-sm-12">
				<div class="section-header">
					<h1>Group List</h1><br>
				</div>
				<a id="btn_style" href="{{url('admin/group/create')}}" class='btn btn-primary btn-sm'>Create New Group</a>
			</section>
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
			<section class="col-xs-12 table-responsive">
				<div class="panel panel-default row">
					<!-- Table -->
					<table class="table table-striped table-bordered">
						<!-- start if here -->
						@if(count($role)>0)
							<tr>
								<th class="text-center">
									<label id="select_all">
										{!! Form::checkbox('check_all_groups', 'value', null, ['id' => 'check_all_groups'])!!}
										SELECT ALL
									</label>
								</th>
								<th class="text-center">Name</th>
								<th class="text-center">Slug</th>
								<th></th>
							</tr>
							<!-- Started Loop for fetching records from DB (for loop) -->
							@foreach($role as $data => $value)
							<tr>
								<td class="text-center">
									<!-- checkbox to each group (to select the purticular records -->
									{!! Form::checkbox('group_list[]', $value->id, null, ['class' => 'group_list'])!!}
								</td>
								<td>{{ $value->name }}</td>
								<td>{{ $value->slug }}</td>

								<!-- we will also add show, edit, and delete buttons -->
								<td>
									<!-- show the group (uses the show method found at GET /group/{id} -->
									<a class="btn btn-small btn-primary btn-sm" href="{{ URL::to('admin/group/'.$value->id) }}">Show</a>

									<!-- edit this group (uses the edit method found at GET /group/{id}/edit -->
									<a class="btn btn-small btn-info btn-sm" href="{{ URL::to('admin/group/'.$value->id.'/edit') }}">Edit</a>

									<!-- delete the group (uses the destroy method DESTROY /group/{id} -->
									{!! Form::open(array('class' => 'inline_form','method'=>'DELETE','url' =>'admin/group/'.$value->id)) !!}
										{!! Form::submit('Delete', array('class' => 'btn btn-small btn-warning btn-sm')) !!}
									{!!  Form::close() !!}
								</td>
							</tr>
							@endforeach
							<!-- endfor loop -->
							<tr>
								<td colspan="4">
									{!! Form::open(array('method'=>'POST', 'url' =>'admin/group/delete-all','id' => 'delete_wrapper_form')) !!}
										{!! Form::submit('Delete All', array('class' => 'btn btn-small btn-warning btn-sm', 'id' => 'delete_all')) !!}
									{!!  Form::close() !!}
								</td>
							</tr>
						@else<!-- else if here -->
						<!-- put a tr with a message called "Sorry no records found!" -->
							<tr><h4 class="text-center">"Sorry no records found!"</h4></tr>
						@endif<!-- end if here -->
					</table>
				</div>
			</section>
		</div>
	</div>
@endsection
@section('footer')
@parent
<script src="{{ url('js/groups/index.js') }}"></script>
@endsection