<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    {{--    For Facebook--}}
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:site_name" content="Dhaka Gossip"/>
    <meta property="og:description" content="@yield('description')"/>

    <meta property="og:type" content="article"/>
    <!--<meta property="article:author" content="[author_link]" />-->

    {{--   <meta property="og:url" content="" />--}}

    <meta property="og:image" content="@yield('thumbnail')"/>
    <meta property="og:image:width" content="600"/>
    <meta property="og:image:height" content="315"/>

    {{--    For Facebook--}}


    <link href="/theme/css/bootstrap.min.css" rel="stylesheet">
    <!--    <link href="/theme/css/font-awesome.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/theme/css/magnific-popup.css" rel="stylesheet">
    <link href="/theme/css/owl.carousel.css" rel="stylesheet">
    <link href="/theme/css/subscribe-better.css" rel="stylesheet">
    <link href="/theme/css/main.css" rel="stylesheet">
    <link href="/theme/css/responsive.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet'
          type='text/css'>
    <!--[if lt IE 9]>
<!--    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>-->


    <link rel="shortcut icon" href="/images/logo.png">

    <link href="/theme/css/custom.css" rel="stylesheet">
    <link href="/css/font.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script>
        var app = angular.module('myApp', []);

    </script>


</head>
<body ng-app="myApp">
<div id="main-wrapper" class="homepage">
    @include('include.header')

    @yield('content')


</div>
<footer id="footer">
    <div class="footer-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="widget">
                        <ul class="nav navbar-nav">
                            <li><a href="/">Home</a></li>
                            <li><a href="/about-us">About</a></li>
                            <li><a href="/contact-us">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                {{--<div class="col-md-6">--}}
                    {{--<div class="widget">--}}
                        {{--<h5>Contact</h5>--}}
                        {{--<ul class="nav navbar-nav">--}}
                            {{--<li><a href="mailto:info@dhakagossip.com">info@dhakagossip.com</a></li>--}}
                        {{--</ul>--}}

                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
    {{--    <div class="bottom-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="widget">
                            <h2>Category</h2>
                            <ul>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Politics</a></li>
                                <li><a href="#">Sports</a></li>
                                <li><a href="#">World</a></li>
                                <li><a href="#">Technology</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">Environment</a></li>
                                <li><a href="#">Health</a></li>
                                <li><a href="#">Entertainment</a></li>
                                <li><a href="#">Lifestyle</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="widget">
                            <h2>Editions</h2>
                            <ul>
                                <li><a href="#">United States</a></li>
                                <li><a href="#">China</a></li>
                                <li><a href="#">India</a></li>
                                <li><a href="#">Maxico</a></li>
                                <li><a href="#">Middle East</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget">
                            <h2>Tag</h2>
                            <ul>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Sports</a></li>
                                <li><a href="#">Featured</a></li>
                                <li><a href="#">World</a></li>
                                <li><a href="#">Fashion</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">Environment</a></li>
                                <li><a href="#">Health</a></li>
                                <li><a href="#">Entertainment</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Business</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">Tech</a></li>
                                <li><a href="#">Movie</a></li>
                                <li><a href="#">Music</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="widget">
                            <h2>Products</h2>
                            <ul>
                                <li><a href="#">Ebook</a></li>
                                <li><a href="#">Baby Product</a></li>
                                <li><a href="#">Magazine</a></li>
                                <li><a href="#">Sports Elements</a></li>
                                <li><a href="#">Technology</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p><a href="#">DhakaGossip </a>&copy; {{date('Y')}} </p>
                </div>
                <div class="col-md-6">
                    <p class="pull-right"><a href="#">Developed By </a><a href="https://www.pixonlab.com"
                                                                          target="_BLANK">PLab</a></p>
                </div>
            </div>

        </div>
    </div>
</footer>

{{--

<div class="subscribe-me text-center">
    <h1>Don’t Miss The Hottest News</h1>
    <h2>Subscribe our Newsletter</h2>
    <a href="#close" class="sb-close-btn"><img class="img-fluid" src="/theme/images/others/close-button.png" alt="Image"/></a>
    <form action="#" method="post" id="popup-subscribe-form" name="subscribe-form">
        <div class="input-group">
            <span class="input-group-addon"><img src="/theme/images/others/icon-message.png" alt="Image"/></span>
            <input type="text" placeholder="Enter your email" name="email">
            <button type="submit" name="subscribe">Go</button>
        </div>
    </form>
</div>

--}}

<script data-cfasync="false" src="/theme/js/email-decode.min.js"></script>
<script src="/theme/js/jquery.js"></script>
<script src="/theme/js/popper.min.js"></script>
<script src="/theme/js/bootstrap.min.js"></script>
<script src="/theme/js/jquery.magnific-popup.min.js"></script>
<script src="/theme/js/owl.carousel.min.js"></script>
<script src="/theme/js/moment.min.js"></script>
<script src="/theme/js/jquery.sticky-kit.min.js"></script>
<script src="/theme/js/jquery.easy-ticker.min.js"></script>
<script src="/theme/js/jquery.subscribe-better.min.js"></script>
<script src="/theme/js/theia-sticky-sidebar.min.js"></script>
<script src="/theme/js/main.js"></script>

</body>
</html>