@extends('layouts.admin.index')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendors/css/file-uploaders/dropzone.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/plugins/file-uploaders/dropzone.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendors/css/ui/prism.min.css') }}">

@endsection
@section('content')
    <div class="app-content content" style="font-family: 'Cairo', Georgia, 'Times New Roman', Times, serif;">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Main </a>
                                </li>
                                <li class="breadcrumb-item"><a href=""> Projects </a>
                                </li>
                                <li class="breadcrumb-item active">Add Project
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">Create New Project</h4>
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
                                {{-- @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors') --}}
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form" method="POST" action="{{ route('project.store') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i>Project Info</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name">Project Name</label>
                                                            <input type="text" value="{{ old('name') }}" id="name"
                                                                class="form-control" placeholder="Project Name"
                                                                name="name">
                                                                @error('name')
                                                                    <span id="name_error" class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="shortDescription">Short Description</label>
                                                            <textarea name="short_description" id="shortDescription" value="{{ old('short_description') }}"  class="form-control"></textarea>
                                                            @error('short_description')
                                                                <span id="abbr_error" class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="formFileLg" class="form-label"> Main Image </label>
                                                            <input type="file" name="image" id="formFileLg" class="form-control form-control-lg">
                                                                @error('image')
                                                                    <span id="direction_error" class="text-danger"> {{ $message }} </span>
                                                                @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class=""><i class="ft-home"></i> Project Detlis</h5>
                                                <hr>
                                                
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="client">Client Name</label>
                                                            <input type="text" value="{{ old('name') }}" id="client"
                                                                class="form-control" placeholder="Client Name"
                                                                name="client">
                                                                @error('client')
                                                                    <span id="name_error" class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="industry">Industry</label>
                                                            <input type="text" value="{{ old('industry') }}" id="industry"
                                                                class="form-control" placeholder="Industry"
                                                                name="industry">
                                                                @error('industry')
                                                                    <span id="name_error" class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
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
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="longtDescription">Long Description</label>
                                                            <textarea name="long_description" id="longtDescription" value="{{ old('long_description') }}"  class="form-control"></textarea>
                                                            @error('long_description')
                                                                <span id="abbr_error" class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="formFileLg" class="form-label"> Brand Logo </label>
                                                            <input type="file" name="brand_logo" id="formFileLg" class="form-control form-control-lg">
                                                                @error('brand_logo')
                                                                    <span id="direction_error" class="text-danger"> {{ $message }} </span>
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
                                                </div>

                                                {{-- <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox" value="1" name="active" id="switcheryColor4"
                                                                class="switchery" data-color="success" checked />
                                                            <label for="switcheryColor4" class="card-title ml-1">الحالة
                                                            </label>
                                                            @error('active')
                                                                <span class="text-danger">{{ $message }}</span>
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
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('assets/admin/vendors/js/extensions/dropzone.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/js/scripts/extensions/dropzone.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/vendors/js/ui/prism.min.js') }}" type="text/javascript"></script>

@endsection