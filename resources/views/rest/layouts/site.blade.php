<!DOCTYPE html>
<html lang="en">
<head>
    <title>Menu</title>
    <meta charset="utf-8">
    <meta name = "format-detection" content = "telephone=no" />
    <link rel="icon" href="{{asset(env('THEME'))}}/images/favicon.ico">
    <link rel="shortcut icon" href="{{asset(env('THEME'))}}/images/favicon.ico" />

    <link rel="stylesheet" href="{{asset(env('THEME'))}}/css/stuck.css">
    <link rel="stylesheet" href="{{asset(env('THEME'))}}/css/style.css">
    <link rel="stylesheet" href="{{asset(env('THEME'))}}/css/touchTouch.css">
    {{--<link href="{{asset(env('THEME'))}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />--}}
    <script src="{{asset(env('THEME'))}}/js/jquery.js"></script>
    <script src="{{asset(env('THEME'))}}/js/jquery-migrate-1.1.1.js"></script>
    <script src="{{asset(env('THEME'))}}/js/script.js"></script>
    <script src="{{asset(env('THEME'))}}/js/superfish.js"></script>
    <script src="{{asset(env('THEME'))}}/js/jquery.equalheights.js"></script>
    <script src="{{asset(env('THEME'))}}/js/jquery.mobilemenu.js"></script>
    <script src="{{asset(env('THEME'))}}/js/jquery.easing.1.3.js"></script>
    <script src="{{asset(env('THEME'))}}/js/tmStickUp.js"></script>
    <script src="{{asset(env('THEME'))}}/js/jquery.ui.totop.js"></script>
    <script src="{{asset(env('THEME'))}}/js/touchTouch.jquery.js"></script>

    <script>
        $(document).ready(function(){

            $().UItoTop({ easingType: 'easeOutQuart' });
            $('#stuck_container').tmStickUp({});
            $('.gallery .gall_item').touchTouch();

        });
    </script>
    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <script src="{{asset(env('THEME'))}}/js/html5shiv.js"></script>
    <link rel="stylesheet" media="screen" href="{{asset(env('THEME'))}}/css/ie.css">


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
                        <a href="#">
                            <img src="{{asset(env('THEME'))}}/images/logo.png" alt="Logo alt">
                        </a>
                    </h1>
                    <div class="navigation ">
                        <nav>
                            <ul class="sf-menu">
                                <li><a href="#">home</a></li>
                                <li class="current"><a href="#">menu</a></li>
                                <li><a href="#">reservation</a></li>
                                <?php if(!empty($_SESSION['user'])):?>
                                <li><a href="#">Добро пожаловать, <?=h($_SESSION['user']['name']);?></a></li>
                                <li><a href="user/logout">Выход</a></li>
                                <?php else: ?>
                                <li><a href="{{ url('/login') }}" target="_blank">Вход на сайт</a></li>
                                <?php endif;?>
                                <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown">Account </a>
                                    <ul class="sf-menu">
                                        <?php if(!empty($_SESSION['user'])):?>
                                        <li><a href="#">Добро пожаловать, <?=h($_SESSION['user']['name']);?></a></li>
                                        <li><a href="user/logout">Выход</a></li>
                                        <?php else: ?>
                                        <li><a href="user/login">Вход</a></li>
                                        <li><a href="user/signup">Регистрация</a></li>
                                        <?php endif;?>
                                    </ul>
                                </li>
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
<section class="content gallery pad1"><div class="ic">More Website Templates @ TemplateMonster.com - July 30, 2014!</div>
    <div class="container">
        <div class="row">
            <!-- FOOD MENU start-->
            @yield('menus')
            <!-- FOOD MENU stop-->
        </div>
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
</body>
</html>

