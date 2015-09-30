<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('page-title')</title>

    @section('page-header')
      <link rel="stylesheet" href="{{ url('css/all.css') }}">
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    @show
  </head>
  <body>
    <!-- The content area seciton comes here -->
    <div class="container" id="page-wrapper"> 
      @yield('page-content')
    </div>
    <!-- The content area seciton comes here -->
    @section('page-footer')
      <script src="{{ url('js/all.js') }}"></script>
    @show
  </body>
</html>