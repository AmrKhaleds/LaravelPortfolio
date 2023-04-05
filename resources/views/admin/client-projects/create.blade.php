@extends('layouts.admin.index')
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection
@section('vendor_css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('title', 'Create New Client Project')
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
                                <li class="breadcrumb-item active">@yield('title', 'Create New Client Project')
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
                                    <h4 class="card-title" id="basic-layout-form">@yield('title')</h4>
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
                                    <div class="card-body">
                                        <form class="form" id="form" method="POST" action="{{ route('client-projects.store') }}"
                                            enctype="multipart/form-data" data-dropzone="true">
                                            @csrf
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i>Project Info</h4>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="project_name">Project Name</label>
                                                            <input type="text" value="{{ old('project_name') }}"
                                                                id="project_name" class="form-control"
                                                                placeholder="Project Name" name="project_name">
                                                            @error('project_name')
                                                                <span id="name_error"
                                                                    class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="client_id">Assign Client</label>
                                                            <select name="client_id" id="client_id" class="form-control">
                                                                <option selected disabled>Select Client</option>
                                                                @foreach ($clients as $client)
                                                                    <option value="{{ $client->id }}">
                                                                        {{ $client->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('client_id')
                                                                <span id="client_id_error"
                                                                    class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="slug">Status</label>
                                                            <select name="progress" id="progress" class="form-control">
                                                                <option selected disabled>Select Status</option>
                                                                <option value="pindang">Pindang</option>
                                                                <option value="on progress">On Progress</option>
                                                                <option value="complete">Complete</option>
                                                            </select>
                                                            @error('progress')
                                                                <span id="progress_error"
                                                                    class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="external_photos_link">External Photos Link</label>
                                                            <input type="text" value="{{ old('external_photos_link') }}"
                                                                id="external_photos_link" class="form-control"
                                                                placeholder="External Photos Link"
                                                                name="external_photos_link">
                                                            @error('external_photos_link')
                                                                <span id="external_photos_link_error"
                                                                    class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="external_videos_link">External Videos Link</label>
                                                            <input type="text" value="{{ old('external_videos_link') }}"
                                                                id="external_videos_link" class="form-control"
                                                                placeholder="External Videos Link"
                                                                name="external_videos_link">
                                                            @error('external_videos_link')
                                                                <span id="external_videos_link_error"
                                                                    class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="start_at">Start at</label>
                                                            <input type="date" value="{{ old('start_at') }}"
                                                                id="start_at" class="form-control"
                                                                placeholder="Start At" name="start_at">
                                                            @error('start_at')
                                                                <span id="start_at_error"
                                                                    class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="end_at">End at</label>
                                                            <input type="date" value="{{ old('end_at') }}"
                                                                id="end_at" class="form-control"
                                                                placeholder="Start At" name="end_at">
                                                            @error('end_at')
                                                                <span id="end_at_error"
                                                                    class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="formFileLg" class="form-label">Project Photos: <span style="color:red;">*</span>.png, .jpg, .jpeg, .webp</label>
                                                            <input class="dropify" type="file" name="photo_name[]" id="formFileLg" class="form-control form-control-lg" data-max-files="10" data-show-errors="true" data-allowed-file-extensions="png jpg jpeg webp" data-max-file-size="30M" multiple>
                                                            @error('photo_name')
                                                                <span id="photo_name_error" class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="formFileLg" class="form-label">Project Videos: <span style="color:red;">*</span>.mp4</label>
                                                            <input class="dropify2" type="file" name="video_name[]" id="formFileLg" class="form-control form-control-lg" data-max-files="5" data-allowed-file-extensions="mp4" multiple>
                                                            @error('video_name')
                                                                <span id="video_name_error" class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="formFileLg" class="form-label"> Report: <span style="color:red;">*</span>.pdf </label>
                                                            <input class="dropify2" type="file" name="report" id="formFileLg" class="form-control form-control-lg" data-max-files="5" multiple>
                                                            @error('report')
                                                                <span id="report_error" class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
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
@section('vendor_js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endsection
@section('custom_js')
    <script>
        $('.dropify').dropify();
        $('.dropify2').dropify();
    </script>
@endsection
