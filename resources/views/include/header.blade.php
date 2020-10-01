<header id="navigation">
    <div class="navbar navbar-expand-lg" role="banner">
        <div class="container">
            <a class="secondary-logo" href="/">
                <img class="img-fluid fixed-logo2" src="/images/logo-top.png" alt="logo">
            </a>
        </div>
        <div class="topbar">
            <div class="container">
                <div id="topbar" class="navbar-header">
                    <a class="navbar-brand" href="/">
                        <img class="main-logo img-fluid fixed-logo " src="/images/logo.png" alt="logo">
                    </a>
                    <div id="topbar-right">
                        {{--<div class="dropdown language-dropdown">
                            <a data-toggle="dropdown" href="#"><span class="change-text">En</span> <i
                                        class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu language-change">
                                <li><a href="#">EN</a></li>
                                <li><a href="#">BN</a></li>
                            </ul>
                        </div>--}}
                        <div id="date-time"></div>
                        {{--<div id="weather">
                            <span class="weather-icon">
                            <img src="/theme/images/others/weather.png" alt="Icon" class="img-fluid">
                            </span>
                            <span class="temp"></span>
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>


        <div id="menubar">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu"
                        aria-controls="mainmenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fa fa-align-justify"></i></span>
                </button>
                <a class="navbar-brand d-lg-none" href="/">
                    <img class="main-logo img-fluid fixed-logo" src="/images/logo.png" alt="logo">
                </a>
                <nav id="mainmenu" class="navbar-left collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="health"><a href="/">হোম</a></li>

                        <li class="business dropdown"><a href="javascript:void(0);" class="dropdown-toggle"
                                                         data-toggle="dropdown">বিনোদন <i class="fa fa-caret-down nav-font"></i></a>
                            <ul class="dropdown-menu">
                                @foreach(getNavbar(1) as $res)
                                    <li><a href="/topic/{{strtolower($res->category_en)}}">{{$res->category_bn}}</a></li>

                                @endforeach
                            </ul>
                        </li>

                        <li class="health"><a href="/topic/gossip">গসিপ</a></li>

                        <li class="business dropdown"><a href="javascript:void(0);" class="dropdown-toggle"
                                                         data-toggle="dropdown">লাইফস্টাইল <i class="fa fa-caret-down nav-font"></i></a>
                            <ul class="dropdown-menu">
                                @foreach(getNavbar(3) as $res)
                                    <li><a href="/topic/{{strtolower($res->category_en)}}">{{$res->category_bn}}</a></li>

                                @endforeach
                            </ul>
                        </li>
                        <li class="health"><a href="/topic/social-media-pick">সোশ্যাল মিডিয়া পিক</a></li>
                        <li class="health"><a href="/topic/top-ten">টপ টেন</a></li>
                        <li class="business dropdown"><a href="javascript:void(0);" class="dropdown-toggle"
                                                         data-toggle="dropdown">খেলাধুলা <i class="fa fa-caret-down nav-font"></i></a>
                            <ul class="dropdown-menu">
                                @foreach(getNavbar(6) as $res)
                                    <li><a href="/topic/{{strtolower($res->category_en)}}">{{$res->category_bn}}</a></li>

                                @endforeach
                            </ul>
                        </li>
                        <li class="business dropdown"><a href="javascript:void(0);" class="dropdown-toggle"
                                                         data-toggle="dropdown">আরো <i class="fa fa-caret-down nav-font"></i></a>
                            <ul class="dropdown-menu">
                                @foreach(getNavbar(7) as $res)
                                    <li><a href="/topic/{{strtolower($res->category_en)}}">{{$res->category_bn}}</a></li>

                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="searchNlogin">
                    <ul>
                        <li class="search-icon"><i class="fa fa-search"></i></li>
                    </ul>
                    <div class="search">
                        <form action="/search" method="get" role="form">
                            <input type="text" class="search-form" autocomplete="off" name="query" placeholder="Type & Press Enter">
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


</header>