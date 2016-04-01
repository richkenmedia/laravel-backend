@extends('frontend-master')

@section('title', '404!')

@section('header')
    @parent
    <link rel="stylesheet" href="{{ url('css/frontend/home.css') }}">
@endsection
@section('page-content')
    <div class="col-xs-12">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 margin-top-30">
                    <h1 class="text-center font-extra-large">503</h1>
                    <p class="text-lato-hairline text-center">Be right back!</p>
                </div>
            </div>
        </div>
    </div>
@endsection