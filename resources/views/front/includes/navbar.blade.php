<!-- start header -->
<header>
    <!-- start navigation -->
    <nav class="navbar navbar-default bootsnav navbar-fixed-top header-dark background-transparent nav-box-width navbar-expand-lg menu-center">
        <div class="container-fluid nav-header-container">
            <!-- start logo -->
            <div class="col-auto col-md-2 pl-0">
                <a href="{{ url('/') }}" title="Pofo" class="logo"><img src="{{ asset('assets/front/images/logo/' . config("settings.logo_path_black")) }}" data-rjs="{{ asset('assets/front/images/logo@2x.png') }}" class="logo-dark default" alt="Pofo"><img src="{{ asset('assets/front/images/logo/' . config("settings.logo_path")) }}" data-rjs="{{ asset('assets/front/images/logo-full-white@2x.png') }}" alt="Pofo" class="logo-light"></a>
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
                        {{-- <li class="dropdown simple-dropdown"><a href="#" title="Blog">Blog</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                        </li>
                        <li class="dropdown megamenu-fw">
                            <a href="#">Elements</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                        </li>
                        <li class="dropdown megamenu-fw">
                            <a href="#">Features</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                        </li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-auto col-lg-2 pr-0 text-right">
                <div class="header-searchbar pl-0 border-0">
                    <a href="#search-header" class="header-search-form"><i class="fas fa-search search-button"></i></a>
                    <!-- search input-->
                    <form id="search-header" method="post" action="search-result.html" name="search-header" class="mfp-hide search-form-result">
                        <div class="search-form position-relative">
                            <button type="submit" class="fas fa-search close-search search-button"></button>
                            <input type="text" name="search" class="search-input" placeholder="Enter your keywords..." autocomplete="off">
                        </div>
                    </form>
                </div>
                <div class="header-social-icon d-none d-md-inline-block">
                    <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://dribbble.com/" title="Dribbble" target="_blank"><i class="fab fa-dribbble"></i></a>                          
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation --> 
</header>
<!-- end header -->