@extends('frontend-master')

@section('title', 'SignUp Here')

@section('header')
	@parent
	<link rel="stylesheet" href="{{ url('css/users/login.css') }}">
@endsection

@section('page-content')
    <div class="col-xs-12">
        <div id="content-wrapper" class="container">
            <div class="row">
                <div id="box-wrapper" class="col-xs-12 col-md-4 col-md-offset-4 bordered bg-white no-border-radius">
                    <h1 class="text-center text-lato-hairline">SignUp</h1>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                    {!! Form::open(array('url' => 'user/signup', 'method' => 'POST')) !!}
                        <div class="form-group">
                            {!! Form::label('username', 'Username') !!}
                            {!! Form::text('username', '', array('class' => 'form-control no-border-radius' , 'autocomplete' => 'off')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email') !!}
                            {!! Form::email('email', '', array('class' => 'form-control no-border-radius' , 'autocomplete' => 'off')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('first_name', 'First Name') !!}
                            {!! Form::text('first_name', '', array('class' => 'form-control no-border-radius' , 'autocomplete' => 'off' )) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('last_name', 'Last Name') !!}
                            {!! Form::text('last_name', '', array('class' => 'form-control no-border-radius', 'autocomplete' => 'off' )) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('password', 'Password') !!}
                            {!! Form::password('password', array('class' => 'form-control no-border-radius', 'autocomplete' => 'off')) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('password_confirmation', 'Confirm Password') !!}
                            {!! Form::password('password_confirmation', array('class' => 'form-control no-border-radius', 'autocomplete' => 'off')) !!}
                        </div>

                        <div class="form-group text-right">
                            {!! Form::submit('SignUp', array('class' => 'btn btn-info no-border-radius')) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
