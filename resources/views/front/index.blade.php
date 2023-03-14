@extends('layouts.front.index')
@section('content')
<!-- start header -->
{{-- @isset($getProjects)
    @foreach ($getProjects as $project)
        {{ $project->name }}
    @endforeach
@endisset --}}
<header>
    <!-- start navigation -->
    <nav class="navbar navbar-default bootsnav navbar-fixed-top header-dark background-transparent nav-box-width navbar-expand-lg menu-center">
        <div class="container-fluid nav-header-container">
            <!-- start logo -->
            <div class="col-auto col-md-2 pl-0">
                <a href="index.html" title="Pofo" class="logo"><img src="{{ asset('assets/front/images/logo.png') }}" data-rjs="{{ asset('assets/front/images/logo@2x.png') }}" class="logo-dark default" alt="Pofo"><img src="{{ asset('assets/front/images/logo-full-white.png') }}" data-rjs="{{ asset('assets/front/images/logo-full-white@2x.png') }}" alt="Pofo" class="logo-light"></a>
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
                            <a href="#">Home</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                            <!-- start sub menu -->
                            <div class="menu-back-div dropdown-menu megamenu-content mega-menu collapse mega-menu-full">
                                <ul>
                                    <!-- start sub menu column  -->
                                    <li class="mega-menu-column col-lg-3">
                                        <!-- start sub menu item  -->
                                        <ul>
                                            <li class="dropdown-header">Classic Homepages</li>
                                            <li><a href="home-classic-corporate.html">Classic corporate</a></li>
                                            <li><a href="home-classic-digital-agency.html">Classic digital agency</a></li>
                                            <li><a href="home-classic-innovation-agency.html">Classic innovation agency</a></li>
                                            <li><a href="home-classic-web-agency.html">Classic web agency</a></li>
                                            <li><a href="home-classic-one-page.html">Classic one page</a></li>
                                            <li><a href="home-classic-start-up.html">Classic start-up</a></li>
                                            <li><a href="home-classic-interactive-agency.html">Classic interactive agency</a></li>
                                        </ul>
                                        <!-- end sub menu item  -->
                                    </li>
                                    <!-- end sub menu column -->
                                    <!-- start sub menu column -->
                                    <li class="mega-menu-column col-lg-3">
                                        <!-- start sub menu item  -->
                                        <ul>
                                            <li class="dropdown-header">Creative Homepages</li>
                                            <li><a href="home-creative-studio.html">Creative studio</a></li>
                                            <li><a href="home-creative-business.html">Creative business</a></li>
                                            <li><a href="home-creative-simple-portfolio.html">Creative simple portfolio</a></li>
                                            <li><a href="home-creative-branding-agency.html">Creative branding agency</a></li>
                                            <li class="menu-new"><a href="home-creative-minimalist-portfolio.html">creative minimalist portfolio</a></li>
                                            <li><a href="home-creative-small-business.html">Creative small business</a></li>
                                            <li><a href="home-creative-designer.html">Creative designer</a></li>
                                            <li><a href="home-creative-agency.html">Creative agency</a></li>
                                        </ul>
                                        <!-- end sub menu item  -->
                                    </li>
                                    <!-- end sub menu column  -->
                                    <!-- start sub menu column  -->
                                    <li class="mega-menu-column col-lg-3">
                                        <!-- start sub menu item  -->
                                        <ul>
                                            <li class="dropdown-header">Portfolio Homepages</li>
                                            <li><a href="home-portfolio-minimal.html">Portfolio minimal</a></li>
                                            <li><a href="home-portfolio-multiple-carousel.html">Portfolio multiple carousel</a></li>
                                            <li><a href="home-portfolio-centered-slides.html">Portfolio centered slides</a></li>
                                            <li><a href="home-portfolio-personal.html">Portfolio personal</a></li>
                                            <li><a href="home-portfolio-metro.html">Portfolio metro</a></li>
                                            <li><a href="home-portfolio-full-screen-vertical.html">Portfolio full screen – vertical</a></li>
                                            <li><a href="home-portfolio-photographer.html">Portfolio photographer</a></li>
                                            <li><a href="home-portfolio-parallax.html">Portfolio parallax</a></li>
                                        </ul>
                                        <!-- end sub menu item  -->
                                    </li>
                                    <!-- end sub menu column  -->
                                    <!-- start sub menu column  -->
                                    <li class="mega-menu-column col-lg-3">
                                        <!-- start sub menu item  -->
                                        <ul>
                                            <li class="dropdown-header">Blog Homepages</li>
                                            <li><a href="home-blog-grid.html">Blog grid</a></li>
                                            <li><a href="home-blog-masonry.html">Blog masonry</a></li>
                                            <li><a href="home-blog-clean.html">Blog clean</a></li>
                                            <li><a href="home-blog-personal.html">Blog personal</a></li>
                                        </ul>
                                        <!-- end sub menu item  -->
                                    </li>
                                    <!-- end sub menu column  -->
                                </ul>
                                <!-- end sub menu -->
                            </div>
                        </li>
                        <!-- end menu item -->
                        <li class="dropdown simple-dropdown"><a href="#">Pages</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                            <!-- start sub menu -->
                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">About <i class="fas fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="about-us-simple.html">About us simple</a></li>
                                        <li><a href="about-us-classic.html">About us classic</a></li>
                                        <li><a href="about-us-modern.html">About us modern</a></li>
                                        <li><a href="about-me.html">About me</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Services <i class="fas fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="services-simple.html">Services simple</a></li>
                                        <li><a href="services-classic.html">Services classic</a></li>
                                        <li><a href="services-modern.html">Services modern</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact <i class="fas fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="contact-us-simple.html">Contact simple</a></li>
                                        <li><a href="contact-us-classic.html">Contact classic</a></li>
                                        <li><a href="contact-us-classic-02.html">Contact classic – style 02</a></li>
                                        <li><a href="contact-us-modern.html">Contact modern</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Team <i class="fas fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="team-simple.html">Team simple</a></li>
                                        <li><a href="team-classic.html">Team classic</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Additional Pages <i class="fas fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="our-clients.html">Our clients</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                        <li><a href="coming-soon.html">Coming soon</a></li>
                                        <li><a href="coming-soon-02.html">Coming soon – style 02</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li><a href="maintenance.html">Maintenance</a></li>
                                        <li><a href="search-result.html">Search result</a></li>
                                        <li><a href="pricing.html">Pricing</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown megamenu-fw">
                            <a href="#">Portfolio</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                            <!-- start sub menu -->
                            <div class="menu-back-div dropdown-menu megamenu-content mega-menu collapse mega-menu-full">
                                <ul>
                                    <!-- start sub menu column  -->
                                    <li class="mega-menu-column col-lg-3">
                                        <!-- start sub menu item  -->
                                        <ul>
                                            <li class="dropdown-header">Grid - Full width Layouts</li>
                                            <li><a href="portfolio-full-width-grid-overlay.html">Portfolio grid overlay</a></li>
                                            <li><a href="portfolio-full-width-grid-with-icon.html">Portfolio grid with icon</a></li>
                                            <li><a href="portfolio-full-width-grid-transform.html">Portfolio grid transform</a></li>
                                            <li><a href="portfolio-full-width-grid-zooming.html">Portfolio grid zooming</a></li>
                                        </ul>
                                        <ul>
                                            <li class="dropdown-header">Masonry - Full width Layouts</li>
                                            <li><a href="portfolio-full-width-masonry-overlay.html">Portfolio masonry overlay</a></li>
                                            <li><a href="portfolio-full-width-masonry-with-icon.html">Portfolio masonry with icon</a></li>
                                        </ul>
                                        <ul>
                                            <li class="dropdown-header">Metro - Full width Layouts</li>
                                            <li><a href="portfolio-full-width-metro-overlay.html">Portfolio metro overlay</a></li>
                                            <li><a href="portfolio-full-width-metro-with-icon.html">Portfolio metro with icon</a></li>
                                            <li><a href="portfolio-full-width-metro-transform.html">Portfolio metro transform</a></li>
                                            <li><a href="portfolio-full-width-metro-zooming.html">Portfolio metro zooming</a></li>
                                        </ul>
                                        <ul>
                                            <li class="dropdown-header">Other - Full width Layouts</li>
                                            <li><a href="portfolio-full-width-image-gallery.html">Portfolio image gallery</a></li>
                                            <li><a href="portfolio-full-width-justified-gallery.html">Portfolio justified</a></li>
                                            <li><a href="portfolio-full-width-carousel.html">Portfolio carousel</a></li>
                                            <li><a href="portfolio-full-width-parallax.html">Portfolio parallax</a></li>
                                        </ul>
                                        <!-- end sub menu item  -->
                                    </li>
                                    <!-- end sub menu column -->
                                    <!-- start sub menu column -->
                                    <li class="mega-menu-column col-lg-3">
                                        <!-- start sub menu item  -->
                                        <ul>
                                            <li class="dropdown-header">Grid - Boxed Layouts</li>
                                            <li><a href="portfolio-boxed-grid-overlay.html">Portfolio grid overlay</a></li>
                                            <li><a href="portfolio-boxed-grid-with-icon.html">Portfolio grid with icon</a></li>
                                            <li><a href="portfolio-boxed-grid-transform.html">Portfolio grid transform</a></li>
                                            <li><a href="portfolio-boxed-grid-zooming.html">Portfolio grid zooming</a></li>
                                        </ul>
                                        <ul>
                                            <li class="dropdown-header">Masonry - Boxed Layouts</li>
                                            <li><a href="portfolio-boxed-masonry-overlay.html">Portfolio masonry overlay</a></li>
                                            <li><a href="portfolio-boxed-masonry-with-icon.html">Portfolio masonry with icon</a></li>
                                        </ul>
                                        <ul>
                                            <li class="dropdown-header">Metro - Boxed Layouts</li>
                                            <li><a href="portfolio-boxed-metro-overlay.html">Portfolio metro overlay</a></li>
                                            <li><a href="portfolio-boxed-metro-with-icon.html">Portfolio metro with icon</a></li>
                                            <li><a href="portfolio-boxed-metro-transform.html">Portfolio metro transform</a></li>
                                            <li><a href="portfolio-boxed-metro-zooming.html">Portfolio metro zooming</a></li>
                                        </ul>
                                        <ul>
                                            <li class="dropdown-header">Other - Boxed Layouts</li>
                                            <li><a href="portfolio-boxed-image-gallery.html">Portfolio image gallery</a></li>
                                            <li><a href="portfolio-boxed-justified-gallery.html">Portfolio justified</a></li>
                                            <li><a href="portfolio-boxed-carousel.html">Portfolio carousel</a></li>
                                            <li><a href="portfolio-boxed-parallax.html">Portfolio parallax</a></li>
                                        </ul>
                                        <!-- end sub menu item  -->
                                    </li>
                                    <!-- end sub menu column  -->

                                    <!-- start sub menu column  -->
                                    <li class="mega-menu-column col-lg-3">
                                        <!-- start sub menu item  -->
                                        <ul>
                                            <li class="dropdown-header">Single Project Page</li>
                                            <li><a href="single-project-page-01.html">Single project page 01</a></li>
                                            <li><a href="single-project-page-02.html">Single project page 02</a></li>
                                            <li><a href="single-project-page-03.html">Single project page 03</a></li>
                                            <li><a href="single-project-page-04.html">Single project page 04</a></li>
                                            <li><a href="single-project-page-05.html">Single project page 05</a></li>
                                            <li><a href="single-project-page-06.html">Single project page 06</a></li>
                                            <li><a href="single-project-page-07.html">Single project page 07</a></li>
                                            <li><a href="single-project-page-08.html">Single project page 08</a></li>
                                        </ul>
                                        <!-- end sub menu item  -->
                                        <ul>
                                            <li class="dropdown-header">Portfolio Columns</li>
                                            <li><a href="portfolio-two-columns.html">Portfolio 2 columns</a></li>
                                            <li><a href="portfolio-three-columns.html">Portfolio 3 columns</a></li>
                                            <li><a href="portfolio-four-columns.html">Portfolio 4 columns</a></li>
                                            <li><a href="portfolio-five-columns.html">Portfolio 5 columns</a></li>
                                        </ul>
                                    </li>
                                    <!-- end sub menu column  -->
                                    <!-- start sub menu column  -->
                                    <li class="mega-menu-column col-lg-3 d-none d-lg-block">
                                        <!-- start sub menu item  -->
                                        <ul>
                                            <li>
                                                <a href="home-creative-studio.html" class="menu-banner-image"><img src="{{ asset('assets/front/images/menu-banner-01.png') }}" alt="portfolio"/></a>
                                            </li>
                                            <li>
                                                <a href="home-creative-business.html" class="menu-banner-image"><img src="{{ asset('assets/front/images/menu-banner-02.png') }}" alt="portfolio"/></a>
                                            </li>
                                        </ul>
                                        <!-- end sub menu item  -->
                                    </li>
                                    <!-- end sub menu column  -->
                                </ul>
                                <!-- end sub menu -->
                            </div>
                        </li>
                        <li class="dropdown simple-dropdown"><a href="#" title="Blog">Blog</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                            <!-- start sub menu -->
                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog Standard <i class="fas fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-standard-full-width.html">Blog standard – full width</a></li>
                                        <li><a href="blog-standard-with-left-sidebar.html">Blog standard with left sidebar</a></li>
                                        <li><a href="blog-standard-with-right-sidebar.html">Blog standard with right sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog Classic <i class="fas fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-classic.html">Blog classic</a></li>
                                        <li><a href="blog-classic-full-width.html">Blog classic – full width</a></li>

                                    </ul></li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog List <i class="fas fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-list.html">Blog list</a></li>
                                        <li><a href="blog-list-full-width.html">Blog list – full width</a></li>
                                    </ul></li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog Grid <i class="fas fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-grid.html">Blog grid</a></li>
                                        <li><a href="blog-grid-full-width.html">Blog grid – full width</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog Masonry <i class="fas fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-masonry.html">Blog masonry</a></li>
                                        <li><a href="blog-masonry-full-width.html">Blog masonry – full width</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog Simple <i class="fas fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-simple.html">Blog simple</a></li>
                                        <li><a href="blog-simple-full-width.html">Blog simple – full width</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog Clean <i class="fas fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-clean.html">Blog clean</a></li>
                                        <li><a href="blog-clean-full-width.html">Blog clean – full width</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog Images <i class="fas fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-images.html">Blog images</a></li>
                                        <li><a href="blog-images-full-width.html">Blog images – full width</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog Only Text <i class="fas fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-only-text.html">Blog only text</a></li>
                                        <li><a href="blog-only-text-full-width.html">Blog only text – full width</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Post Layout <i class="fas fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-post-layout-01.html">Blog post layout 01</a></li>
                                        <li><a href="blog-post-layout-02.html">Blog post layout 02</a></li>
                                        <li><a href="blog-post-layout-03.html">Blog post layout 03</a></li>
                                        <li><a href="blog-post-layout-04.html">Blog post layout 04</a></li>
                                        <li><a href="blog-post-layout-05.html">Blog post layout 05</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Post Types <i class="fas fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-standard-post.html">Standard post</a></li>
                                        <li><a href="blog-gallery-post.html">Gallery post</a></li>
                                        <li><a href="blog-slider-post.html">Slider post</a></li>
                                        <li><a href="blog-html5-video-post.html">HTML5 video post</a></li>
                                        <li><a href="blog-youtube-video-post.html">Youtube video post</a></li>
                                        <li><a href="blog-vimeo-video-post.html">Vimeo video post</a></li>
                                        <li><a href="blog-audio-post.html">Audio post</a></li>
                                        <li><a href="blog-blockquote-post.html">Blockquote post</a></li>
                                        <li><a href="blog-full-width-post.html">Full width post</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- end sub menu -->
                        </li>
                        <li class="dropdown megamenu-fw">
                            <a href="#">Elements</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                            <!-- start sub menu -->
                            <div class="menu-back-div dropdown-menu megamenu-content mega-menu collapse mega-menu-full icon-list-menu">
                                <ul>
                                    <!-- start sub menu column  -->
                                    <li class="mega-menu-column col-lg-3">
                                        <!-- start sub menu item  -->
                                        <ul>
                                            <li class="dropdown-header">General elements</li>
                                            <li><a href="accordions.html"><i class="ti-layout-accordion-separated"></i> Accordions</a></li>
                                            <li><a href="buttons.html"><i class="ti-mouse"></i> Buttons</a></li>
                                            <li><a href="team.html"><i class="ti-user"></i> Team</a></li>
                                            <li><a href="team-carousel.html"><i class="ti-layout-slider-alt"></i> Team carousel</a></li>
                                            <li><a href="clients.html"><i class="ti-id-badge"></i> Clients</a></li>
                                            <li><a href="client-carousel.html"><i class="ti-layout-slider"></i> Client carousel</a></li>
                                            <li><a href="subscribe.html"><i class="ti-bookmark"></i> Subscribe</a></li>
                                            <li><a href="call-to-action.html"><i class="ti-headphone-alt"></i> Call to action</a></li>
                                            <li><a href="tab.html"><i class="ti-layout-tab"></i> Tab</a></li>
                                            <li><a href="google-map.html"><i class="ti-location-pin"></i> Google map</a></li>
                                            <li><a href="text-slider.html"><i class="ti-layout-media-overlay"></i> Text slider</a></li>
                                            <li><a href="contact-form.html"><i class="ti-clipboard"></i> Contact form</a></li>
                                            <li><a href="image-gallery.html"><i class="ti-gallery"></i> Image gallery</a></li>
                                        </ul>
                                        <!-- end sub menu item  -->
                                    </li>
                                    <!-- end sub menu column -->
                                    <!-- start sub menu column -->
                                    <li class="mega-menu-column col-lg-3">
                                        <!-- start sub menu item  -->
                                        <ul>
                                            <li class="dropdown-header">Infographics / icons</li>
                                            <li><a href="process-bar.html"><i class="icon-hourglass"></i> Process bar</a></li>
                                            <li><a href="icon-with-text.html"><i class="ti-layout-media-left"></i> Icon with text</a></li>
                                            <li><a href="overline-icon-box.html"><i class="ti-layout-placeholder"></i> Overline icon box</a></li>
                                            <li><a href="custom-icon-with-text.html"><i class="ti-layout-cta-btn-left"></i> Custom icon with text</a></li>
                                            <li><a href="counters.html"><i class="ti-timer"></i> Counters</a></li>
                                            <li><a href="countdown.html"><i class="ti-alarm-clock"></i> Countdown</a></li>
                                            <li><a href="pie-charts.html"><i class="ti-pie-chart"></i> Pie charts</a></li>
                                            <li><a href="text-box.html"><i class="ti-layout-cta-left"></i> Text box</a></li>
                                            <li><a href="fancy-text-box.html"><i class="ti-layout-cta-center"></i> Fancy text box</a></li>
                                        </ul>
                                        <!-- end sub menu item  -->
                                    </li>
                                    <!-- end sub menu column  -->

                                    <!-- start sub menu column  -->
                                    <li class="mega-menu-column col-lg-3">
                                        <!-- start sub menu item  -->
                                        <ul>
                                            <li class="dropdown-header">Interactive Elements</li>
                                            <li><a href="testimonials.html"><i class="ti-thought"></i> Testimonials</a></li>
                                            <li><a href="testimonials-carousel.html"><i class="ti-comments"></i> Testimonials carousel</a></li>
                                            <li><a href="video.html"><i class="ti-video-camera"></i> Video</a></li>
                                            <li><a href="interactive-banners.html"><i class="ti-image"></i> Interactive banners</a></li>
                                            <li><a href="services.html"><i class="ti-headphone-alt"></i> Services</a></li>
                                            <li><a href="portfolio-slider.html"><i class="ti-layout-slider-alt"></i> Portfolio slider</a></li>
                                            <li><a href="info-banner.html"><i class="ti-layout-slider"></i> Info banner</a></li>
                                            <li><a href="rotate-box.html"><i class="ti-layout-width-full"></i> Rotate box</a></li>
                                            <li><a href="process-step.html"><i class="ti-stats-up"></i> Process step</a></li>
                                            <li><a href="blog-posts.html"><i class="ti-comment-alt"></i> Blog posts</a></li>
                                            <li><a href="instagram.html"><i class="ti-instagram"></i> Instagram</a></li>
                                            <li><a href="parallax-scrolling.html"><i class="ti-exchange-vertical"></i> Parallax scrolling</a></li>
                                        </ul>
                                        <!-- end sub menu item  -->
                                    </li>
                                    <!-- end sub menu column  -->
                                    <!-- start sub menu column  -->
                                    <li class="mega-menu-column col-lg-3">
                                        <!-- start sub menu item  -->
                                        <ul>
                                            <li class="dropdown-header">Text & containers</li>
                                            <li><a href="heading.html"><i class="ti-text"></i> Heading</a></li>
                                            <li><a href="dropcaps.html"><i class="ti-layout-accordion-list"></i> Dropcaps</a></li>
                                            <li><a href="columns.html"><i class="ti-layout-column3-alt"></i> Columns</a></li>
                                            <li><a href="blockquote.html"><i class="ti-quote-left"></i> Blockquote</a></li>
                                            <li><a href="highlights.html"><i class="ti-underline"></i> Highlights</a></li>
                                            <li><a href="message-box.html"><i class="ti-layout-media-right-alt"></i> Message box</a></li>
                                            <li><a href="social-icons.html"><i class="ti-signal"></i> Social icons</a></li>
                                            <li><a href="lists.html"><i class="ti-list"></i> Lists</a></li>
                                            <li><a href="seperators.html"><i class="ti-layout-line-solid"></i> Separators</a></li>
                                            <li><a href="pricing-table.html"><i class="ti-layout-grid2-thumb"></i> Pricing table</a></li>
                                        </ul>
                                        <!-- end sub menu item  -->
                                    </li>
                                    <!-- end sub menu column  -->
                                </ul>
                                <!-- end sub menu -->
                            </div>
                        </li>
                        <li class="dropdown megamenu-fw">
                            <a href="#">Features</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                            <!-- start sub menu -->
                            <div class="menu-back-div dropdown-menu megamenu-content mega-menu collapse mega-menu-full">
                                <ul>
                                    <!-- start sub menu column  -->
                                    <li class="mega-menu-column col-lg-3">
                                        <!-- start sub menu item  -->
                                        <ul>
                                            <li class="dropdown-header">Header Styles</li>
                                            <li><a href="transparent-header.html">Transparent header</a></li>
                                            <li><a href="white-header.html">White header</a></li>
                                            <li><a href="dark-header.html">Dark header</a></li>
                                            <li><a href="header-with-top-bar.html">Header with top bar</a></li>
                                            <li><a href="header-with-sticky-top-bar.html">Header with sticky top bar</a></li>
                                            <li><a href="header-with-push.html">Header with push</a></li>
                                            <li><a href="center-navigation.html">Center navigation</a></li>
                                            <li><a href="center-logo.html">Center logo</a></li>
                                            <li><a href="top-logo.html">Top logo</a></li>
                                            <li><a href="one-page-navigation.html">One page navigation</a></li>
                                            <li><a href="hamburger-menu.html">Hamburger menu</a></li>
                                            <li><a href="hamburger-menu-modern.html">Hamburger menu modern</a></li>
                                            <li><a href="hamburger-menu-half.html">Hamburger menu half</a></li>
                                            <li><a href="left-menu-classic.html">Left menu classic</a></li>
                                            <li><a href="left-menu-modern.html">Left menu modern</a></li>
                                        </ul>
                                        <!-- end sub menu item  -->
                                    </li>
                                    <!-- end sub menu column -->
                                    <!-- start sub menu column -->
                                    <li class="mega-menu-column col-lg-3">
                                        <!-- start sub menu item  -->
                                        <ul>
                                            <li class="dropdown-header">Footer</li>
                                            <li><a href="footer-standard.html">Footer standard</a></li>
                                            <li><a href="footer-standard-dark.html">Footer standard dark</a></li>
                                            <li><a href="footer-classic.html">Footer classic</a></li>
                                            <li><a href="footer-classic-dark.html">Footer classic dark</a></li>
                                            <li><a href="footer-clean.html">Footer clean</a></li>
                                            <li><a href="footer-clean-dark.html">Footer clean dark</a></li>
                                            <li><a href="footer-modern.html">Footer modern</a></li>
                                            <li><a href="footer-modern-dark.html">Footer modern dark</a></li>
                                            <li><a href="footer-center-logo.html">Footer center logo </a></li>
                                            <li><a href="footer-center-logo-dark.html">Footer center logo dark</a></li>
                                            <li><a href="footer-strip.html">Footer strip</a></li>
                                            <li><a href="footer-strip-dark.html">Footer strip dark</a></li>
                                            <li><a href="footer-center-logo-02.html">Footer center logo 02</a></li>
                                            <li><a href="footer-center-logo-02-dark.html">Footer center logo 02 dark</a></li>
                                            <li class="menu-new"><a href="footer-clean-modern.html">footer clean modern</a></li>
                                            <li class="menu-new"><a href="footer-clean-modern-dark.html">footer clean modern dark</a></li>
                                        </ul>
                                        <!-- end sub menu item  -->
                                    </li>
                                    <!-- end sub menu column  -->

                                    <!-- start sub menu column  -->
                                    <li class="mega-menu-column col-lg-3">
                                        <!-- start sub menu item  -->
                                        <ul>
                                            <li class="dropdown-header">Page Title</li>
                                            <li><a href="page-title-left-alignment.html">Left alignment</a></li>
                                            <li><a href="page-title-right-alignment.html">Right alignment</a></li>
                                            <li><a href="page-title-center-alignment.html">Center alignment</a></li>
                                            <li><a href="page-title-dark-style.html">Dark style</a></li>
                                            <li><a href="page-title-big-typography.html">Big typography</a></li>
                                            <li><a href="page-title-parallax-image-background.html">Parallax image background</a></li>
                                            <li><a href="page-title-background-breadcrumbs.html">Image after breadcrumbs</a></li>
                                            <li><a href="page-title-gallery-background.html">Gallery background</a></li>
                                            <li><a href="page-title-background-video.html">Background video</a></li>
                                            <li><a href="page-title-mini-version.html">Mini version</a></li>
                                        </ul>
                                        <!-- end sub menu item  -->
                                    </li>
                                    <!-- end sub menu column  -->
                                    <!-- start sub menu column  -->
                                    <li class="mega-menu-column col-lg-3">
                                        <!-- start sub menu item  -->
                                        <ul>
                                            <li class="dropdown-header">Gallery</li>
                                            <li><a href="single-image-lightbox.html">Single image lightbox</a></li>
                                            <li><a href="lightbox-gallery.html">Lightbox gallery</a></li>
                                            <li><a href="zoom-gallery.html">Zoom gallery</a></li>
                                            <li class="menu-new"><a href="metro-gallery.html">metro gallery</a></li>
                                            <li class="menu-new"><a href="justified-gallery.html">justified gallery</a></li>
                                            <li><a href="popup-with-form.html">Popup with form</a></li>
                                            <li><a href="modal-popup.html">Modal popup</a></li>
                                            <li><a href="open-youtube-video.html">Open youtube video</a></li>
                                            <li><a href="open-vimeo-video.html">Open vimeo video</a></li>
                                            <li><a href="open-google-map.html">Open google map</a></li>
                                        </ul>
                                        <!-- end sub menu item  -->
                                    </li>
                                    <!-- end sub menu column  -->
                                </ul>
                                <!-- end sub menu -->
                            </div>
                        </li>
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
<!-- start slider section -->
<section class="no-padding wow fadeIn no-transition">
    <div id="rev_slider_1174_1_wrapper" class="rev_slider_wrapper fullscreen-container rev-slider" data-alias="inspiration-header" data-source="gallery" style="background-color:transparent;padding:0px;">
        <!-- start revolution slider 5.4.1 fullscreen mode -->
        <div id="rev_slider_1174_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
            <ul>	<!-- slide -->
                <li data-index="rs-3238" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="500"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- main image -->
                    <img src="{{ asset('assets/front/images/transparent.png') }}" data-bgcolor="#e0e0e0" alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <!-- layers -->

                    <!-- layer nr. 1 -->
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-8" 
                            id="slide-3238-layer-4" 
                            data-x="['left','left','left','left']" data-hoffset="['-264','-264','-371','-416']" 
                            data-y="['top','top','top','top']" data-voffset="['-100','-100','-150','-180']" 
                            data-width="none"
                            data-height="none"
                            data-whitespace="['nowrap','nowrap','nowrap','normal']" 

                            data-type="image" 
                            data-basealign="slide" 
                            data-responsive_offset="on" 

                            data-frames='[{"from":"x:left;rZ:-90deg;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 5;border-width:0px;"><img src="{{ asset('assets/front/images/header_penpot.png') }}" alt="" data-ww="['650px','650px','650px','650px']" data-hh="['500px','500px','500px','500px']" width="650" height="500" data-no-retina> </div>

                    <!-- layer nr. 2 -->
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-9" 
                            id="slide-3238-layer-5" 
                            data-x="['right','right','right','right']" data-hoffset="['40','40','-70','-144']" 
                            data-y="['top','top','top','top']" data-voffset="['-100','-100','-80','-100']" 
                            data-width="none"
                            data-height="none"
                            data-whitespace="['nowrap','nowrap','nowrap','normal']" 

                            data-type="image" 
                            data-basealign="slide" 
                            data-responsive_offset="on" 

                            data-frames='[{"from":"x:right;y:-500px;rZ:90deg;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 6;border-width:0px;"><img src="{{ asset('assets/front/images/header_flowerpot.png') }}" alt="" data-ww="['550px','550px','550px','550px']" data-hh="['471px','471px','471px','471px']" width="550" height="471" data-no-retina> </div>

                    <!-- layer nr. 3 -->
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-10" 
                            id="slide-3238-layer-6" 
                            data-x="['left','left','left','left']" data-hoffset="['-372','-372','-540','-638']" 
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-484','-484','-520','-522']" 
                            data-width="none"
                            data-height="none"
                            data-whitespace="['nowrap','nowrap','nowrap','normal']" 

                            data-type="image" 
                            data-basealign="slide" 
                            data-responsive_offset="on" 

                            data-frames='[{"from":"x:left;rZ:45deg;","speed":2500,"to":"o:1;","delay":650,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 7;border-width:0px;"><img src="{{ asset('assets/front/images/header_papers.png') }}" alt="" data-ww="['900px','900px','900px','900px']" data-hh="['1000px','1000px','1000px','1000px']" width="900" height="1000" data-no-retina> </div>

                    <!-- layer nr. 4 -->
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-12" 
                            id="slide-3238-layer-9" 
                            data-x="['left','left','left','left']" data-hoffset="['134','134','-2','-57']" 
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['67','67','50','6']" 
                            data-width="none"
                            data-height="none"
                            data-whitespace="['nowrap','nowrap','nowrap','normal']" 

                            data-type="image" 
                            data-basealign="slide" 
                            data-responsive_offset="on" 

                            data-frames='[{"from":"y:bottom;rZ:90deg;","speed":1500,"to":"o:1;","delay":1050,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 8;border-width:0px;"><img src="{{ asset('assets/front/images/header_marker.png') }}" alt="" data-ww="['200px','200px','200px','200px']" data-hh="['300px','300px','300px','300px']" width="200" height="300" data-no-retina> </div>

                    <!-- layer nr. 5 -->
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-11" 
                            id="slide-3238-layer-10" 
                            data-x="['left','left','left','left']" data-hoffset="['181','181','30','-39']" 
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-170','-170','-190','-212']" 
                            data-width="none"
                            data-height="none"
                            data-whitespace="['nowrap','nowrap','nowrap','normal']" 

                            data-type="image" 
                            data-basealign="slide" 
                            data-responsive_offset="on" 

                            data-frames='[{"from":"y:bottom;rZ:-90deg;","speed":1500,"to":"o:1;","delay":1250,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 9;border-width:0px;"><img src="{{ asset('assets/front/images/header_edding.png') }}" alt="" data-ww="['300px','300px','300px','300px']" data-hh="['400px','400px','400px','400px']" width="300" height="400" data-no-retina> </div>

                    <!-- layer nr. 6 -->
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-12" 
                            id="slide-3238-layer-11" 
                            data-x="['left','left','left','left']" data-hoffset="['393','393','201','81']" 
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['218','218','183','191']" 
                            data-width="none"
                            data-height="none"
                            data-whitespace="['nowrap','nowrap','nowrap','normal']" 

                            data-type="image" 
                            data-basealign="slide" 
                            data-responsive_offset="on" 

                            data-frames='[{"from":"y:bottom;rZ:-90deg;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 10;border-width:0px;"><img src="{{ asset('assets/front/images/header_paperclip.png') }}" alt="" data-ww="['50px','50px','50px','50px']" data-hh="['100px','100px','100px','100px']" width="50" height="100" data-no-retina> </div>

                    <!-- layer nr. 7 -->
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-11" 
                            id="slide-3238-layer-12" 
                            data-x="['left','left','left','left']" data-hoffset="['346','346','165','36']" 
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['255','255','237','231']" 
                            data-width="none"
                            data-height="none"
                            data-whitespace="['nowrap','nowrap','nowrap','normal']" 

                            data-type="image" 
                            data-basealign="slide" 
                            data-responsive_offset="on" 

                            data-frames='[{"from":"y:bottom;rZ:90deg;","speed":2000,"to":"o:1;rZ:310;","delay":550,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 11;border-width:0px;"><img src="{{ asset('assets/front/images/header_paperclip.png') }}" alt="" data-ww="['50px','50px','50px','50px']" data-hh="['100px','100px','100px','100px']" width="50" height="100" data-no-retina> </div>

                    <!-- layer nr. 8 -->
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-9" 
                            id="slide-3238-layer-7" 
                            data-x="['right','right','right','right']" data-hoffset="['-364','-364','-479','-553']" 
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-155','-155','-180','-202']" 
                            data-width="none"
                            data-height="none"
                            data-whitespace="['nowrap','nowrap','nowrap','normal']" 

                            data-type="image" 
                            data-basealign="slide" 
                            data-responsive_offset="on" 

                            data-frames='[{"from":"x:right;rZ:-65deg;","speed":1500,"to":"o:1;","delay":700,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 12;border-width:0px;"><img src="{{ asset('assets/front/images/header_tablet.png') }}" alt="" data-ww="['730px','730px','730px','730px']" data-hh="['520px','520px','520px','520px']" width="730" height="520" data-no-retina> </div>

                    <!-- layer nr. 9 -->
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-11" 
                            id="slide-3238-layer-8" 
                            data-x="['right','right','right','right']" data-hoffset="['222','222','105','8']" 
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['8','8','-17','-10']" 
                            data-width="none"
                            data-height="none"
                            data-whitespace="['nowrap','nowrap','nowrap','normal']" 

                            data-type="image" 
                            data-basealign="slide" 
                            data-responsive_offset="on" 

                            data-frames='[{"from":"x:right;rZ:90deg;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 13;border-width:0px;"><img src="{{ asset('assets/front/images/header_pen.png') }}" alt="" data-ww="['300px','300px','300px','300px']" data-hh="['500px','500px','500px','500px']" width="300" height="500" data-no-retina> </div>

                    <!-- layer nr. 10 -->
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-2" 
                            id="slide-3238-layer-1" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-60','-90']" 
                            data-fontsize="['70','70','70','50']"
                            data-lineheight="['80','80','80','60']"
                            data-width="['none','none','none','360']"
                            data-height="none"
                            data-whitespace="['nowrap','nowrap','nowrap','normal']"

                            data-type="text" 
                            data-responsive_offset="on" 

                            data-frames='[{"from":"y:-50px;rX:-45deg;sX:2;sY:2;opacity:0;","speed":1500,"to":"o:1;","delay":510,"ease":"Power4.easeOut"},{"delay":640,"speed":600,"to":"y:30px;rX:45deg;sX:0.8;sY:0.8;opacity:0;","ease":"Power2.easeInOut"}]'
                            data-textAlign="['center','center','center','center']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"><span class="alt-font text-extra-dark-gray head-text font-weight-700">Be Inspired</span></div>

                    <!-- layer nr. 11 -->
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-2" 
                            id="slide-3238-layer-15" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-60','-90']" 
                            data-fontsize="['70','70','70','50']"
                            data-lineheight="['80','80','80','60']"
                            data-width="['none','none','none','360']"
                            data-height="none"
                            data-whitespace="['nowrap','nowrap','nowrap','normal']"

                            data-type="text" 
                            data-responsive_offset="on" 

                            data-frames='[{"from":"y:-50px;rX:-45deg;sX:2;sY:2;opacity:0;","speed":1500,"to":"o:1;","delay":2940,"ease":"Power4.easeOut"},{"delay":660,"speed":600,"to":"y:30px;rX:45deg;sX:0.8;sY:0.8;opacity:0;","ease":"Power2.easeInOut"}]'
                            data-textAlign="['center','center','center','center']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"><span class="alt-font text-extra-dark-gray head-text font-weight-700">Be Brave</span></div>

                    <!-- layer nr. 12 -->
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-2" 
                            id="slide-3238-layer-16" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-60','-90']" 
                            data-fontsize="['70','70','70','50']"
                            data-lineheight="['80','80','80','60']"
                            data-width="['none','none','none','400']"
                            data-height="none"
                            data-whitespace="['nowrap','nowrap','nowrap','normal']"

                            data-type="text" 
                            data-responsive_offset="on" 

                            data-frames='[{"from":"y:-50px;rX:-45deg;sX:2;sY:2;opacity:0;","speed":1500,"to":"o:1;","delay":5390,"ease":"Power4.easeOut"},{"delay":"wait","speed":600,"to":"y:30px;rX:45deg;sX:0.8;sY:0.8;opacity:0;","ease":"Power2.easeInOut"}]'
                            data-textAlign="['center','center','center','center']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"><span class="alt-font text-extra-dark-gray head-text font-weight-700">Be Branding</span></div>

                    <!-- layer nr. 13 -->
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-2" 
                            id="slide-3238-layer-2" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['10','10','10','-10']" 
                            data-fontsize="['16','16','16','20']"
                            data-lineheight="['20','20','20','30']"
                            data-width="['none','none','none','360']"
                            data-height="none"
                            data-whitespace="['nowrap','nowrap','nowrap','normal']"

                            data-type="text" 
                            data-responsive_offset="on" 

                            data-frames='[{"from":"y:50px;rX:45deg;sX:2;sY:2;opacity:0;","speed":1500,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                            data-textAlign="['center','center','center','center']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 17; white-space: nowrap; line-height: 20px; font-weight: 400; font-family:Roboto;border-width:0px;">Lorem Ipsum is simply dummy text of the printing</div>

                    <!-- layer nr. 14 -->
                    <a class="tp-caption rev-btn  rs-parallaxlevel-3" target="_blank" href="https://themeforest.net/item/pofo-creative-agency-corporate-and-portfolio-multipurpose-template/20645944?ref=themezaa"
                        id="slide-3238-layer-3" 
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['70','70','70','70']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="['nowrap','nowrap','nowrap','normal']" 

                        data-type="button"
                        data-responsive_offset="on" 
                        data-responsive="off"
                        data-frames='[{"from":"y:100px;rX:90deg;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"150","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bg:rgba(0, 0, 0, 1.00);bs:solid;"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[24,24,24,24]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[24,24,24,24]"

                        style="z-index: 18; white-space: nowrap; font-size: 13px; line-height: 40px; font-weight: 700; color: #fff;font-family:Roboto;background-color:#ff214f;border-color:rgba(0, 0, 0, 1.00);border-width:0px;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; text-transform: uppercase"><span class="alt-font">download now</span></a>

                    <!-- layer nr. 15 -->
                    <div class="tp-caption rev-scroll-btn revs-dark  rs-parallaxlevel-5" 
                            id="slide-3238-layer-13" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','50','50']" 
                            data-width="30"
                            data-height="45"
                            data-whitespace="['nowrap','nowrap','nowrap','normal']" 

                            data-type="button" 
                            data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":"","speed":1000}]'
                            data-basealign="slide" 
                            data-responsive_offset="on" 
                            data-responsive="off"
                            data-frames='[{"from":"y:-50px;opacity:0;","speed":1500,"to":"o:1;","delay":800,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 19; min-width: 35px; max-width: 35px; max-width: 55px; max-width: 55px; white-space: nowrap; font-size: px; line-height: px; font-weight: 400;border-color:rgba(0, 0, 0, 1.00);border-style:solid;border-width:2px;border-radius:23px 23px 23px 23px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                        <span></span>												
                    </div>
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	</div>
    </div>
