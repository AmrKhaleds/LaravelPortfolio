
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <head>
        {{-- Meta Tags --}}
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        @yield('meta')
        {{-- End Meta Tags --}}
        <title>@yield('title')</title>
        {{-- BEGIN FAVICONS --}}
        <link rel="apple-touch-icon" href="{{ asset('assets/admin/images/ico/apple-icon-120.png') }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/admin/images/ico/favicon.ico') }}">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700" rel="stylesheet">
        {{-- END FAVICONS --}}
        {{-- BEGIN Font Awoesome --}}
        <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        {{-- End Font Awoesome --}}
        <!-- BEGIN VENDOR CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors.css') }}">
        @yield('vendor_css')
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendors/css/cryptocoins/cryptocoins.css') }}">
        <!-- END VENDOR CSS-->
        <!-- BEGIN MODERN CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/app.css') }}">
        <!-- END MODERN CSS-->
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/core/menu/menu-types/vertical-menu.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/core/colors/palette-gradient.css') }}">
        @yield('page_level_css')
        <!-- END Page Level CSS-->
        <!-- BEGIN Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/style.css') }}">
        @yield('custom_css')
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
        @yield('vendor_js')
        <script src="{{ asset('assets/admin/vendors/js/tables/datatable/datatables.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/admin/vendors/js/tables/datatable/dataTables.buttons.min.js') }}" type="text/javascript">
        </script>
        <script src="{{ asset('assets/admin/vendors/js/tables/buttons.flash.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/admin/vendors/js/tables/jszip.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/admin/vendors/js/tables/pdfmake.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/admin/vendors/js/tables/vfs_fonts.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/admin/vendors/js/tables/buttons.html5.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/admin/vendors/js/tables/buttons.print.min.js') }}" type="text/javascript"></script>

        <script src="{{ asset('assets/admin/vendors/js/charts/chart.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/admin/vendors/js/charts/echarts/echarts.js') }}" type="text/javascript"></script>
        <!-- BEGIN MODERN JS-->
        <script src="{{ asset('assets/admin/js/core/app-menu.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/admin/js/core/app.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/admin/js/scripts/customizer.js') }}" type="text/javascript"></script>
        <!-- END MODERN JS-->
        <!-- BEGIN PAGE LEVEL JS-->
        <script src="{{ asset('assets/admin/js/scripts/pages/dashboard-crypto.js') }}" type="text/javascript"></script>
        @yield('page_level_js')
        <script src="{{ asset('assets/admin/js/scripts/tables/datatables/datatable-advanced.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL JS-->
        <script type="text/javascript">
            $(document).ready(function() {
                setTimeout(() => {
                    $('.toast').fadeOut();
                }, 3000);
            });
        </script>
        <script>
            $(document).ready(function() {
                $('.menu-toggle').click(function() {
                    event.stopPropagation();
                    $('.menu-toggle').toggleClass('is-active');
                    $('.vertical-layout').toggleClass('menu-open');
                });
                $(document).click(function(event) {
                    var clickover = $(event.target);
                    var opened = $(".menu-toggle").hasClass("is-active");
                    if (opened == true && !clickover.hasClass("main-menu-content")) {
                        $('.vertical-layout').toggleClass('menu-open');
                        $('.menu-toggle').toggleClass('is-active');
                    }
                });
            });
            </script>
        <!-- Custom Script -->
        @yield('custom_js')
        <!-- End Custom Script -->
    </body>
</html>

