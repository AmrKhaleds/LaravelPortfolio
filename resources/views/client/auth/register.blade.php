@extends('layouts.admin.login')
@section('title')
    Client Register
@endsection
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
                                <div class="card-header border-0">
                                    <div class="card-title text-center">
                                        <img style="width: 300px;" src="{{asset('storage/images/logo/' . $white_logo)}}" alt="branding logo">
                                    </div>
                                    <h6 class="card-subtitle line-on-side text-muted text-center h3 pt-2">
                                        <span>Create Client Account</span>
                                    </h6>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form-horizontal form-simple" method="POST" action="{{ route('client.register') }}" novalidate>
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group has-icon-left">
                                                        <input type="text" value="{{ old('name') }}" id="fullName"
                                                        class="form-control form-control-lg input-lg" placeholder="Full Name"
                                                        name="name">
                                                        <div class="form-control-position">
                                                            <i class="ft-user"></i>
                                                        </div>
                                                        @error('name')
                                                            <span id="name_error" class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group has-icon-left">
                                                        <input type="text" value="{{ old('username') }}" id="username"
                                                        class="form-control form-control-lg input-lg" placeholder="Username"
                                                        name="username">
                                                        <div class="form-control-position">
                                                            <i class="ft-user"></i>
                                                        </div>
                                                        @error('username')
                                                            <span id="username_error" class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group has-icon-left">
                                                        <input type="email" value="{{ old('email') }}" id="email"
                                                        class="form-control form-control-lg input-lg" placeholder="Email Address"
                                                        name="email">
                                                        <div class="form-control-position">
                                                            <i class="ft-mail"></i>
                                                        </div>
                                                        @error('email')
                                                            <span id="email_error" class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group has-icon-left">
                                                        <input type="number" value="{{ old('phone') }}" id="phone"
                                                        class="form-control form-control-lg input-lg" placeholder="Phone"
                                                        name="phone">
                                                        <div class="form-control-position">
                                                            <i class="la la-phone"></i>
                                                        </div>
                                                        @error('phone')
                                                            <span id="phone_error" class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group has-icon-left">
                                                        <input type="password" value="{{ old('password') }}" id="password"
                                                        class="form-control form-control-lg input-lg" placeholder="Password"
                                                        name="password">
                                                        <div class="form-control-position">
                                                            <i class="la la-key"></i>
                                                        </div>
                                                        @error('password')
                                                            <span id="password_error" class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group has-icon-left">
                                                        <input type="password" value="{{ old('password_confirmation') }}" id="confirmPassword"
                                                        class="form-control form-control-lg input-lg" placeholder="Confirm Password"
                                                        name="password_confirmation">
                                                        <div class="form-control-position">
                                                            <i class="la la-key"></i>
                                                        </div>
                                                        @error('password_confirmation')
                                                            <span id="password-confirmation_error" class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        {{-- <input type="text" value="" id="projectType"
                                                        class="form-control form-control-lg input-lg" placeholder="Confirm Password"
                                                        name="project_type"> --}}
                                                        <label for="project_type">Project Type: *You can select multiple*</label>
                                                        <select class="form-control " name="project_type[]" id="project_type" multiple>
                                                            <option value="photo">Photo</option>
                                                            <option value="video">Video</option>
                                                            <option value="website">Website</option>
                                                            <option value="marketing">Marketing Plan</option>
                                                        </select>
                                                        @error('project_type')
                                                            <span id="project-type_error" class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <fieldset class="form-group position-relative has-icon-left mb-1 col-lg-6">
                                                <input type="email" class="form-control form-control-lg input-lg"
                                                    id="user-email" name="email" placeholder="Your Email Address" required>
                                                <div class="form-control-position">
                                                    <i class="ft-mail"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left mb-1">
                                                <input type="password" class="form-control form-control-lg input-lg"
                                                    id="user-password" name="password" placeholder="Enter Password" required>
                                                <div class="form-control-position">
                                                    <i class="la la-key"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" class="form-control form-control-lg input-lg"
                                                    id="user-password" name="password_confirmation" placeholder="Confirm Password" required>
                                                <div class="form-control-position">
                                                    <i class="la la-key"></i>
                                                </div>
                                            </fieldset> --}}
                                            <button type="submit" class="btn btn-info btn-lg btn-block"><i
                                                    class="ft-unlock"></i> Register</button>
                                        </form>
                                    </div>
                                    <p class="text-center">Already have an account ? <a href="{{ route('client.login') }}"
                                            class="card-link">Login</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