</section>
<!-- end slider section --> 
<!-- start blog section -->
<section id="creative" class="wow fadeIn" style="background: url(http://placehold.it/1920x1096)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-4 col-md-8 text-center text-lg-left md-margin-40px-bottom sm-margin-30px-bottom wow fadeIn last-paragraph-no-margin">
                <p class="alt-font font-weight-600 text-small text-uppercase text-deep-pink margin-10px-bottom">Easy way to build websites</p>
                <h5 class="alt-font font-weight-600 text-extra-dark-gray width-95 md-width-100 sm-margin-15px-bottom">Perfect powerful theme for creatives designer people.</h5>
                <p class="width-85 md-width-100">Pofo provides a large collection of home and inner pages, carefully crafted elements, and easily customizable templates.</p>
                <a class="btn btn-dark-gray btn-small margin-30px-top md-margin-20px-top sm-margin-15px-top" href="about-us-simple.html">About Company</a>
            </div>
            <div class="col-12 col-lg-8">
                <div class="row blog-post">
                    <!-- start blog post item -->
                    <div class="col-12 col-md-6 wow fadeIn sm-margin-30px-bottom last-paragraph-no-margin" data-wow-delay="0.2s">
                        <div class="blog-post-images overflow-hidden margin-25px-bottom sm-margin-15px-bottom">
                            <img src="http://placehold.it/800x458" alt="">
                        </div>
                        <div class="separator-line-verticle-small-thick bg-deep-pink d-none d-md-inline-block align-top margin-two-half-top margin-four-right"></div>
                        <div class="post-details width-90 d-inline-block sm-width-100 text-center text-md-left">
                            <span class="alt-font margin-5px-bottom d-block text-extra-dark-gray font-weight-600">Marketing Strategy</span>
                            <p>Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>
                    </div>
                    <!-- end blog post item -->
                    <!-- start blog post item -->
                    <div class="col-12 col-md-6 wow fadeIn last-paragraph-no-margin" data-wow-delay="0.4s">
                        <div class="blog-post-images overflow-hidden margin-25px-bottom sm-margin-15px-bottom">
                            <img src="http://placehold.it/800x458" alt="">
                        </div>
                        <div class="separator-line-verticle-small-thick bg-deep-pink d-none d-md-inline-block align-top margin-two-half-top margin-four-right"></div>
                        <div class="post-details width-90 d-inline-block sm-width-100 text-center text-md-left">
                            <span class="alt-font margin-5px-bottom d-block text-extra-dark-gray font-weight-600">Web Development </span>
                            <p>Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>
                    </div>
                    <!-- end blog post item -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end blog section -->
