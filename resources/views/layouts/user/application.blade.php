{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<title>@yield('title', config('site.name', ''))</title>--}}
    {{--<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">--}}
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">--}}
    {{--@include('layouts.user.metadata')--}}
    {{--@include('layouts.user.styles')--}}
    {{--@section('styles')--}}
    {{--@show--}}
    {{--<meta name="csrf-token" content="{!! csrf_token() !!}">--}}
{{--</head>--}}
{{--<body class="{!! isset($bodyClasses) ? $bodyClasses : '' !!}">--}}
{{--@if( isset($noFrame) && $noFrame == true )--}}
{{--@yield('content')--}}
{{--@else--}}
{{--@include('layouts.user.frame')--}}
{{--@endif--}}
{{--@include('layouts.user.scripts')--}}
{{--@section('scripts')--}}
{{--@show--}}
{{--</body>--}}
{{--</html>--}}

        <!DOCTYPE html>
<!-- Template by Quackit.com -->
<!-- Images by various sources under the Creative Commons CC0 license and/or the Creative Commons Zero license.
Although you can use them, for a more unique website, replace these images with your own. -->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Spectrometer</title>

    <!-- Bootstrap Core CSS -->
    {{--<link href="css/bootstrap.min.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="../static/user/css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom Fonts from Google -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>
<!-- Navigation -->
<nav id="siteNav" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Logo and responsive toggle -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <span class="glyphicon glyphicon-fire"></span>
                LOGO
            </a>
        </div>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/upload">Upload NIR study</a>
                </li>
                <li>
                    <a href="/uploadfile">Upload Files </a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
                @if(\Illuminate\Support\Facades\Auth::check())
                <li>
                    <a href="{{ url('/logout') }}"> Log out </a>
                </li>
                    @endif
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>
@yield('content')


<footer class="page-footer">

    <!-- Contact Us -->
    <div class="contact">
        <div class="container">
            <p class="section-heading">Contact Us</p>
            <p><span class="glyphicon glyphicon-envelope"></span><br> info@example.com</p>
        </div>
    </div>
</footer>
@section('scripts')
<!-- jQuery -->
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>

<!-- Custom Javascript -->
<script></script>

</body>

</html>
