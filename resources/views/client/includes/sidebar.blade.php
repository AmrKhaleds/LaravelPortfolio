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
                {{-- @can('calendar') --}}
                <a class="{{ Route::currentRouteNamed('client.calendar') ? 'active' : '' }}" href="{{ route('client.calendar') }}">
                        <i class="la la-calendar"></i>
                        <span class="menu-title" data-i18n="nav.dash.main">{{ __('Calendar') }}</span>
                </a>
                {{-- @endcan --}}
        </li>
</div>
</div>
<!--End Sidebare-->
