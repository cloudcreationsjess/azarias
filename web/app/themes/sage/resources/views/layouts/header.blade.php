<!doctype html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="utf-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="theme-color" content="#016360"/>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/fvu6tpv.css">

    @yield('styles')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>

    @stack('header.scripts')

    @php(wp_head())

<!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '  https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-53T9FRV');</script>
    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2KHCGE9K3V"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-2KHCGE9K3V');
    </script>

</head>

<body @php(body_class())>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="  https://www.googletagmanager.com/ns.html?id=GTM-53T9FRV  "
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

@php(wp_body_open())

@php(do_action('get_header'))

<div id="app">
    <div id="panel"><!-- Needed for mobile menu. This is what slides when you click mobile menu button -->
        <div class="mobile mobile-popout">
            <nav class="mobile-menu mobile">
                <div id="site-navigation">
                    <div class="mobile-menu__site-menu text-center" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                        @if (has_nav_menu('mobile'))
                            {!! wp_nav_menu(['theme_location' => 'mobile', 'menu_id' => 'mobile-menu', 'depth' => 3]) !!}
                        @endif
                    </div>
                </div>
            </nav>
            <div class="mobile-popout__contact">
                <a class="col" href="mailto:{{ get_field('email', 'options') }}">Email</a>
                <div class="divider"></div>
                <a class="col" href="tel:{{ get_field('phone', 'options') }}">Call</a>
            </div>
        </div>
        <!-- PAGE LOADER -->
    @include('partials.page-loader')

    <!-- MOBILE NAV -->
{{--    @include('partials.mobile_menu')--}}

@include('partials.nav')
{{--        @include('partials.mega-nav')--}}
