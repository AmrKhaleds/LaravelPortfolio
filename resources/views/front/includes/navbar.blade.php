<!-- start header -->
<header>
    <!-- start navigation -->
    <nav class="navbar navbar-default bootsnav navbar-fixed-top header-dark background-transparent nav-box-width navbar-expand-lg menu-center">
        <div class="container-fluid nav-header-container">
            <!-- start logo -->
            <div class="col-auto col-md-2 pl-0">
                <a href="{{ url('/') }}" title="AddYou" class="logo"><img src="{{asset('storage/images/logo/' . $white_logo)}}" data-rjs="{{asset('storage/images/logo/' . $white_logo)}}" class="logo-dark default" alt="AddYou"><img src="{{asset('storage/images/logo/' . $black_logo)}}" data-rjs="{{asset('storage/images/logo/' . $black_logo)}}" alt="AddYou" class="logo-light"></a>
            </div>
            <!-- end logo -->
            <div class="col accordion-menu pr-0 pr-lg-3">
                <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                    <span class="sr-only">toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-collapse collapse justify-content-center" id="navbar-collapse-toggle-1">
                    <ul id="accordion" class="nav navbar-nav no-margin alt-font text-normal" data-in="fadeIn" data-out="fadeOut">
                        <!-- start menu item -->
                        <li class="dropdown megamenu-fw">
                            <a href="/">Home</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                        </li>
                        <!-- end menu item -->
                        <li class="dropdown simple-dropdown">
                            <a href="#services">Services</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                        </li>
                        <li class="dropdown megamenu-fw">
                            <a href="#portfolio">Portfolio</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-auto col-lg-2 pr-0 text-right">
                <div class="header-searchbar pl-0 border-0">
                    @if (Route::has('login'))
                        <div class="d-md-inline-block">
                            @auth('clients')
                                <a href="{{ route('client.dashboard') }} ">Dashboard</a>
                            @else
                                <a href="{{ route('client.login') }}">Login</a> /
                                <a href="{{ route('client.register') }}">Register</a>
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation --> 
</header>
<!-- end header -->