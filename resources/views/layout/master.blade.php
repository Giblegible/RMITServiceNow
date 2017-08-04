<html>
<head>
    <title> RMIT Service Now: @yield('title') </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Page Title & Icon -->
    <title>RMIT Service Now</title>
    <link rel="icon" href="{{URL::asset('images/rmitlogo.jpg')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ URL::asset('css/FontAwesome/css/font-awesome.min.css') }}">

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/business-frontpage.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}" type="text/css">

    <!-- jQuery -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
@include('includes.nav')
@yield('content')
</body>
@include('includes.footer')
<script src="{{ URL::asset('js/myFunctions.js') }}" type="text/javascript"></script>
</html>