@extends('layouts.client.index')
@section('title', 'Clients')
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection
@section('vendor_css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('page_level_css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/pages/users.css') }}">
@endsection
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div id="user-profile">
                    <div class="row">
                        <div class="col-12">
                            <div class="card profile-with-cover">
                                <div class="card-img-top img-fluid bg-cover height-300 bg-dark"
                                    style="background: url('https://wallpaperaccess.com/full/512711.jpg');background-repeat: no-repeat;background-position: center;">
                                </div>
                                <div class="media profil-cover-details w-100">
                                    <div class="media-left pl-2 pt-2">
                                        <a href="#" class="profile-image">
                                            <img src="{{ asset('storage/clients/avatars/' . $client->avatar) }}"
                                                class="rounded-circle img-border height-100" alt="Card image">
                                        </a>
                                    </div>
                                    <div class="media-body pt-3 px-2">
                                        <div class="row">
                                            <div class="col">
                                                <h2 class="text-light">Mr. {{ $client->name }}</h2>
                                            </div>
                                            <div class="col text-right">
                                                {{-- <button type="button" class="btn btn-primary d-"><i class="la la-plus"></i>
                                                    Follow</button> --}}
                                                <div class="btn-group d-none d-md-block float-right ml-2" role="group"
                                                    aria-label="Basic example">
                                                    {{-- <button type="button" class="btn btn-success"><i
                                                            class="la la-dashcube"></i> Message</button> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <nav class="navbar navbar-light navbar-profile align-self-end">
                                    <button class="navbar-toggler d-sm-none" type="button" data-toggle="collapse"
                                        aria-expanded="false" aria-label="Toggle navigation"></button>
                                    <nav class="navbar navbar-expand-lg">
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav mr-auto">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('client.calendar') }}"><i class="la la-calendar"></i>
                                                        My Calendar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('client.project') }}"><i class="la la-briefcase"></i>
                                                        My Projects</a>
                                                </li>
                                            </ul>
                                        </div>
                            </div>
                            </nav>
                            <div class="content-body">
                                <!-- Basic form layout section start -->
                                <section id="basic-form-layouts">
                                    <div class="row match-height">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title" id="basic-layout-form">My Info</h4>
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
                                                        <form class="form" method="POST" action="{{ route('client.my-profile.update', $client->id) }}" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-body">
                                                                <h4 class="form-section"><i class="ft-home"></i>Edit My Info</h4>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="name">Full Name</label>
                                                                            <input type="text" value="{{ $client->name }}" id="name"
                                                                                class="form-control" placeholder="User Name"
                                                                                name="name">
                                                                                @error('name')
                                                                                    <span id="name_error" class="text-danger">{{ $message }}</span>
                                                                                @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="username">Username</label>
                                                                            <input type="text" value="{{ $client->username }}" id="username"
                                                                                class="form-control" placeholder="Username"
                                                                                name="username" disabled>
                                                                                @error('username')
                                                                                    <span id="username_error" class="text-danger">{{ $message }}</span>
                                                                                @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="email">Email</label>
                                                                            <input type="text" value="{{ $client->email }}" id="email"
                                                                                class="form-control" placeholder="Email Address"
                                                                                name="email" disabled>
                                                                                @error('email')
                                                                                    <span id="email_error" class="text-danger">{{ $message }}</span>
                                                                                @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="project_type">Project Type</label>
                                                                            <select name="project_type[]" id="project_type" class="form-control" multiple>
                                                                                <option disabled>Select Value</option>
                                                                                <option value="Photo" {{ in_array('Photo', $client->project_type) ? 'selected' : '' }}>Photo</option>
                                                                                <option value="Video" {{ in_array('Video', $client->project_type) ? 'selected' : '' }}>Video</option>
                                                                                <option value="Marketing" {{ in_array('Marketing', $client->project_type) ? 'selected' : '' }}>Marketing</option>
                                                                                <option value="Website" {{ in_array('Website', $client->project_type) ? 'selected' : '' }}>website</option>
            
                                                                            </select>
                                                                            @error('project_type')
                                                                                <span id="project_type_error" class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="phone">Phone</label>
                                                                            <input type="text" value="{{ $client->phone }}" id="phone"
                                                                            class="form-control" placeholder="phone"
                                                                            name="phone">
                                                                            @error('phone')
                                                                                <span id="phone_error" class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="old-password">Old Password</label>
                                                                            <input type="password" id="old-password"
                                                                                class="form-control" placeholder="Old Password"
                                                                                name="old-password">
                                                                            @error('old-password')
                                                                                <span id="oldPassword_error" class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="password">New Password</label>
                                                                            <input type="password" id="password" class="form-control" placeholder="New Password"
                                                                                name="password">
                                                                            @error('password')
                                                                                <span id="password_error" class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="password_confirmation">Confirm New Password</label>
                                                                            <input type="password" id="password_confirmation"
                                                                                class="form-control" placeholder="Confirm New Password"
                                                                                name="password_confirmation">
                                                                            @error('password_confirmation')
                                                                                <span id="password_confirmation_error" class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="avatar" class="form-label">My Profile Picture: <span style="color:red;">*</span>.png, .jpg, .jpeg, .webp</label>
                                                                            <input class="profile" type="file" name="avatar" id="avatar" class="form-control form-control-lg" data-max-files="10" data-show-errors="true" data-allowed-file-extensions="png jpg jpeg webp" data-max-file-size="5M">
                                                                            @error('avatar')
                                                                                <span id="avatar_error" class="text-danger">{{ $message }}</span>
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
                </div>
            </div>
        </div>
    </div>
@endsection
@section('vendor_js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endsection
@section('custom_js')
    <script>
        $('.profile').dropify();
    </script>
@endsection