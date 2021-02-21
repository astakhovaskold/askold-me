<!DOCTYPE html>

<html lang="ru">

    <head>

        <!-- ==============================================
        Basic Page Needs
        =============================================== -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->

        <title>Разработка сайтов и SEO-продвижение в Туле &ndash; askold.me</title>

        <meta name="description" content="Создание сайта, SEO-аудит и продвижение вашего сайта. Увеличте свои продажи с помощью сайта.">
        <meta name="subject" content="Разработка и создание сайтов, IT, веб-разработка, SEO-продвижение">
        <meta name="author" content="Askold Astakhov">

        <meta property="og:title" content="Разработка сайтов и SEO-продвижение в Туле">
        <meta property="og:description" content="Создание сайта, SEO-аудит и продвижение вашего сайта. Увеличте свои продажи с помощью сайта.">
        <meta property="og:url" content="https://askold.me/">
        <meta property="og:site_name" content="askold.me">
        <meta property="og:type" content="article">
        <meta property="og:image" content="assets/images/favicon.png">
        <!-- ==============================================
        Favicons
        =============================================== -->
        <link rel="shortcut icon" href="assets/images/favicon.png">
        <!-- <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png"> -->

        <!-- ==============================================
        Vendor Stylesheet
        =============================================== -->
        <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/vendor/slider.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/vendor/icons.min.css">
        <link rel="stylesheet" href="assets/css/vendor/icons-fa.min.css">
        <link rel="stylesheet" href="assets/css/vendor/animation.min.css">
        <link rel="stylesheet" href="assets/css/vendor/gallery.min.css">
        <link rel="stylesheet" href="assets/css/vendor/cookie-notice.min.css">

        <!-- ==============================================
        Custom Stylesheet
        =============================================== -->
        <link rel="stylesheet" href="assets/css/default.css">

        <!-- ==============================================
        Theme Color
        =============================================== -->
        <meta name="theme-color" content="#21333e">

        <!-- ==============================================
        Theme Settings
        =============================================== -->
        <style>
            :root {
                --hero-bg-color: #000007;
    
                --section-1-bg-color: #eef4ed;
                --section-2-bg-color: #ffffff;
                --section-3-bg-color: #111117;
                --section-4-bg-color: #eef4ed;
                --section-5-bg-color: #ffffff;
                --section-6-bg-color: #111117; --section-6-bg-image: url('/assets/images/bg-1.jpg');
                --section-7-bg-color: #ffffff;
            }
        </style>
        
                <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
           (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
           m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
           (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

           ym(70175629, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true 
           });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/70175629" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
            
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-NNDBL5EMX0"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-NNDBL5EMX0');
        </script>
    </head>

    <body class="home">
        
        <!-- Preloader -->
        <div id="preloader" data-timeout="2000" class="odd preloader counter">
            <div data-aos="fade-up" data-aos-delay="500" class="row justify-content-center text-center items">
                <div data-percent="100" class="radial">
                    <span></span>
                </div>
            </div>
        </div>

        <!-- Header -->
        <header id="header">

            <!-- Top Navbar -->
            <nav class="navbar navbar-expand top">
                <div class="container header">

                    <!-- Navbar Items [left] -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link pl-0"><i class="fas fa-clock mr-2"></i>Режим работы: ПН-ПТ с 9:00 до 18:00</a>
                        </li>
                    </ul>

                    <!-- Nav holder -->
                    <div class="ml-auto"></div>

                    <!-- Navbar Items [right] -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="tel:<?= $phone[
                              "link"
                            ] ?>" class="nav-link"><i class="fas fa-phone-alt mr-2"></i><?= $phone[
  "text"
] ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="mailto:<?= $email ?>" class="nav-link"><i class="fas fa-envelope mr-2"></i><?= $email ?></a>
                        </li>
                    </ul>

                    <!-- Navbar Icons -->
                    <ul class="navbar-nav icons">
                        <li class="nav-item social">
                            <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="nav-item social">
                            <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="nav-item social">
                            <a href="#" class="nav-link pr-0"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>

                </div>
            </nav>

            <!-- Navbar -->
            <nav class="navbar navbar-expand navbar-fixed sub">
                <div class="container header">

                    <!-- Navbar Brand-->
                    <a class="navbar-brand" href="/">
                        <span class="brand">
                            <span class="featured">
                                <span class="first">askold</span>
                            </span>
                            <span class="last">.me</span>
                        </span>
                        
                        <!-- 
                            Custom Logo
                            <img src="assets/images/logo.svg" alt="NEXGEN">
                        -->
                    </a>

                    <!-- Nav holder -->
                    <div class="ml-auto"></div>

                    <!-- Navbar Items -->
                    <ul class="navbar-nav items">
                        <li class="nav-item">
                            <a href="#header" class="smooth-anchor nav-link">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="smooth-anchor nav-link">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a href="#services" class="smooth-anchor nav-link">Услуги</a>
                        </li>
                        <li class="nav-item">
                            <a href="#pricing" class="smooth-anchor nav-link">Прайс</a>
                        </li>
                        <li class="nav-item">
                            <a href="#blog" class="smooth-anchor nav-link">Блог</a>
                        </li>
                        <!-- <ul class="navbar-nav icons">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#sign">
                                    <i class="icon-user"></i>
                                </a>
                            </li>
                        </ul> -->
                    </ul>

                    <!-- Navbar Toggle -->
                    <ul class="navbar-nav toggle">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                                <i class="icon-menu m-0"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Navbar Action -->
                    <ul class="navbar-nav action">
                        <li class="nav-item ml-3">
                            <a href="#contact" class="smooth-anchor btn ml-lg-auto primary-button">ЗАЯВКА</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </header>