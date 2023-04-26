@extends('layouts.admin.login')
@section('title')
    Client Login
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
                                        @if (file_exists(public_path('storage/images/logo/' . $dashboardSettings['white_logo'])))
                                            <img style="width: 300px; "
                                                src="{{ asset('storage/images/logo/' . $dashboardSettings['white_logo']) }}"
                                                alt="My Image">
                                        @else
                                            <img style="width: 300px;"
                                                src="{{ asset('assets/admin/images/logo/defaultLogo.png') }}"
                                                alt="My Image">
                                        @endif
                                    </div>
                                    <h6 class="card-subtitle line-on-side text-muted text-center h2 pt-2">
                                        <span>Client Login</span>
                                    </h6>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form-horizontal form-simple" method="POST"
                                            action="{{ route('client.login') }}" novalidate>
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group has-icon-left">
                                                        <input type="text" value="{{ old('username') }}" id="username"
                                                            class="form-control form-control-lg input-lg"
                                                            placeholder="Username" name="username">
                                                        <div class="form-control-position">
                                                            <i class="ft-user"></i>
                                                        </div>
                                                        @error('username')
                                                            <span id="username_error"
                                                                class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group has-icon-left">
                                                        <input type="password" value="{{ old('password') }}" id="password"
                                                            class="form-control form-control-lg input-lg"
                                                            placeholder="Password" name="password">
                                                        <div class="form-control-position">
                                                            <i class="la la-key"></i>
                                                        </div>
                                                        @error('password')
                                                            <span id="password_error"
                                                                class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group has-icon-left">
                                                        <input class="chk-remember" type="checkbox" name="remember"
                                                            id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="remember">
                                                            {{ __('Remember Me') }}
                                                        </label>
                                                        @error('remember')
                                                            <span id="remember_error"
                                                                class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-info btn-lg btn-block"><i
                                                    class="ft-unlock"></i> Login</button>
                                        </form>
                                    </div>
                                    <p class="text-center">Don't have an account ? <a href="{{ route('client.register') }}"
                                            class="card-link">Register</a></p>
                                    <p class="text-center">For any trouble contact <a href="{{ route('client.register') }}"
                                            class="card-link">Client Support</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
