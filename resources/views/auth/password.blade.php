<!-- resources/views/auth/password.blade.php -->
@extends('master')
@section('page-content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form method="POST" action="/password/email">
                {!! csrf_field() !!}
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email', old('email', ''), array('class' => 'form-control no-border-radius', 'autocomplete' => 'off')) !!}
                </div>

                <div class="form-group text-center">
                    {!! Form::submit('Send Password Reset Link', array('class' => 'btn btn-primary')) !!}
                </div>
            </form>
        </div>
    </div>
@endsection
