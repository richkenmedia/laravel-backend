@extends('admin.home')

@section('title', 'Display User')

@section('page-content')
    <div class="col-xs-12">
        <div id="content-wrapper" class="container">
            <section class="col-sm-12">
                <div class="section-header">
                    <h1>Showing User {{ $user->name }}</h1><br>
                </div>
                 <a id="btn_style" href="{{url('admin/user')}}" class='btn btn-primary btn-sm'>BACK</a>
            </section>
            <section class="col-sm-12">
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
                <div class="col-xs-12 col-md-12">
                    @if (Session::has('success'))
                        <div class='alert alert-success'>{{ Session::get('success') }}</div>
                    @endif
                </div>
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>First Name</th>
                        <td>{{ $user->first_name }}</td>
                    </tr>
                    <tr>
                        <th>Last Name</th>
                        <td>{{ $user->last_name }}</td>
                    </tr>
                    <tr>
                        <th>User Name</th>
                        <td>{{ $user->username }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                </table>
            </section>
        </div>
    </div>
@endsection