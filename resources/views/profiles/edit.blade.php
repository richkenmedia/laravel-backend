@extends('admin')

@section('title', 'Edit Role')

@section('page-content')
    <div class="col-xs-12">
        <div id="content-wrapper" class="container">
            <div class="section-header">
            <h1>Edit Role</h1>
            </div>
            <!-- {!! Form::open(array('method'=>'PUT','url' =>'admin/roles/'.$role->id)) !!} -->
            {!! Form::model($role, array('url' => 'admin/roles/'.$role->id, 'method' => 'put')) !!}
                @include('partials.roles-form')
                <div class="form-group row">
                    <div class="col-xs-12 text-right">
                        {!! Form::submit('UPDATE', array('class' => 'btn btn-primary btn-sm')) !!}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
