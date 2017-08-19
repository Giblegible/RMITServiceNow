<html>
<head>
    <title> RMIT Service Now: @yield('title') </title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="RMIT Service Now Website - Web Database Applications Assignment 1">

    <meta name="author" content="James McLennan">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}" type="text/css">

    <link href="{{URL::asset('css/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{URL::asset('css/css/font-awesome.min.css')}}" rel="stylesheet">

    <link href="{{URL::asset('css/css/animate.min.css')}}" rel="stylesheet">

    <link href="{{URL::asset('css/css/main.css')}}" rel="stylesheet">

    <link href="{{URL::asset('css/css/responsive.css')}}" rel="stylesheet">


    <!--[if lt IE 9]>

    <script src="{{URL::asset('js/html5shiv.js')}}"></script>

    <script src="{{URL::asset('js/respond.min.js')}}"></script>

    <![endif]-->

    <link rel="icon" href="{{URL::asset('images/rmitlogo.jpg')}}">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::asset('images/rmitlogo.jpg')}}">

    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::asset('images/rmitlogo.jpg')}}">

    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::asset('images/rmitlogo.jpg')}}">

    <link rel="apple-touch-icon-precomposed" href="{{URL::asset('images/rmitlogo.jpg')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ URL::asset('css/FontAwesome/css/font-awesome.min.css') }}">
</head>
@include('includes.nav')
<body>
@yield('content')
</body>
@include('includes.footer')


<script type="text/javascript" src="{{URL::asset('js/jquery.js')}}"></script>

<script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>

<script type="text/javascript" src="{{URL::asset('js/lightbox.min.js')}}"></script>

<script type="text/javascript" src="{{URL::asset('js/wow.min.js')}}"></script>

<script type="text/javascript" src="{{URL::asset('js/main.js')}}"></script>

</html>