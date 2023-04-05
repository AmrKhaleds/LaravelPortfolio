@extends('layouts.admin.index')
@section('title')
    Settings
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
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Main</a></li>
                            <li class="breadcrumb-item active">
                                @yield('title')
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- DOM - jQuery events table -->
            <section id="dom">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">General Settings</h4>
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
                            @include('admin.includes.alerts.success')
                            @include('admin.includes.alerts.errors')
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <form class="form" method="POST" action="{{ route('settings.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-home"></i>Settings Info</h4>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="site_name">Website Name</label>
                                                        <input type="text" value="{{ $site_name }}" id="site_name"
                                                            class="form-control" placeholder="Project Name"
                                                            name="site_name">
                                                            @error('site_name')
                                                                <span id="name_error" class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <label for="about">About Us</label>
                                                        <textarea name="about" id="about" class="form-control">{{ $about }}</textarea>
                                                        @error('about')
                                                            <span id="abbr_error" class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="white_logo" class="form-label">White Logo</label>
                                                        <input type="file" name="white_logo" id="white_logo" class="form-control form-control-lg">
                                                            @error('white_logo')
                                                                <span id="direction_error" class="text-danger"> {{ $message }} </span>
                                                            @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="black_logo" class="form-label">Dark Logo</label>
                                                        <input type="file" name="black_logo" id="black_logo" class="form-control form-control-lg">
                                                            @error('black_logo')
                                                                <span id="direction_error" class="text-danger"> {{ $message }} </span>
                                                            @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class=""><i class="ft-home"></i> Contact Detlis</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="contact_email">Mail</label>
                                                        <input type="text" value="{{ $contact_email }}" id="contact_email"
                                                            class="form-control" placeholder="Project Slug"
                                                            name="contact_email">
                                                            @error('contact_email')
                                                                <span id="name_error" class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="contact_phone">Phone</label>
                                                        <input type="text" value="{{ $contact_phone }}" id="contact_phone"
                                                            class="form-control" placeholder="Industry"
                                                            name="contact_phone">
                                                            @error('contact_phone')
                                                                <span id="name_error" class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <h5 class=""><i class="ft-home"></i> Footer Settings</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="copyright">Copyright</label>
                                                        <input type="text" value="{{ $copyright }}" id="copyright"
                                                            class="form-control" placeholder="Project Slug"
                                                            name="copyright">
                                                            @error('copyright')
                                                                <span id="name_error" class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="newsletter">Newsletter</label>
                                                        <input type="text" value="{{ $newsletter }}" id="newsletter"
                                                            class="form-control" placeholder="Industry"
                                                            name="newsletter">
                                                            @error('newsletter')
                                                                <span id="name_error" class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                    </div>
                                                </div>
                                            </div>
                                                {{-- <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="services">Services</label>
                                                        <input type="text" value="{{ old('services') }}" id="services"
                                                            class="form-control" placeholder="Services"
                                                            name="services">
                                                            @error('services')
                                                                <span id="name_error" class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="website">Website</label>
                                                        <input type="text" value="{{ old('website') }}" id="website"
                                                            class="form-control" placeholder="Website"
                                                            name="website">
                                                            @error('website')
                                                                <span id="name_error" class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                    </div>
                                                </div>
                                            
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="longtDescription">Long Description</label>
                                                        <textarea name="long_description" id="longtDescription" class="form-control">{{ old('long_description') }}</textarea>
                                                        @error('long_description')
                                                            <span id="abbr_error" class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="date">Date</label>
                                                        <input type="date" value="{{ old('date') }}" id="date"
                                                            class="form-control" placeholder="Date"
                                                            name="date">
                                                            @error('date')
                                                                <span id="name_error" class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> save
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection