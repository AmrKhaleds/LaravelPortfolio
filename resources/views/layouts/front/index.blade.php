<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- title -->
        {{-- {{ $title = @yield("title") }} --}}
        <title>{{ config('settings.site_name') }}</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="ThemeZaa">
        <!-- description -->
        <meta name="description" content="POFO is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.">
        <!-- keywords -->
        <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- animation -->
        <link rel="stylesheet" href="{{ asset('assets/front/css/animate.css') }}" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.min.css') }}" />
        <!-- et line icon --> 
        <link rel="stylesheet" href="{{ asset('assets/front/css/et-line-icons.css') }}" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="{{ asset('assets/front/css/font-awesome.min.css') }}" />
        <!-- themify icon -->
        <link rel="stylesheet" href="{{ asset('assets/front/css/themify-icons.css') }}">
        <!-- swiper carousel -->
        <link rel="stylesheet" href="{{ asset('assets/front/css/swiper.min.css') }}">
        <!-- justified gallery -->
        <link rel="stylesheet" href="{{ asset('assets/front/css/justified-gallery.min.css') }}">
        <!-- magnific popup -->
        <link rel="stylesheet" href="{{ asset('assets/front/css/magnific-popup.css') }}" />
        <!-- revolution slider -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/revolution/css/settings.css') }}" media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/revolution/css/layers.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/revolution/css/navigation.css') }}">
        <!-- bootsnav -->
        <link rel="stylesheet" href="{{ asset('assets/front/css/bootsnav.css') }}">
        <!-- style -->
        <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}" />
        <!-- responsive css -->
        <link rel="stylesheet" href="{{ asset('assets/front/css/responsive.css') }}" />
        <!--[if IE]>
            <script src="{{ asset('assets/front/js/html5shiv.js') }}"></script>
        <![endif]-->
    </head>
    <body>
        @yield('content')
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>  
        <!-- end scroll to top -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="{{ asset('assets/front/js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/front/js/modernizr.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/front/js/bootstrap.bundle.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/front/js/jquery.easing.1.3.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/front/js/skrollr.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/front/js/smooth-scroll.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/front/js/jquery.appear.js') }}"></script>
        <!-- menu navigation -->
        <script type="text/javascript" src="{{ asset('assets/front/js/bootsnav.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/front/js/jquery.nav.js') }}"></script>
        <!-- animation -->
        <script type="text/javascript" src="{{ asset('assets/front/js/wow.min.js') }}"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="{{ asset('assets/front/js/page-scroll.js') }}"></script>
        <!-- swiper carousel -->
        <script type="text/javascript" src="{{ asset('assets/front/js/swiper.min.js') }}"></script>
        <!-- counter -->
        <script type="text/javascript" src="{{ asset('assets/front/js/jquery.count-to.js') }}"></script>
        <!-- parallax -->
        <script type="text/javascript" src="{{ asset('assets/front/js/jquery.stellar.js') }}"></script>
        <!-- magnific popup -->
        <script type="text/javascript" src="{{ asset('assets/front/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- portfolio with shorting tab -->
        <script type="text/javascript" src="{{ asset('assets/front/js/isotope.pkgd.min.js') }}"></script>
        <!-- images loaded -->
        <script type="text/javascript" src="{{ asset('assets/front/js/imagesloaded.pkgd.min.js') }}"></script>
        <!-- pull menu -->
        <script type="text/javascript" src="{{ asset('assets/front/js/classie.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/front/js/hamburger-menu.js') }}"></script>
        <!-- counter -->
        <script type="text/javascript" src="{{ asset('assets/front/js/counter.js') }}"></script>
        <!-- fit video -->
        <script type="text/javascript" src="{{ asset('assets/front/js/jquery.fitvids.js') }}"></script>

        <!-- skill bars -->
        <script type="text/javascript" src="{{ asset('assets/front/js/skill.bars.jquery.js') }}"></script> 
        <!-- justified gallery -->
        <script type="text/javascript" src="{{ asset('assets/front/js/justified-gallery.min.js') }}"></script>
        <!--pie chart-->
        <script type="text/javascript" src="{{ asset('assets/front/js/jquery.easypiechart.min.js') }}"></script>
        <!-- instagram -->
        <script type="text/javascript" src="{{ asset('assets/front/js/instafeed.min.js') }}"></script>
        <!-- retina -->
        <script type="text/javascript" src="{{ asset('assets/front/js/retina.min.js') }}"></script>
        <!-- revolution -->
        <script type="text/javascript" src="{{ asset('assets/front/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/front/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
        <!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
        <script type="text/javascript" src="{{ asset('assets/front/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/front/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/front/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/front/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/front/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/front/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/front/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/front/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/front/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
        <!-- setting -->
        <script type="text/javascript" src="{{ asset('assets/front/js/main.js') }}"></script>
    </body>
</html>