<!-- resources/views/auth/login.blade.php -->
@extends('master')
@section('page-content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            {!! Form::open(array('url' => 'auth/login', 'method' => 'POST')) !!}
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                <div class="form-group">
                    {!! Form::text('email', old('email', ''), array('class' => 'form-control no-border-radius', 'autocomplete' => 'off', 'placeholder' => 'Login Email')) !!}
                </div>
                <div class="form-group">
                    {!! Form::password('password', array('class' => 'form-control no-border-radius', 'autocomplete' => 'off', 'placeholder' => 'Password')) !!}
                </div>
                <div class="form-group">
                    <label>
                        {!! Form::checkbox('remember', 'true')!!}
                        Remember Password
                    </label>
                </div>
                <div class=" form-group text-right">
                    {!! Form::submit('Login', array('class' => 'btn btn-standard')) !!}
                </div>
                <p class="text-center">
                    <a href="{{ url('password/email') }}">Forgot Your Password?</a>
                </p>
            {!! Form::close() !!}
        </div>
    </div>
@endsection