<!-- start feature box section -->
<section class="parallax wow fadeIn" data-stellar-background-ratio="0.2" style="background-image:url('http://placehold.it/1920x1322');">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container position-relative z-index-5">
        <div class="row">
            <!-- start feature box item -->
            <div class="col-12 col-lg-2 col-md-4 wow zoomIn last-paragraph-no-margin">
                <div class="text-center padding-eighteen-all feature-box-13 position-relative lg-padding-ten-all md-padding-25px-all sm-padding-eight-all">
                    <i class="icon-scissors text-medium-gray icon-medium margin-15px-bottom sm-margin-10px-bottom"></i>
                    <p class="text-medium text-extra-light-gray alt-font">Live website builder</p>
                    <div class="feature-box-overlay bg-deep-pink"></div>
                </div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col-12 col-lg-2 col-md-4 wow zoomIn last-paragraph-no-margin" data-wow-delay="0.2s">
                <div class="text-center padding-eighteen-all feature-box-13 position-relative lg-padding-ten-all md-padding-25px-all sm-padding-eight-all">
                    <i class="icon-expand text-medium-gray icon-medium margin-15px-bottom sm-margin-10px-bottom"></i>
                    <p class="text-medium text-extra-light-gray alt-font">Visual page builder</p>
                    <div class="feature-box-overlay bg-deep-pink"></div>
                </div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col-12 col-lg-2 col-md-4 wow zoomIn last-paragraph-no-margin" data-wow-delay="0.4s">
                <div class="text-center padding-eighteen-all feature-box-13 position-relative lg-padding-ten-all md-padding-25px-all sm-padding-eight-all">
                    <i class="icon-layers text-medium-gray icon-medium margin-15px-bottom sm-margin-10px-bottom"></i>
                    <p class="text-medium text-extra-light-gray alt-font">Modern framework</p>
                    <div class="feature-box-overlay bg-deep-pink"></div>
                </div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col-12 col-lg-2 col-md-4 wow zoomIn last-paragraph-no-margin" data-wow-delay="0.6s">
                <div class="text-center padding-eighteen-all feature-box-13 position-relative lg-padding-ten-all md-padding-25px-all sm-padding-eight-all">
                    <i class="icon-tools text-medium-gray icon-medium margin-15px-bottom sm-margin-10px-bottom"></i>
                    <p class="text-medium text-extra-light-gray alt-font">Creative elements</p>
                    <div class="feature-box-overlay bg-deep-pink"></div>
                </div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col-12 col-lg-2 col-md-4 wow zoomIn last-paragraph-no-margin" data-wow-delay="0.8s">
                <div class="text-center padding-eighteen-all feature-box-13 position-relative lg-padding-ten-all md-padding-25px-all sm-padding-eight-all">
                    <i class="icon-adjustments text-medium-gray icon-medium margin-20px-bottom sm-margin-10px-bottom"></i>
                    <p class="text-medium text-extra-light-gray alt-font">Unique shortcodes</p>
                    <div class="feature-box-overlay bg-deep-pink"></div>
                </div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col-12 col-lg-2 col-md-4 wow zoomIn last-paragraph-no-margin" data-wow-delay="1s">
                <div class="text-center padding-eighteen-all feature-box-13 position-relative lg-padding-ten-all md-padding-25px-all sm-padding-eight-all">
                    <i class="icon-pictures text-medium-gray icon-medium margin-20px-bottom sm-margin-10px-bottom"></i>
                    <p class="text-medium text-extra-light-gray alt-font">Unlimited layouts</p>
                    <div class="feature-box-overlay bg-deep-pink"></div>
                </div>
            </div>
            <!-- end feature box item -->
        </div>
    </div>
</section>
<!-- end feature box section -->
<!-- start information section --> 
<section class="cover-background pb-0 sm-padding-50px-bottom wow fadeIn" style="background: url(http://placehold.it/1920x1120)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-9 col-lg-7 col-md-11 text-center">
                <h4 class="alt-font text-white-2 mx-auto sm-width-100 sm-margin-15px-bottom">Beautiful and easy to understand UI, professional animations and drag &amp; drop</h4>
                <p class="mx-auto sm-width-100 sm-margin-25px-bottom">With years of experience in the website design and development industry ThemeZaa pride ourselves on creating unique, creative and quality designs that are developed upon the latest modern coding and developing techniques, which are then built using the most up to date, structured coding framework so that your development team can take it to the next level with ease.</p>
            </div>
            <div class="col-12 text-center height-650px overflow-hidden lg-height-auto md-bottom--minus50 lg-position-relative wow fadeIn sm-bottom-0">
                <img src="{{ asset('assets/front/images/homepage-option15-image-3.png') }}" alt="" />
            </div>
        </div>
    </div>
</section>
<!-- end information section --> 
<!-- start portfolio section -->
<section class="pb-0 wow fadeIn">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-5 col-lg-7 col-md-8 margin-five-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">Our recent works</div>
                <h5 class="alt-font text-extra-dark-gray font-weight-600 width-60 mx-auto lg-width-80 sm-width-100 mb-0">New stunning projects for our amazing clients</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 sm-no-padding">
                <div class="filter-content overflow-hidden">
                    <ul class="portfolio-grid portfolio-metro-grid work-6col hover-option4 gutter-small">
                        <li class="grid-sizer"></li>
                        @isset($getProject)
                            @foreach ($getProject as $project)
                                <!-- start portfolio item -->
                                <li class="grid-item wow fadeInUp">
                                    <a href="single-project-page-01.html">
                                        <figure>
                                            <div class="portfolio-img bg-extra-dark-gray"><img src="{{ asset('storage/images/' . $project->image) }}" alt=""/></div>
                                            <figcaption>
                                                <div class="portfolio-hover-main text-center">
                                                    <div class="portfolio-hover-box vertical-align-middle">
                                                        <div class="portfolio-hover-content position-relative last-paragraph-no-margin">
                                                            <span class="font-weight-600 line-height-normal alt-font text-white-2 text-uppercase margin-5px-bottom display-block">{{ $project->name }}</span>
                                                            <p class="text-medium-gray text-uppercase text-extra-small">{{ $project->short_description }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <!-- end portfolio item -->
                            @endforeach
                        @endisset
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end portfolio section -->
<!-- start section -->
<section class="wow fadeIn">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-5 col-md-11 padding-five-right md-margin-70px-bottom text-center text-lg-left md-padding-15px-lr sm-margin-50px-bottom wow fadeIn">
                <p class="alt-font text-deep-pink margin-10px-bottom">Easy way to build perfect websites</p>
                <h5 class="alt-font font-weight-600 text-extra-dark-gray">The best theme I've used so far that has the best customer support. </h5>
                <p>With years of experience in the website design and development industry ThemeZaa pride ourselves on creating unique, creative and quality designs that are developed upon the latest modern coding and developing techniques, which are then built using the most up to date, structured coding framework so that your development team can take it to the next level with ease.</p>
                <a class="btn btn-dark-gray btn-small" href="https://themeforest.net/item/pofo-creative-agency-corporate-and-portfolio-multipurpose-template/20645944?ref=themezaa" target="_blank">Discover Theme</a>
            </div>
            <div class="col-12 col-lg-7 padding-five-lr md-padding-15px-lr">
                <div class="row m-0">
                    <!-- start features box item -->
                    <div class="col-12 col-md-6 margin-30px-bottom text-center text-lg-left wow fadeInUp last-paragraph-no-margin">
                        <i class="icon-desktop icon-extra-medium text-deep-pink margin-15px-bottom"></i>
                        <div class="alt-font text-extra-dark-gray font-weight-600 margin-5px-bottom">Unique Design</div>
                        <p class="width-85 lg-width-90 md-width-100">Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum standard dummy.</p>
                    </div>
                    <!-- end feature box item -->
                    <!-- start features box item -->
                    <div class="col-12 col-md-6 margin-30px-bottom text-center text-lg-left wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                        <i class="icon-tools icon-extra-medium text-deep-pink margin-15px-bottom"></i>
                        <div class="alt-font text-extra-dark-gray font-weight-600 margin-5px-bottom">Different Layout</div>
                        <p class="width-85 lg-width-90 md-width-100">Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum standard dummy.</p>
                    </div>
                    <!-- end feature box item -->
                    <!-- start features box item -->
                    <div class="col-12 col-md-6 wow fadeInUp sm-margin-30px-bottom text-center text-lg-left last-paragraph-no-margin" data-wow-delay="0.4s">
                        <i class="icon-target icon-extra-medium text-deep-pink margin-15px-bottom"></i>
                        <div class="alt-font text-extra-dark-gray font-weight-600 margin-5px-bottom">Portfolio Styles</div>
                        <p class="width-85 lg-width-90 md-width-100">Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum standard dummy.</p>
                    </div>
                    <!-- end feature box item -->
                    <!-- start features box item -->
                    <div class="col-12 col-md-6 wow fadeInUp last-paragraph-no-margin text-center text-lg-left" data-wow-delay="0.6s">
                        <i class="icon-laptop icon-extra-medium text-deep-pink margin-15px-bottom"></i>
                        <div class="alt-font text-extra-dark-gray font-weight-600 margin-5px-bottom">WordPress Theme</div>
                        <p class="width-85 lg-width-90 md-width-100">Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum standard dummy.</p>
                    </div>
                    <!-- end feature box item -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start feature box section -->
<section class="p-0 wow fadeIn bg-extra-dark-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 cover-background md-height-500px sm-height-350px wow fadeIn" style="background-image:url('http://placehold.it/960x668');"><div class="sm-height-400px"></div></div>
            <div class="col-12 col-lg-6 padding-five-tb padding-five-half-lr lg-padding-50px-tb md-padding-70px-tb md-padding-15px-lr wow fadeIn">
                <div class="row m-0">
                    <div class="col-12 margin-four-bottom lg-margin-six-bottom md-margin-40px-bottom sm-margin-30px-bottom sm-no-padding-lr text-center text-md-left">
                        <h4 class="alt-font text-white-2 text-center text-lg-left md-width-70 mx-auto mx-lg-0 md-no-margin-bottom sm-width-100">Unique, truly responsive and functional websites</h4>
                    </div>
                    <!-- start feature box item -->
                    <div class="col-12 col-xl-6 col-lg-12 col-md-6 margin-six-bottom md-margin-30px-bottom sm-no-padding last-paragraph-no-margin text-center text-md-left">
                        <div class="text-light-gray margin-10px-bottom md-margin-5px-bottom alt-font"><span class="text-deep-pink margin-15px-right float-left text-large d-block d-md-inline-block sm-width-100">01.</span>Elegant / Unique design</div>
                        <p>Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-12 col-xl-6 col-lg-12 col-md-6 margin-six-bottom md-margin-30px-bottom sm-no-padding last-paragraph-no-margin text-center text-md-left">
                        <div class="text-light-gray margin-10px-bottom md-margin-5px-bottom alt-font"><span class="text-deep-pink margin-15px-right float-left text-large d-block d-md-inline-block sm-width-100">02.</span>Different Layout Type</div>
                        <p>Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-12 col-xl-6 col-lg-12 col-md-6 lg-margin-six-bottom md-no-margin-bottom sm-margin-30px-bottom sm-no-padding last-paragraph-no-margin text-center text-md-left">
                        <div class="text-light-gray margin-10px-bottom md-margin-5px-bottom alt-font"><span class="text-deep-pink margin-15px-right float-left text-large d-block d-md-inline-block sm-width-100">03.</span>Make it Simple</div>
                        <p>Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-12 col-xl-6 col-lg-12 col-md-6 md-no-margin-bottom sm-no-padding last-paragraph-no-margin text-center text-md-left">
                        <div class="text-light-gray margin-10px-bottom md-margin-5px-bottom alt-font"><span class="text-deep-pink margin-15px-right float-left text-large d-block d-md-inline-block sm-width-100">04.</span>True Responsiveness</div>
                        <p>Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                    <!-- end feature box item -->
                </div>
            </div> 
        </div>
    </div>
</section>
<!-- end feature box section -->
<!-- start counter section -->
<section class="wow fadeIn">
    <div class="container">
        <div class="row">
            <!-- start counter item-->
            <div class="col-12 col-lg-3 col-md-6 text-center md-margin-30px-bottom wow fadeInUp">
                <div class="counter-feature-box-1 w-100 border-all padding-5px-all">
                    <div class="counter-box bg-white d-flex justify-content-center flex-column h-100">
                        <i class="icon-heart icon-medium text-medium-gray margin-15px-bottom"></i>
                        <h6 class="d-block font-weight-600 text-extra-dark-gray alt-font mb-0 timer" data-speed="2000" data-to="4650">4650</h6>
                        <span>Happy Clients</span>
                    </div>
                </div>
            </div>
            <!-- end counter item-->
            <!-- start counter item-->
            <div class="col-12 col-lg-3 col-md-6 text-center md-margin-30px-bottom wow fadeInUp" data-wow-delay="0.2s">
                <div class="counter-feature-box-1 w-100 border-all padding-5px-all">
                    <div class="counter-box bg-white d-flex justify-content-center flex-column h-100">
                        <i class="icon-laptop icon-medium text-medium-gray margin-15px-bottom"></i>
                        <h6 class="d-block font-weight-600 text-extra-dark-gray alt-font mb-0 timer" data-speed="2000" data-to="3790">3790</h6>
                        <span>Project Completed</span>
                    </div>
                </div>
            </div>
            <!-- end counter item-->
            <!-- start counter item-->
            <div class="col-12 col-lg-3 col-md-6 text-center sm-margin-30px-bottom wow fadeInUp" data-wow-delay="0.4s">
                <div class="counter-feature-box-1 w-100 border-all padding-5px-all">
                    <div class="counter-box bg-white d-flex justify-content-center flex-column h-100">
                        <i class="icon-camera icon-medium text-medium-gray margin-15px-bottom"></i>
                        <h6 class="d-block font-weight-600 text-extra-dark-gray alt-font mb-0 timer" data-speed="2000" data-to="5580">5580</h6>
                        <span>Photo Capture</span>
                    </div>
                </div>
            </div>
            <!-- end counter item-->
            <!-- start counter item-->
            <div class="col-12 col-lg-3 col-md-6 text-center wow fadeInUp" data-wow-delay="0.6s">
                <div class="counter-feature-box-1 w-100 border-all padding-5px-all">
                    <div class="counter-box bg-white d-flex justify-content-center flex-column h-100">
                        <i class="icon-chat icon-medium text-medium-gray margin-15px-bottom"></i>
                        <h6 class="d-block font-weight-600 text-extra-dark-gray alt-font mb-0 timer" data-speed="2000" data-to="8580">8580</h6>
                        <span>Telephonic Talk</span>
                    </div>
                </div>
            </div>
            <!-- end counter item-->
        </div>
    </div>            
</section>
<!-- end counter section -->
<!-- start hover box section -->
<section class="p-0 wow fadeIn">
    <div class="container-fluid">
        <div class="row">
            <!-- start box item -->
            <div class="col-12 col-lg-4 d-flex align-items-center justify-content-center p-0 cover-background position-relative wow fadeIn md-height-400px sm-height-350px" style="background: url(http://placehold.it/900x637)">
                <div class="opacity-medium bg-extra-dark-gray"></div>
                <div class="position-relative padding-twelve-all text-center text-lg-left md-padding-five-all md-width-70 sm-width-90">
                    <div class="alt-font text-deep-pink margin-15px-bottom"><span class="border-bottom border-color-deep-pink border-width-2">Custom made shortcodes</span></div>
                    <h5 class="alt-font text-white-2 width-75 margin-20px-bottom lg-width-100 md-margin-15px-bottom">Intuitive custom made shortcodes</h5>
                    <p class="text-light-gray width-70 lg-width-100">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    <a class="btn btn-white btn-very-small" href="accordions.html">All Shortcodes</a>
                </div>
            </div>
            <!-- end box item -->
            <!-- start box item -->
            <div class="col-12 col-lg-4 d-flex align-items-center justify-content-center p-0 cover-background position-relative wow fadeIn md-height-400px sm-height-350px" style="background: url(http://placehold.it/640x453)">
                <div class="opacity-medium bg-deep-pink"></div>
                <div class="position-relative text-center">
                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                        <div class="icon-play">
                            <img src="{{ asset('assets/front/images/icon-play-white.png') }}" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <!-- end box item -->
            <!-- start box item -->
            <div class="col-12 col-lg-4 d-flex align-items-center justify-content-center p-0 cover-background position-relative wow fadeIn md-height-400px" style="background: url(http://placehold.it/900x637)">
                <div class="opacity-medium bg-extra-dark-gray"></div>
                <div class="position-relative padding-twelve-all text-center text-lg-left md-padding-five-all md-width-70 sm-width-90">
                    <div class="alt-font text-deep-pink margin-15px-bottom"><span class="border-bottom border-color-deep-pink border-width-2">Main theme advantages</span></div>
                    <h5 class="alt-font text-white-2 width-75 margin-20px-bottom lg-width-100 md-margin-15px-bottom">Pixel perfect design and clear code</h5>
                    <p class="text-light-gray width-70 lg-width-100">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    <a class="btn btn-white btn-very-small" href="services-classic.html">More Advantages</a>
                </div>
            </div>
            <!-- end box item -->
        </div>
    </div>
</section>
<!-- end hover box section -->
<!-- start features box section -->
<section class="wow fadeIn">
    <div class="container">
        <div class="row">
            <!-- start features box item -->
            <div class="col-12 col-lg-4 sm-margin-five-bottom wow fadeInRight md-margin-30px-bottom last-paragraph-no-margin">
                <div class="icon-box d-table w-100 mx-auto mx-lg-0 margin-15px-bottom">
                    <div class="icon-box-holder align-middle d-table-cell position-relative h-auto last-paragraph-no-margin">
                        <i class="icon-chat icon-medium text-deep-pink padding-5px-top"></i>
                        <span class="alt-font text-medium-gray text-small">Discussion of the Idea</span>
                        <p class="text-extra-dark-gray alt-font font-weight-600">Elegant / Unique design</p>
                    </div>
                </div>
                <p class="width-90 sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been standard dummy text ever since. Lorem Ipsum been the industry. Lorem Ipsum has been.</p>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col-12 col-lg-4 sm-margin-five-bottom wow fadeInRight md-margin-30px-bottom last-paragraph-no-margin" data-wow-delay="0.2s">
                <div class="icon-box d-table w-100 mx-auto mx-lg-0 margin-15px-bottom">
                    <div class="icon-box-holder align-middle d-table-cell position-relative h-auto last-paragraph-no-margin">
                        <i class="icon-toolbox icon-medium text-deep-pink padding-5px-top"></i>
                        <span class="alt-font text-medium-gray text-small">Handcrafted Templates</span>
                        <p class="text-extra-dark-gray alt-font font-weight-600">Different Layout Type</p>
                    </div>
                </div>
                <p class="width-90 sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been standard dummy text ever since. Lorem Ipsum been the industry. Lorem Ipsum has been.</p>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col-12 col-lg-4 wow fadeInRight last-paragraph-no-margin" data-wow-delay="0.4s">
                <div class="icon-box d-table w-100 mx-auto mx-lg-0 margin-15px-bottom">
                    <div class="icon-box-holder align-middle d-table-cell position-relative h-auto last-paragraph-no-margin">
                        <i class="icon-bargraph icon-medium text-deep-pink padding-5px-top"></i>
                        <span class="alt-font text-medium-gray text-small">Testing for Perfection</span>
                        <p class="text-extra-dark-gray alt-font font-weight-600">True Responsiveness</p>
                    </div>
                </div>
                <p class="width-90 sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been standard dummy text ever since. Lorem Ipsum been the industry. Lorem Ipsum has been.</p>
            </div>
            <!-- end features box item -->
        </div>
    </div>
</section>
<!-- end features box section -->
<!-- start blog section -->
<section class="bg-light-gray wow fadeIn hover-option4 blog-post-style3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 margin-five-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">Our recent Blogs</div>
                <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0 width-65 mx-auto lg-width-80 sm-width-100">Publish what you think, don't put it on social media</h5>
            </div>
        </div>
        <div class="row">
            <!-- start blog item -->
            <div class="grid-item col-12  col-lg-4 col-md-6 margin-30px-bottom text-center text-md-left wow fadeInUp">
                <div class="blog-post bg-white">
                    <div class="blog-post-images overflow-hidden position-relative">
                        <a href="blog-post-layout-01.html">
                            <img src="http://placehold.it/700x403" alt="">
                            <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                        </a>
                    </div>
                    <div class="post-details padding-40px-all md-padding-20px-all">
                        <a href="blog-post-layout-01.html" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block margin-15px-bottom">I find modernist design boring, but it so much faster!</a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
                        <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                        <div class="author">
                            <span class="text-medium-gray text-uppercase text-extra-small d-lg-inline-block d-block md-margin-10px-top">by <a href="blog-masonry.html" class="text-medium-gray">Jay Benjamin</a>&nbsp;&nbsp;|&nbsp;&nbsp;13 May 2017</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end blog item -->
            <!-- start blog item -->
            <div class="grid-item col-12  col-lg-4 col-md-6 margin-30px-bottom text-center text-md-left wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-post bg-white">
                    <div class="blog-post-images overflow-hidden position-relative">
                        <a href="blog-post-layout-02.html">
                            <img src="http://placehold.it/700x403" alt="">
                            <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                        </a>
                    </div>
                    <div class="post-details padding-40px-all md-padding-20px-all">
                        <a href="blog-post-layout-02.html" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block margin-15px-bottom">Being a famous designer is like being a famous dentist.</a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
                        <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                        <div class="author">
                            <span class="text-medium-gray text-uppercase text-extra-small d-lg-inline-block d-block md-margin-10px-top">by <a href="blog-masonry.html" class="text-medium-gray">Herman Miller</a>&nbsp;&nbsp;|&nbsp;&nbsp;29 April 2017</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end blog item -->
            <!-- start blog item -->
            <div class="grid-item col-12  col-lg-4 col-md-6 margin-30px-bottom text-center text-md-left wow fadeInUp" data-wow-delay="0.4s">
                <div class="blog-post bg-white">
                    <div class="blog-post-images overflow-hidden position-relative">
                        <a href="blog-post-layout-03.html">
                            <img src="http://placehold.it/700x403" alt="">
                            <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                        </a>
                    </div>
                    <div class="post-details padding-40px-all md-padding-20px-all">
                        <a href="blog-post-layout-03.html" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block margin-15px-bottom">Designers are meant to be loved, not to be understood.</a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy....</p>
                        <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                        <div class="author">
                            <span class="text-medium-gray text-uppercase text-extra-small d-lg-inline-block d-block md-margin-10px-top">by <a href="blog-masonry.html" class="text-medium-gray">Hugh Macleod</a>&nbsp;&nbsp;|&nbsp;&nbsp;18 April 2017</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end blog item -->
        </div>
    </div>
</section>
<!-- end blog section -->
<!-- start footer --> 
<footer class="footer-classic-dark bg-extra-dark-gray padding-five-bottom sm-padding-30px-bottom">
    <div class="bg-dark-footer padding-50px-tb sm-padding-30px-tb">
        <div class="container">
            <div class="row align-items-center">
                <!-- start slogan -->
                <div class="col-lg-4 col-md-5 text-center alt-font sm-margin-15px-bottom">
                    London based highly creative studio
                </div>
                <!-- end slogan -->
                <!-- start logo -->
                <div class="col-lg-4 col-md-2 text-center sm-margin-10px-bottom">
                    <a href="index.html"><img class="footer-logo" src="{{ asset('assets/front/images/logo-white.png') }}" data-rjs="{{ asset('assets/front/images/logo-white@2x.png') }}" alt="Pofo"></a>
                </div>
                <!-- end logo -->
                <!-- start social media -->
                <div class="col-lg-4 col-md-5 text-center">
                    <span class="alt-font margin-20px-right">On social networks</span>
                    <div class="social-icon-style-8 d-inline-block vertical-align-middle">
                        <ul class="small-icon mb-0">
                            <li><a class="facebook text-white-2" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li><a class="twitter text-white-2" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="google text-white-2" href="https://plus.google.com" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a class="instagram text-white-2" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram no-margin-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end social media -->
            </div>
        </div>
    </div>
    <div class="footer-widget-area padding-five-top padding-30px-bottom sm-padding-30px-top">
        <div class="container">
            <div class="row">
                <!-- start about -->
                <div class="col-lg-3 col-md-6 widget md-margin-30px-bottom text-center text-md-left last-paragraph-no-margin">
                    <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-15px-bottom font-weight-600">About Agency</div>
                    <p class="text-small width-95 sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum is simply dummy text of the and typesetting industry. </p>
                </div>
                <!-- end about -->
                <!-- start blog post -->
                <div class="col-lg-3 col-md-6 widget md-margin-30px-bottom">
                    <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-15px-bottom font-weight-600 text-center text-md-left">Latest Blog Post</div>
                    <ul class="latest-post position-relative">
                        <li class="media border-bottom border-color-medium-dark-gray">
                            <figure>
                                <a href="blog-post-layout-01.html"><img src="http://placehold.it/700x403" alt=""></a>
                            </figure>
                            <div class="media-body text-small"><a href="blog-post-layout-01.html" class="d-block mb-1">Design is not just what looks...</a> <span class="clearfix"></span>20 April 2017 | by <a href="blog-grid.html">Herman Miller</a></div>
                        </li>
                        <li class="media border-bottom border-color-medium-dark-gray">
                            <figure>
                                <a href="blog-post-layout-02.html"><img src="http://placehold.it/700x403" alt=""></a>
                            </figure>
                            <div class="media-body text-small"><a href="blog-post-layout-02.html" class="d-block mb-1">A lot of care, effort & passion...</a> <span class="clearfix"></span>20 April 2017 | by <a href="blog-grid.html">Herman Miller</a></div>
                        </li>
                        <li class="media">
                            <figure>
                                <a href="blog-post-layout-03.html"><img src="http://placehold.it/700x403" alt=""></a>
                            </figure>
                            <div class="media-body text-small"><a href="blog-post-layout-03.html" class="d-block mb-1">I love making the stuff, that's...</a> <span class="clearfix"></span>20 April 2017 | by <a href="blog-grid.html">Herman Miller</a></div>
                        </li>
                    </ul>
                </div>
                <!-- end blog post -->
                <!-- start newsletter -->
                <div class="col-lg-3 col-md-6 widget md-margin-30px-bottom text-center text-md-left">
                    <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-15px-bottom font-weight-600">Subscribe Newsletter</div>
                    <p class="text-small width-90 sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <form id="subscribenewsletterform" action="javascript:void(0)" method="post">
                        <div class="position-relative newsletter width-95">
                            <div id="success-subscribe-newsletter" class="mx-0"></div>
                            <input type="text" id="email" name="email" class="bg-transparent text-small m-0 border-color-medium-dark-gray" placeholder="Enter your email...">
                            <button id="button-subscribe-newsletter" type="submit" class="btn btn-arrow-small position-absolute border-color-medium-dark-gray"><i class="fas fa-caret-right no-margin-left"></i></button>
                        </div>   
                    </form>
                </div>
                <!-- end newsletter -->
                <!-- start instagram -->
                <div class="col-lg-3 col-md-6 widget md-margin-5px-bottom text-center text-md-left">
                    <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-20px-bottom font-weight-600">Follow us Instagram</div>
                    <div class="instagram-follow-api">
                        <ul id="instaFeed-footer"></ul>
                    </div>
                </div>
                <!-- end instagram -->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-bottom border-top border-color-medium-dark-gray padding-30px-top">
            <div class="row">
                <!-- start copyright -->
                <div class="col-lg-6 col-md-6 text-small text-md-left text-center">POFO - Portfolio Concept Theme</div>
                <div class="col-lg-6 col-md-6 text-small text-md-right text-center">&COPY; 2019 POFO is Proudly Powered by <a href="http://www.themezaa.com" target="_blank" title="ThemeZaa">ThemeZaa</a></div>
                <!-- end copyright -->
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
@endsection
