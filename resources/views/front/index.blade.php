@extends('layouts.front.index')
@section('title')
    {{ $site_name }}
@endsection
@section('content')
{{-- @isset($getProjects)
    @foreach ($getProjects as $project)
        {{ $project->name }}
    @endforeach
@endisset --}}
@include('front.includes.slider')
<!-- start services section -->
<section id="services" class="wow fadeIn" style="background: url(http://www.themezaa.com/html/pofo/images/testimonial-bg.png)">
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
                            <img src="http://www.themezaa.com/html/pofo/images/homepage-option15-image-1.png" alt="">
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
                            <img src="http://www.themezaa.com/html/pofo/images/homepage-option15-image-2.png" alt="">
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
<!-- end services section -->
<!-- start feature box section -->
<section id="feature" class="parallax wow fadeIn" data-stellar-background-ratio="0.2" style="background-image:url('https://www.themezaa.com/html/pofo/images/homepage-option15-image-5.jpg');">
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
<section id="information" class="cover-background pb-0 sm-padding-50px-bottom wow fadeIn" style="background: url('http://www.themezaa.com/html/pofo/images/homepage-option15-bg.jpg')">
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
<section class="pb-0 wow fadeIn" id="portfolio">
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
                                    <a href="project/{{ $project->slug }}">
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
<section id="aboutUs" class="p-0 wow fadeIn bg-extra-dark-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 cover-background md-height-500px sm-height-350px wow fadeIn" style="background-image:url('http://www.themezaa.com/html/pofo/images/homepage-option15-image-4.jpg');"><div class="sm-height-400px"></div></div>
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
<section id="ourclient" class="wow fadeIn">
    <div class="container">
        <div class="row">
            <!-- start counter item-->
            <div class="col-12 col-lg-3 col-md-6 text-center md-margin-30px-bottom wow fadeInUp">
                <div class="counter-feature-box-1 w-100 border-all padding-5px-all">
                    <div class="counter-box bg-white d-flex justify-content-center flex-column h-100">
                        <i class="icon-heart icon-medium text-medium-gray margin-15px-bottom"></i>
                        <h6 class="d-block font-weight-600 text-extra-dark-gray alt-font mb-0 timer" data-speed="2000" data-to="320">320</h6>
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
                        <h6 class="d-block font-weight-600 text-extra-dark-gray alt-font mb-0 timer" data-speed="2000" data-to="250">250</h6>
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
                        <h6 class="d-block font-weight-600 text-extra-dark-gray alt-font mb-0 timer" data-speed="2000" data-to="30000">30,000</h6>
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

@endsection
