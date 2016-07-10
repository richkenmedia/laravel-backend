<!-- resources/views/auth/register.blade.php -->
@extends('master')
@section('page-content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            {!! Form::open(array('url' => '/auth/register', 'method' => 'POST')) !!}
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <div class="form-group">
                    {!! Form::text('name', old('name', ''), array('class' => 'form-control', 'autocomplete' => 'off', 'placeholder'=>'Name')) !!}
                </div>

                <div class="form-group">
                    {!! Form::text('email', old('email', ''), array('class' => 'form-control', 'autocomplete' => 'off', 'placeholder'=>'Email')) !!}
                </div>
                <div class="form-group">
                    {!! Form::password('password', array('class' => 'form-control', 'autocomplete' => 'off', 'placeholder'=>'Password')) !!}
                </div>
                <div class="form-group">
                    {!! Form::password('password_confirmation', array('class' => 'form-control', 'autocomplete' => 'off', 'placeholder'=>'Confirm Password')) !!}
                </div>
                <div class="form-group text-center">
                    {!! Form::submit('Send Password Reset Link', array('class' => 'btn btn-primary')) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection