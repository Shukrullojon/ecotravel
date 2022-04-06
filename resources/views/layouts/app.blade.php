<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('template/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{ asset('template/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('template/css/templatemo_misc.css')}}">
    <link rel="stylesheet" href="{{ asset('template/css/templatemo_style.css')}}">
</head>
<body>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->

    <div class="site-header">
        <div class="container">
            <div class="main-header">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-10">
                        <div class="logo">
                            <a href="{{ route("welcome") }}">
                                <img src="{{ asset('template/images/logo.png')}}" alt="travel html5 template" title="travel html5 template">
                            </a>
                        </div> <!-- /.logo -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-8 col-sm-6 col-xs-2">
                        <div class="main-menu">
                            <ul class="visible-lg visible-md">
                                <li><a href="{{ route("service") }}">Tours</a></li>
                                <li><a href="{{ route("gallery") }}">Gallery</a></li>
                                <li><a href="{{ route("about") }}">Biz haqimizda</a></li>
                                <li><a href="{{ route("contact") }}">Aloqa</a></li>
                            </ul>
                            <a href="#" class="toggle-menu visible-sm visible-xs">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div> <!-- /.main-menu -->
                    </div> <!-- /.col-md-8 -->
                </div> <!-- /.row -->
            </div> <!-- /.main-header -->
            <div class="row">
                <div class="col-md-12 visible-sm visible-xs">
                    <div class="menu-responsive">
                        <ul>
                            <li class="active"><a href="index.html">Home</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="events.html">Events</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div> <!-- /.menu-responsive -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.site-header -->

    @yield('content')

    <div class="partner-list">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="partner-item">
                        <img src="{{ asset('template/images/partners/partner1.png')}}" alt="">
                    </div> <!-- /.partner-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="partner-item">
                        <img src="{{ asset('template/images/partners/partner2.png')}}" alt="">
                    </div> <!-- /.partner-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="partner-item">
                        <img src="{{ asset('template/images/partners/partner3.png')}}" alt="">
                    </div> <!-- /.partner-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="partner-item">
                        <img src="{{ asset('template/images/partners/partner1.png')}}" alt="">
                    </div> <!-- /.partner-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="partner-item">
                        <img src="{{ asset('template/images/partners/partner2.png')}}" alt="">
                    </div> <!-- /.partner-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="partner-item last">
                        <img src="{{ asset('template/images/partners/partner3.png')}}" alt="">
                    </div> <!-- /.partner-item -->
                </div> <!-- /.col-md-2 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.partner-list -->

    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="footer-logo">
                        <a href="index.html">
                            <img src="{{ asset('template/images/logo.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="copyright">
                            <span>
                                Copyright &copy; 2014 <a href="#">Company Name</a>
                            </span>
                    </div>
                </div> <!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-4">
                    <ul class="social-icons">
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-linkedin"></a></li>
                        <li><a href="#" class="fa fa-flickr"></a></li>
                        <li><a href="#" class="fa fa-rss"></a></li>
                    </ul>
                </div> <!-- /.col-md-4 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

<script src="{{ asset('template/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js')}}"></script>
<script src="{{ asset('template/js/vendor/jquery-1.11.0.min.js')}}"></script>
<script>window.jQuery || document.write('<script src="{{ asset('template/js/vendor/jquery-1.11.0.min.js')}}"><\/script>')</script>
<script src="{{ asset('template/js/bootstrap.js')}}"></script>
<script src="{{ asset('template/js/plugins.js')}}"></script>
<script src="{{ asset('template/js/main.js')}}"></script>
</body>
</html>
