@extends('admin.home')

@section('title', 'Create User')

@section('page-content')
    <div class="col-xs-12">
        <div id="content-wrapper" class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="section-header">
                        <h1>Create User</h1></br>
                    </div>
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
            {!! Form::open(array('url' => 'admin/user', 'method'=>'post')) !!}
                @include('partials.user-form')
                <div class="form-group row">
                    <div class="col-xs-12 text-right">
                        {!! Form::submit('CREATE', array('class' => 'btn btn-primary btn-sm')) !!}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection