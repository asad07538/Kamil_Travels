<!-- <!doctype html> -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->
    <!-- Styles -->
    <!-- <link href="{{ asset('my/my.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('my/navigation.css') }}" rel="stylesheet"> -->

    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap') }}">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('MDB-Free/css/bootstrap.min.css') }}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{ asset('MDB-Free/css/mdb.min.css') }}">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{ asset('MDB-Free/css/style.css') }}">
    <!-- sidebar css -->
    <link rel="stylesheet" href="{{ asset('sidebar/style.css') }}">

    <script src="https://use.fontawesome.com/3708050083.js"></script>

    <style type="text/css">
      .left-border{
        margin-left: 2px;
        border-left: 2px solid black;
      }
    </style>
</head>
<body>
        @yield('contents')

  <!-- jQuery -->
  <script type="text/javascript" src="{{ asset('MDB-Free/js/jquery.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('MDB-Free/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('MDB-Free/js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('MDB-Free/js/mdb.min.js')}}"></script>
  <!-- sidebar js -->
    <script src="{{ asset('sidebar/main.js') }}"></script>
</body>
</html>
