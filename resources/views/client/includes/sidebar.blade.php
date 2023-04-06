<!-- Begin SideBar-->

<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
<div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

        <li class="nav-item {{ Route::currentRouteNamed('client.dashboard') ? 'active' : '' }}">
                <a href="{{ route('client.dashboard') }}">
                        <i class="la la-home"></i>
                        <span class="menu-title" data-i18n="nav.add_on_drag_drop.main">
                                Main 
                        </span>
                </a>
        </li>
        {{-- Calendar --}}
        <li class="nav-item">
                <!-- The current user can update the post... -->
                <a class="{{ Route::currentRouteNamed('client.calendar') ? 'active' : '' }}" href="{{ route('client.calendar') }}">
                        <i class="la la-calendar"></i>
                        <span class="menu-title" data-i18n="nav.dash.main">{{ __('Calendar') }}</span>
                </a>
        </li>

        {{-- Projects --}}
        <li class="nav-item">
                <!-- The current user can update the post... -->
                <a class="{{ Route::currentRouteNamed('client.project') ? 'active' : '' }}" href="{{ route('client.project') }}">
                        <i class="la la-briefcase"></i>
                        <span class="menu-title" data-i18n="nav.dash.main">{{ __('My Projects') }}</span>
                </a>
        </li>
        
        {{-- Settings --}}
        <li class="nav-item">
                <!-- The current user can update the post... -->
                <a class="{{ Route::currentRouteNamed('') ? 'active' : '' }}" href="">
                        <i class="ft-settings icon-left"></i>
                        <span class="menu-title" data-i18n="nav.dash.main">{{ __('Settings') }}</span>
                </a>
        </li>
        
        {{-- Client Support --}}
        <li class="nav-item">
                <!-- The current user can update the post... -->
                <a class="{{ Route::currentRouteNamed('') ? 'active' : '' }}" href="">
                        <i class="la la-support"></i>
                        <span class="menu-title" data-i18n="nav.dash.main">{{ __('Custmor Support') }}</span>
                </a>
        </li>

</div>
</div>
<!--End Sidebare-->
