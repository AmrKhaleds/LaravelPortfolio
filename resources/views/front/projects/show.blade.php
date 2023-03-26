@extends('layouts.front.index')
@section('title')
    Project - {{ $getProject->name }}
@endsection
@section('content')
        <!-- start about product section -->
        <section class="wow fadeIn p-0 bg-light-gray top-space">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8 p-0 cover-background md-height-500px sm-height-300px" style="background:url('{{asset('storage/images/' . $getProject->image)}}')"></div>
                    <div class="col-12 col-lg-4 p-0">
                        <div class="padding-seventeen-lr padding-twenty-tb lg-padding-40px-lr md-padding-50px-tb sm-padding-30px-all">
                            <img src="{{ asset('storage/images/' . $getProject->brand_logo) }}" class="margin-30px-bottom" style="width:100px;" alt=""/>
                            <h3 class="alt-font text-extra-dark-gray font-weight-600 mb-0">{{ $getProject->name }}</h3>
                            <div class="bg-deep-pink separator-line-horrizontal-full d-inline-block margin-25px-tb"></div>
                            <p class="width-90 width-100 margin-35px-bottom text-medium line-height-28">{{ $getProject->long_description }}</p>
                            {{-- <ul class="list-style-3 text-medium">
                                <li>{{ $getProject->services }}</li>
                            </ul> --}}
                            <ul class=" list-style-3 text-medium">
                                @isset($getProject->client)
                                    <li class="text-extra-dark-gray"><span class="d-block text-extra-small text-medium-gray">Client</span>{{ $getProject->client }}</li>
                                @endisset

                                @isset($getProject->industry)
                                    <li class="text-extra-dark-gray"><span class="d-block text-extra-small text-medium-gray">Industry</span>{{ $getProject->industry }}</li>
                                @endisset

                                @isset($getProject->services)
                                    <li class="text-extra-dark-gray"><span class="d-block text-extra-small text-medium-gray">Services</span>{{ $getProject->services }}</li>
                                @endisset

                                @isset($getProject->website)
                                    <li class="text-extra-dark-gray"><span class="d-block text-extra-small text-medium-gray">Website</span><a href="index.html" class="text-extra-dark-gray">{{ $getProject->website }}</a></li>
                                @endisset

                                @isset($getProject->date)
                                    <li class="text-extra-dark-gray"><span class="d-block text-extra-small text-medium-gray">Date</span><a href="index.html" class="text-extra-dark-gray">{{ $getProject->date }}</a></li>
                                @endisset
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end about product section -->
        <!-- start about product section -->
        {{-- <section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 md-margin-50px-bottom sm-margin-30px-bottom wow fadeIn">
                        <p class="width-80 mx-auto d-inline-block sm-width-100">{{ $getProject->long_description }}</p>
                        <a href="index.html" class="btn btn-dark-gray btn-medium">Launch Website</a>
                    </div>
                    <div class="col-lg-4 offset-lg-2 wow fadeIn">
                        <ul class="list-style-8 margin-twelve-left">
                            <li class="text-extra-dark-gray"><span class="d-block text-extra-small text-medium-gray">Client</span>{{ $getProject->client }}</li>
                            <li class="text-extra-dark-gray"><span class="d-block text-extra-small text-medium-gray">Industry</span>{{ $getProject->industry }}</li>
                            <li class="text-extra-dark-gray"><span class="d-block text-extra-small text-medium-gray">Services</span>{{ $getProject->services }}</li>
                            <li class="text-extra-dark-gray"><span class="d-block text-extra-small text-medium-gray">Website</span><a href="index.html" class="text-extra-dark-gray">{{ $getProject->website }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- end about product section -->
        <!-- start product information section -->
        <section class="wow fadeIn fadeInUp" style="background-color: #f7f7f7;padding-bottom: 50px;">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 col-md-10 mx-auto text-center last-paragraph-no-margin">
                        <h5 class="alt-font text-extra-dark-gray">Beautiful and easy to understand UI, professional animations and drag &amp; drop</h5>
                        <p class="width-80 mx-auto d-inline-block sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end product information section -->
        <!-- start filter content -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 px-3 p-md-0">
                    <div class="filter-content overflow-hidden">
                        <ul class="portfolio-grid work-3col hover-option4 gutter-medium">
                            <li class="grid-sizer"></li>
                            <!-- start portfolio-item item -->
                            <li class="grid-item web branding design wow fadeInUp">
                                <a href="single-project-page-01.html">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <div class="bg-deep-pink mx-auto separator-line-horrizontal-medium-light3 margin-25px-bottom"></div>
                                                        <span class="font-weight-600 letter-spacing-1 alt-font text-white-2 text-uppercase margin-5px-bottom d-block">Herbal Beauty Salon</span>
                                                        <p class="text-medium-gray text-uppercase text-extra-small mb-0">Branding and Identity</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web branding design wow fadeInUp" data-wow-delay="0.2s">
                                <a href="single-project-page-02.html">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <div class="bg-deep-pink mx-auto separator-line-horrizontal-medium-light3 margin-25px-bottom"></div>
                                                        <span class="font-weight-600 letter-spacing-1 alt-font text-white-2 text-uppercase margin-5px-bottom d-block">Tailoring Interior</span>
                                                        <p class="text-medium-gray text-uppercase text-extra-small mb-0">Branding and Brochure</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item advertising branding photography wow fadeInUp" data-wow-delay="0.4s">
                                <a href="single-project-page-03.html">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <div class="bg-deep-pink mx-auto separator-line-horrizontal-medium-light3 margin-25px-bottom"></div>
                                                        <span class="font-weight-600 letter-spacing-1 alt-font text-white-2 text-uppercase margin-5px-bottom d-block">Pixflow Studio</span>
                                                        <p class="text-medium-gray text-uppercase text-extra-small mb-0">Branding and Identity</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web advertising design wow fadeInUp">
                                <a href="single-project-page-04.html">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <div class="bg-deep-pink mx-auto separator-line-horrizontal-medium-light3 margin-25px-bottom"></div>
                                                        <span class="font-weight-600 letter-spacing-1 alt-font text-white-2 text-uppercase margin-5px-bottom d-block">Designblast Inc</span>
                                                        <p class="text-medium-gray text-uppercase text-extra-small mb-0">Web and Photography</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web branding design wow fadeInUp" data-wow-delay="0.2s">
                                <a href="single-project-page-05.html">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <div class="bg-deep-pink mx-auto separator-line-horrizontal-medium-light3 margin-25px-bottom"></div>
                                                        <span class="font-weight-600 letter-spacing-1 alt-font text-white-2 text-uppercase margin-5px-bottom d-block">HardDot Stone</span>
                                                        <p class="text-medium-gray text-uppercase text-extra-small mb-0">Branding and Identity</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web advertising branding design photography wow fadeInUp" data-wow-delay="0.4s">
                                <a href="single-project-page-06.html">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <div class="bg-deep-pink mx-auto separator-line-horrizontal-medium-light3 margin-25px-bottom"></div>
                                                        <span class="font-weight-600 letter-spacing-1 alt-font text-white-2 text-uppercase margin-5px-bottom d-block">Educamp School</span>
                                                        <p class="text-medium-gray text-uppercase text-extra-small mb-0">Branding and Identity</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web advertising branding design photography wow fadeInUp">
                                <a href="single-project-page-07.html">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <div class="bg-deep-pink mx-auto separator-line-horrizontal-medium-light3 margin-25px-bottom"></div>
                                                        <span class="font-weight-600 letter-spacing-1 alt-font text-white-2 text-uppercase margin-5px-bottom d-block">Crop Identity</span>
                                                        <p class="text-medium-gray text-uppercase text-extra-small mb-0">Branding and Brochure</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web advertising branding design photography wow fadeInUp" data-wow-delay="0.2s">
                                <a href="single-project-page-08.html">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <div class="bg-deep-pink mx-auto separator-line-horrizontal-medium-light3 margin-25px-bottom"></div>
                                                        <span class="font-weight-600 letter-spacing-1 alt-font text-white-2 text-uppercase margin-5px-bottom d-block">Violator Series</span>
                                                        <p class="text-medium-gray text-uppercase text-extra-small mb-0">Web and Photography</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item advertising branding design wow fadeInUp" data-wow-delay="0.4s">
                                <a href="single-project-page-01.html">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <div class="bg-deep-pink mx-auto separator-line-horrizontal-medium-light3 margin-25px-bottom"></div>
                                                        <span class="font-weight-600 letter-spacing-1 alt-font text-white-2 text-uppercase margin-5px-bottom d-block">Johnny Cash</span>
                                                        <p class="text-medium-gray text-uppercase text-extra-small mb-0">Web and Photography</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web advertising design photography wow fadeInUp">
                                <a href="single-project-page-02.html">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <div class="bg-deep-pink mx-auto separator-line-horrizontal-medium-light3 margin-25px-bottom"></div>
                                                        <span class="font-weight-600 letter-spacing-1 alt-font text-white-2 text-uppercase margin-5px-bottom d-block">Violator Series</span>
                                                        <p class="text-medium-gray text-uppercase text-extra-small mb-0">Web and Photography</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web branding photography wow fadeInUp" data-wow-delay="0.2s">
                                <a href="single-project-page-03.html">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <div class="bg-deep-pink mx-auto separator-line-horrizontal-medium-light3 margin-25px-bottom"></div>
                                                        <span class="font-weight-600 letter-spacing-1 alt-font text-white-2 text-uppercase margin-5px-bottom d-block">Zimmermann Buch</span>
                                                        <p class="text-medium-gray text-uppercase text-extra-small mb-0">Web and Photography</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web advertising branding design photography wow fadeInUp" data-wow-delay="0.4s">
                                <a href="single-project-page-04.html">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <div class="bg-deep-pink mx-auto separator-line-horrizontal-medium-light3 margin-25px-bottom"></div>
                                                        <span class="font-weight-600 letter-spacing-1 alt-font text-white-2 text-uppercase margin-5px-bottom d-block">Stadt Gestalten</span>
                                                        <p class="text-medium-gray text-uppercase text-extra-small mb-0">Web and Photography</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end filter content -->
        <!-- start call to action section -->
        <section class="parallax wow fadeIn" data-stellar-background-ratio="0.2" style="background-image:url('{{asset('assets/front/images/bg.webp')}}');">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 d-flex flex-column align-items-center justify-content-center extra-small-screen mx-auto text-center sm-padding-15px-lr">
                        <span class="margin-15px-bottom d-block text-white alt-font text-uppercase sm-margin-5px-bottom">Powerful wordpress website builder</span>
                        <h3 class="alt-font text-white font-weight-600 width-100">We are delivering beautiful digital products for you</h3>
                        <a href="index.html" class="btn btn-dark-gray btn-large margin-20px-top sm-no-margin-top wow fadeInUp">Launch Website</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end call to action section -->
        <!-- start blog navigation bar section -->
        <section class="wow fadeIn no-padding">
            <div class="container-fluid p-0">
                <div class="row justify-content-between align-items-center no-gutters padding-30px-lr md-padding-15px-lr">
                    <div class="width-45 text-left">
                        <div class="blog-nav-link blog-nav-link-prev text-extra-dark-gray">
                            <span class="text-medium-gray text-extra-small text-uppercase d-none d-md-block">Previous Project</span>
                            <a href="single-project-page-02.html">
                                <i class="ti-arrow-left blog-nav-icon"></i>
                                Filamento Lamps
                            </a>
                        </div>
                    </div>
                    <div class="width-10 projecttext-center">
                        <a href="/#portfolio" class="blog-nav-link blog-nav-home"><i class="ti-layout-grid2-alt"></i></a>
                    </div>
                    <div class="width-45 text-right">
                        <div class="blog-nav-link blog-nav-link-next text-extra-dark-gray">    
                            <span class="text-medium-gray text-extra-small text-uppercase d-none d-md-block">Next Project</span>
                            <a href="single-project-page-04.html">
                                <i class="ti-arrow-right blog-nav-icon"></i>
                                Best of Nature
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end blog navigation bar section -->
@endsection