@extends('layouts.client.index')
@section('title', 'Project Summary')
@section('vendor_css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendors/js/gallery/photo-swipe/photoswipe.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendors/js/gallery/photo-swipe/default-skin/default-skin.css') }}">
@endsection
@section('page_level_css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/pages/gallery.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/pages/project.css') }}">
@endsection
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> @yield('title') </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Main</a>
                                </li>
                                <li class="breadcrumb-item active"> @yield('title')
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- ========== Start Project Summary ========== -->
                <section class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-head">
                                <div class="card-header">
                                    <h4 class="card-title font-dark">Project Name : {{ $project->project_name }}</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        @isset($project->client->project_type)
                                            @foreach ($project->client->project_type as $type)
                                                <span class="badge badge-default badge-warning">{{ $type }}</span>
                                                {{-- <span class="badge badge-default badge-success">New</span>
                                                <span class="badge badge-default badge-info">iOS</span> --}}
                                            @endforeach
                                        @endisset
                                    </div>
                                </div>
                                <div class="px-1">
                                    <ul
                                        class="list-inline list-inline-pipe text-center p-1 border-bottom-grey border-bottom-lighten-3">
                                        <li>Project Owner:
                                            <span class="text-muted">{{ $project->client->name }}</span>
                                        </li>
                                        <li>Start:
                                            <span class="text-danger">{{ $project->start_at }}</span>
                                        </li>
                                        <li>Project Size:
                                            <span class="text-danger">{{ $projectTotalSize }}MB</span>
                                        </li>
                                        <li>Due on:
                                            <span class="text-danger">{{ $project->end_at }}</span>
                                        </li>
                                        <li><a href="#" class="text-muted" data-toggle="tooltip"
                                                data-placement="bottom" title=""
                                                data-original-title="Export as PDF"><i class="la la-file-pdf-o"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- project-info -->
                            <div id="project-info" class="card-body row">
                                <div class="project-info-count col-lg-4 col-md-12">
                                    <div class="project-info-icon">
                                        <h2>{{ count($projectPhotos) }}</h2>
                                        <div class="project-info-sub-icon">
                                            <span class="la la-user"></span>
                                        </div>
                                    </div>
                                    <div class="project-info-text pt-1">
                                        <h5>Project Photos</h5>
                                    </div>
                                </div>
                                <div class="project-info-count col-lg-4 col-md-12">
                                    <div class="project-info-icon">
                                        <h5>
                                            @if ($project->progress == 'complete')
                                                <span
                                                    class="badge badge badge-pill badge-success badge-glow">{{ $project->progress }}</span>
                                            @elseif($project->progress == 'on progress')
                                                <span
                                                    class="badge badge badge-pill badge-info badge-glow">{{ $project->progress }}</span>
                                            @else
                                                <span
                                                    class="badge badge badge-pill badge-danger badge-glow">{{ $project->progress }}</span>
                                            @endif
                                        </h5>
                                        <div class="project-info-sub-icon">
                                            <span class="la la-calendar-check-o"></span>
                                        </div>
                                    </div>
                                    <div class="project-info-text pt-1">
                                        <h5>Project Status</h5>
                                    </div>
                                </div>
                                <div class="project-info-count col-lg-4 col-md-12">
                                    <div class="project-info-icon">
                                        <h2>{{ count($projectVideos) }}</h2>
                                        <div class="project-info-sub-icon">
                                            <span class="la la-bug"></span>
                                        </div>
                                    </div>
                                    <div class="project-info-text pt-1">
                                        <h5>Project Videos</h5>
                                    </div>
                                </div>
                            </div>

                            <!-- project-info -->
                            @isset($project->external_photos_link)

                                <div class="card-body">
                                    <div class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                                        <span>External Links</span>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="insights px-2">
                                                <div>
                                                    <span class="text-dark h3">External Photos Link : </span>
                                                </div>
                                                @isset($project->external_photos_link)
                                                    <a href="{{ $project->external_photos_link }}" target="_blanck"
                                                        class="text-blue">{{ $project->external_photos_link }}</a>
                                                @else
                                                    <span class="text-danger">Null</span>
                                                @endisset
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="insights px-2">
                                                <div>
                                                    <span class="text-dark h3">External Videos Link : </span>
                                                </div>
                                                @isset($project->external_videos_link)
                                                    <a href="{{ $project->external_videos_link }}" target="_blanck"
                                                        class="text-blue">{{ $project->external_videos_link }}</a>
                                                @else
                                                    <span class="text-danger">Null</span>
                                                @endisset
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endisset
                        </div>
                    </div>
                </section>

                <!-- ========== End Project Summary ========== -->
                <!-- ========== Start image Gallery ========== -->
                <section id="image-gallery" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Project Photos</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="card-text" style="display: flex; justify-content: space-between;">
                                <h5>All your Project Photos.</h5>
                                {{-- {{ dd($projectPhotos) }} --}}
                                @if (!count($projectPhotos) == 0)
                                    <a class="btn btn-outline-primary mb-1"
                                        href="{{ route('client.download.photos', ['client' => $project->client->username, 'project' => $project->project_name]) }}">Download
                                        All Images</a>
                                @endempty
                        </div>
                    </div>
                    <div class="card-body  my-gallery" itemscope="" itemtype="http://schema.org/ImageGallery"
                        data-pswp-uid="1">
                        <div class="row">
                            {{-- @empty($projectPhotos) --}}
                            @forelse ($projectPhotos as $photo)
                                <figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope=""
                                    itemtype="http://schema.org/ImageObject">
                                    <a href="{{ asset('storage/clients/photos/' . $clientUsername . '/' . $project->project_name . '/' . $photo->photo_name) }}"
                                        itemprop="contentUrl" data-size="2000x2000">
                                        <img class="img-thumbnail img-fluid"
                                            src="{{ asset('storage/clients/photos/' . $clientUsername . '/' . $project->project_name . '/thumbnail/' . $photo->thumbnail) }}"
                                            itemprop="thumbnail" alt="{{ $photo->photo_name }}" loading="lazy">
                                    </a>
                                </figure>
                            @empty
                                <div class="col-12 text-center text-danger font-size-large">
                                    There are no photos for this project right now. We are still preparing these photos
                                </div>
                            @endforelse
                            {{-- @endempty --}}
                        </div>
                    </div>
                    <!--/ Image grid -->
                    <!-- Root element of PhotoSwipe. Must have class pswp. -->
                    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                        <!-- Background of PhotoSwipe.
                               It's a separate element as animating opacity is faster than rgba(). -->
                        <div class="pswp__bg"></div>
                        <!-- Slides wrapper with overflow:hidden. -->
                        <div class="pswp__scroll-wrap">
                            <!-- Container that holds slides.
                                  PhotoSwipe keeps only 3 of them in the DOM to save memory.
                                  Don't modify these 3 pswp__item elements, data is added later on. -->
                            <div class="pswp__container">
                                <div class="pswp__item"></div>
                                <div class="pswp__item"></div>
                                <div class="pswp__item"></div>
                            </div>
                            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                            <div class="pswp__ui pswp__ui--hidden">
                                <div class="pswp__top-bar">
                                    <!--  Controls are self-explanatory. Order can be changed. -->
                                    <div class="pswp__counter"></div>
                                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                    <button class="pswp__button pswp__button--share" title="Share"></button>
                                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                                    <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                                    <!-- element will get class pswp__preloader-active when preloader is running -->
                                    <div class="pswp__preloader">
                                        <div class="pswp__preloader__icn">
                                            <div class="pswp__preloader__cut">
                                                <div class="pswp__preloader__donut"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                    <div class="pswp__share-tooltip"></div>
                                </div>
                                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                                </button>
                                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                                </button>
                                <div class="pswp__caption">
                                    <div class="pswp__caption__center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ PhotoSwipe -->
            </section>
            <!-- ========== End image Gallery ========== -->
            <!-- ========== Start Vedio Gallery ========== -->
            <section id="video-gallery" class="card">
                <div class="card-header">
                    <h4 class="card-title">Video gallery</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="card-text">
                            <p>All your Project Videos.</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @forelse($projectVideos as $video)
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="embed-responsive embed-responsive-item embed-responsive-16by9">
                                        <video class="img-thumbnail" controls preload="none">
                                            <source
                                                src="{{ asset('storage/clients/videos/' . $clientUsername . '/' . $project->project_name . '/' . $video->video_name) }}"
                                                type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            @empty
                                <div class="col-12 text-center text-danger font-size-large">
                                    There are no videos for this project right now. We are still preparing these videos
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </section>
            <!-- ========== End Vedio Gallery ========== -->
        </div>
    </div>
</div>

@endsection
@section('vendor_js')
<script src="{{ asset('assets/admin/vendors/js/gallery/masonry/masonry.pkgd.min.js') }}" type="text/javascript">
</script>
<script src="{{ asset('assets/admin/vendors/js/gallery/photo-swipe/photoswipe.min.js') }}" type="text/javascript">
</script>
<script src="{{ asset('assets/admin/vendors/js/gallery/photo-swipe/photoswipe-ui-default.min.js') }}"
    type="text/javascript"></script>
@endsection
@section('page_level_js')
<script src="{{ asset('assets/admin/js/scripts/gallery/photo-swipe/photoswipe-script.js') }}" type="text/javascript">
</script>
{{-- <script src="{{ asset('assets/admin/js/scripts/pages/project-summary-task.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/js/scripts/pages/project-summary-bug.js') }}" type="text/javascript"></script> --}}
@endsection
@section('custom_js')
<script></script>
@endsection
