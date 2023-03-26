
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <head>
        {{-- Meta Tags --}}
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        {{-- End Meta Tags --}}
        <title>  @yield('title') </title>
        {{-- Favicons --}}
        <link rel="apple-touch-icon" href="{{ asset('assets/admin/images/ico/apple-icon-120.png') }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/admin/images/ico/favicon.ico') }}">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700" rel="stylesheet">
        {{-- End Favicons --}}
        {{-- Font Awoesome --}}
        <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        {{-- EndFont Awoesome --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/plugins/animate/animate.css') }}">

        <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
        <!-- BEGIN VENDOR CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors.css') }}">
        <!-- END VENDOR CSS-->
        <!-- BEGIN PSGED STYLE -->
        @yield('styles')
        <!-- END PSGED STYLE -->
        <!-- BEGIN MODERN CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/app.css') }}">
        <!-- END MODERN CSS-->
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/core/menu/menu-types/vertical-menu.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/core/colors/palette-gradient.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendors/css/cryptocoins/cryptocoins.css') }}">
        <!-- END Page Level CSS-->
        <!-- BEGIN Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/style.css') }}">
        <!-- END Custom CSS-->

    </head>
    <body class="vertical-layout vertical-menu 2-columns
    @if(Request::is('assets/users/tickets/reply*')) chat-application 
    @endif menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
        <!-- fixed-top-->
        @include ('admin.includes.header')
        @include ('admin.includes.sidebar')
        @yield('content')
        @include ('admin.includes.footer')

        <!-- BEGIN VENDOR JS-->
        <script src="{{ asset('assets/admin/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
        <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
        <script src="{{ asset('assets/admin/vendors/js/charts/chart.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/admin/vendors/js/charts/echarts/echarts.js') }}" type="text/javascript"></script>
        <!-- BEGIN MODERN JS-->
        @yield('scripts')
        <script src="{{ asset('assets/admin/js/core/app-menu.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/admin/js/core/app.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/admin/js/scripts/customizer.js') }}" type="text/javascript"></script>

        <!-- END MODERN JS-->
        <!-- BEGIN PAGE LEVEL JS-->
        <script src="{{ asset('assets/admin/js/scripts/pages/dashboard-crypto.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL JS-->
        {{-- <script type="text/javascript">
            $(document).ready(function() {
                setTimeout(() => {
                    $('.toast').fadeOut();
                }, 3000);
            });
        </script> --}}
    </body>
</html>

