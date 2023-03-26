@extends('layouts.admin.index')
@section('title')
    Add New User
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
                                <li class="breadcrumb-item"><a href=""> Users </a>
                                </li>
                                <li class="breadcrumb-item active">@yield('title')
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
                                        <form class="form" method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i>User Info</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name">User Name</label>
                                                            <input type="text" value="{{ old('name') }}" id="name"
                                                                class="form-control" placeholder="User Name"
                                                                name="name">
                                                                @error('name')
                                                                    <span id="name_error" class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="text" value="{{ old('email') }}" id="email"
                                                                class="form-control" placeholder="Email Address"
                                                                name="email">
                                                                @error('email')
                                                                    <span id="name_error" class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="password">Password</label>
                                                            <input type="password" id="password" class="form-control" placeholder="password"
                                                                name="password">
                                                            @error('password')
                                                                <span id="abbr_error" class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="confirm-password">Confirm Password</label>
                                                            <input type="password" id="confirm-password"
                                                                class="form-control" placeholder="Confirm Password"
                                                                name="confirm-password">
                                                            @error('confirm-password')
                                                                <span id="abbr_error" class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="role">Roles</label>
                                                                <select name="role[]" id="role" class="form-control" multiple>
                                                                    <option {{ old('role') == '' ? 'selected' : '' }} disabled>Select Value</option>
                                                                    @foreach ($roles as $role)
                                                                        <option value="{{ $role }}" {{ old('role') == $role ? 'selected' : '' }}>{{ $role }}</option>
                                                                    @endforeach
                                                                </select>
                                                            @error('role')
                                                                <span id="abbr_error" class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="status">Status</label>
                                                                <select name="status" id="status" class="form-control">
                                                                    <option {{ old('status') == '' ? 'selected' : '' }} disabled>Select Value</option>
                                                                    <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                                                                    <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Disabled</option>
                                                                </select>
                                                            @error('status')
                                                                <span id="abbr_error" class="text-danger">{{ $message }}</span>
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