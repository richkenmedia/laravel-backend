@extends('admin')

@section('title', 'Profile List')

@section('page-content')
    <div class="col-xs-12">
        <div id="content-wrapper" class="container">
            <section class="col-sm-12">
                <div class="section-header">
                    <h1>Profile List</h1><br>
                </div>
                <a id="btn_style" href="{{url('admin/profiles/create')}}" class='btn btn-primary btn-sm'>Create New Profile</a>
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
                        @if(count($profiles)>0)
                            <tr>
                                <th class="text-center">
                                    <label id="select_all">
                                        {!! Form::checkbox('check_all_roles', 'value', null, ['id' => 'check_all_roles'])!!}
                                        SELECT ALL
                                    </label>
                                </th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Description</th>
                                <th></th>
                            </tr>
                            <!-- Started Loop for fetching records from DB (for loop) -->
                            @foreach($profiles as $data => $value)
                            <tr>
                                <td class="text-center">
                                    <!-- checkbox to each group (to select the purticular records -->
                                    {!! Form::checkbox('roles_list[]', $value->id, null, ['class' => 'roles_list'])!!}
                                </td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->description }}</td>

                                <!-- we will also add show, edit, and delete buttons -->
                                <td>
                                    <a class="btn btn-small btn-primary btn-sm" href="{{ URL::to('admin/profiles/'.$value->id) }}">Show</a>

                                    <a class="btn btn-small btn-info btn-sm" href="{{ URL::to('admin/profiles/'.$value->id.'/edit') }}">Edit</a>

                                    {!! Form::open(array('class' => 'inline_form','method'=>'DELETE','url' =>'admin/profiles/'.$value->id)) !!}
                                        {!! Form::submit('Delete', array('class' => 'btn btn-small btn-warning btn-sm')) !!}
                                    {!!  Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                            <!-- endfor loop -->
                            <tr>
                                <td colspan="4">
                                    {!! Form::open(array('method'=>'POST', 'url' =>'admin/profiles/delete-all','id' => 'delete_wrapper_form')) !!}
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
