@extends('layouts.admin.index')
@section('content')
    <div class="app-content content" style="font-family: 'Cairo', Georgia, 'Times New Roman', Times, serif;">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href=""> أللغات </a>
                                </li>
                                <li class="breadcrumb-item active">تعديل لغة
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
                                    <h4 class="card-title" id="basic-layout-form"> تعديل لغة </h4>
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
                                {{-- Error Handling --}}
                                {{-- @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors') --}}

                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form" action="{{ route('project.update', $projectId->id) }}" method="POST" enctype="multipart/form-data">
                                            @method('PUT')
                                            @csrf
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i>Project Info</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name">Project Name</label>
                                                            <input type="text" value="{{ $projectId->name }}" id="name"
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
                                                            <textarea name="short_description" id="shortDescription" class="form-control">{{ $projectId->short_description }}</textarea>
                                                            @error('short_description')
                                                                <span id="abbr_error" class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="image"> Main Image </label>
                                                            <input type="file" name="image" id="image" class="form-group">
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
                                                            <input type="text" value="{{ $projectId->client }}" id="client"
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
                                                            <input type="text" value="{{ $projectId->industry }}" id="industry"
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
                                                            <input type="text" value="{{ $projectId->services }}" id="services"
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
                                                            <input type="text" value="{{ $projectId->website }}" id="website"
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
                                                            <textarea name="long_description" id="longtDescription" class="form-control">{{ $projectId->long_description }}</textarea>
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
                                                            <input type="date" value="{{ $projectId->date }}" id="date"
                                                                class="form-control" placeholder="Date"
                                                                name="date">
                                                                {{ $projectId->date}}
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