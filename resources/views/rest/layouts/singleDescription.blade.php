<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $title or 'Rest' }}</title>
    <meta charset="utf-8">
    <meta name = "format-detection" content = "telephone=no" />
    {{--<link rel="icon" href="{{asset(env('THEME'))}}/images/favicon.ico">--}}
    {{--<link rel="shortcut icon" href="{{asset(env('THEME'))}}/images/favicon.ico" />--}}
    {{--<link rel="stylesheet" href="{{asset(env('THEME'))}}/css/stuck.css">--}}
    {{--<link rel="stylesheet" href="{{asset(env('THEME'))}}/css/style.css">--}}


    {{--<script src="{{asset(env('THEME'))}}/js/jquery.js"></script>--}}
    {{--<script src="{{asset(env('THEME'))}}/js/jquery-migrate-1.1.1.js"></script>--}}
    {{--<script src="{{asset(env('THEME'))}}/js/script.js"></script>--}}
    {{--<script src="{{asset(env('THEME'))}}/js/superfish.js"></script>--}}
    {{--<script src="{{asset(env('THEME'))}}/js/jquery.equalheights.js"></script>--}}
    {{--<script src="{{asset(env('THEME'))}}/js/jquery.mobilemenu.js"></script>--}}
    {{--<script src="{{asset(env('THEME'))}}/js/jquery.easing.1.3.js"></script>--}}
    {{--<script src="{{asset(env('THEME'))}}/js/tmStickUp.js"></script>--}}
    {{--<script src="{{asset(env('THEME'))}}/js/jquery.ui.totop.js"></script>--}}
    <link rel="shortcut icon" href="{{asset(env('THEME'))}}/images/star.png" type="image/png">
    {{--<link rel="shortcut icon" href="{{asset(env('THEME'))}}/images/favicon.ico" />--}}
    <link href="{{asset(env('THEME'))}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />


    <link rel="stylesheet" href="{{asset(env('THEME'))}}/css/stuck.css" />
    <link rel="stylesheet" href="{{asset(env('THEME'))}}/css/style.css" />
    <link rel="stylesheet" href="{{asset(env('THEME'))}}/css/touchTouch.css" />
    {{--<script>--}}
        {{--$(document).ready(function(){--}}

            {{--$().UItoTop({ easingType: 'easeOutQuart' });--}}
            {{--$('#stuck_container').tmStickUp({});--}}

        {{--});--}}
    {{--</script>--}}
    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <script src="{{asset(env('THEME'))}}/js/html5shiv.js"></script>
    <link rel="stylesheet" media="screen" href="css/ie.css">


    <![endif]-->
</head>

<body>
<!--==============================
              header
=================================-->
<header>
    <!--==============================
                Stuck menu
    =================================-->
    <section id="stuck_container">
        <div class="container">
            <div class="row">
                <div class="grid_12">
                    <h1>
                        <a href="index.html">
                            <img src="{{asset(env('THEME'))}}/images/logo.png" alt="Logo alt">
                        </a>
                    </h1>
                    <div class="navigation ">
                        {{--<nav>--}}
                            {{--<ul class="sf-menu">--}}
                                {{--<li><a href="index.html">home</a></li>--}}
                                {{--<li><a href="index-1.html">menu</a></li>--}}
                                {{--<li><a href="index-2.html">reservation</a></li>--}}
                                {{--<li class="current"><a href="index-3.html">blog</a></li>--}}
                                {{--<li><a href="index-4.html">contacts</a></li>--}}
                            {{--</ul>--}}
                        {{--</nav>--}}
                        <nav>
                            <ul class="sf-menu">
                                @if(Auth::check())
                                    <li><a href="{{ route('reserve.index') }}" onclick="getReserve(); return false;">Карта заказов</a></li>
                                    <li><a href="logout">Выйти из кабинета</a></li>
                                @else
                                    <li><a href="login">Войти на кабинет</a></li>
                                @endif
                                <li><a href="/">home</a></li>
                                <li class="current"><a href="#">menu</a></li>
                                <li><a href="#">reservation</a></li>
                                <li><a href="#">contacts</a></li>
                            </ul>
                        </nav>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>

<!--=====================
          Content
======================-->
<section class="content"><div class="ic">More Website Templates @ TemplateMonster.com - July 30, 2014!</div>
    <div class="container">
        @yield('item');
    </div>
</section>
<!--==============================
              footer
=================================-->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <div class="socials">
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-pinterest"></a>
                </div>
                <div class="copyright"><span class="brand">Bliss </span> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a> <div>Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Modal Begin -->
<div class="modal fade" id="reserve" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Заказ</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Продолжить заказ</button>
                <a href="{{ route('reserveOrder') }}" type="button" class="btn btn-primary">Оформить заказ</a>
                <button type="button" class="btn btn-danger" ><a id="reserveClear" href="{{route( 'reserveClear')}}" onclick="clearReserve(); return false;">Очистить заказ</a></button>

            </div>
        </div>
    </div>
</div>
<!-- Modal End -->
<script src="{{asset(env('THEME'))}}/js/jquery-1.11.0.min.js"></script>
<script src="{{asset(env('THEME'))}}/js/bootstrap.min.js"></script>

<script src="{{asset(env('THEME'))}}/js/myscript.js"></script>
</body>
</html>

