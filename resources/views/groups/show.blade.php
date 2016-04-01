@extends('admin.home')

@section('title', 'Display Group')

@section('page-content')
    <div class="col-xs-12">
        <div id="content-wrapper" class="container">
            <section class="col-sm-12">
                <div class="section-header">
                    <h1>Showing Group</h1>
                 </div>
            </section>
            <section class="col-sm-12">
                <a id="btn_style" href="{{url('admin/group')}}" class='btn btn-primary btn-sm'>BACK</a><br>
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

                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        @if (Session::has('success'))
                            <div class='alert alert-success'>{{ Session::get('success') }}</div>
                        @endif
                    </div>
                </div>

                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Name</th>
                        <td>{{ $role->name }}</td>
                    </tr>
                    <tr>
                        <th>Slug</th>
                        <td>{{ $role->slug }}</td>
                    </tr>
                </table>
             </section>
        </div>
    </div>
@endsection