<!-- start footer --> 
<footer class="footer-classic-dark bg-extra-dark-gray padding-five-bottom sm-padding-30px-bottom">
    <div class="bg-dark-footer padding-50px-tb sm-padding-30px-tb">
        <div class="container">
            <div class="row align-items-center">
                <!-- start slogan -->
                <div class="col-lg-4 col-md-5 text-center alt-font sm-margin-15px-bottom">
                    Alexandria based highly creative studio
                </div>
                <!-- end slogan -->
                <!-- start logo -->
                <div class="col-lg-4 col-md-2 text-center sm-margin-10px-bottom">
                    {{-- {{  }} --}}
                    <a href="index.html"><img class="footer-logo" src="{{asset('storage/images/logo/' . $black_logo)}}" data-rjs="{{ asset('assets/front/images/logo-white@2x.png') }}" alt="Pofo"></a>
                </div>
                <!-- end logo -->
                <!-- start social media -->
                <div class="col-lg-4 col-md-5 text-center">
                    <span class="alt-font margin-20px-right">On social networks</span>
                    <div class="social-icon-style-8 d-inline-block vertical-align-middle">
                        <ul class="small-icon mb-0">
                            <li><a class="facebook text-white-2" href="{{ config("settings.social_links.facebook") }}" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li><a class="youtube text-white-2" href="{{ config("settings.social_links.youtube") }}" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            <li><a class="google text-white-2" href="{{ config("settings.social_links.google") }}" target="_blank"><i class="fab fa-google"></i></a></li>
                            <li><a class="instagram text-white-2" href="{{ config("settings.social_links.instagram") }}" target="_blank"><i class="fab fa-instagram no-margin-right" aria-hidden="true"></i></a></li>
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
                    <p class="text-small width-95 sm-width-100">{{ $about }}</p>
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
                    <p class="text-small width-90 sm-width-100">{{ $newsletter }}</p>
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
                <div class="col-lg-6 col-md-6 text-small text-md-left text-center">{{ $copyright }}</div>
                <div class="col-lg-6 col-md-6 text-small text-md-right text-center">&COPY;2020-{{ date('Y') }} {{ $copyright }}</div>
                <!-- end copyright -->
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->