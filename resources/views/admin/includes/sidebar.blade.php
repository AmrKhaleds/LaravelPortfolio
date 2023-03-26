<!-- Begin SideBar-->

<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
<div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

        <li class="nav-item {{ Route::currentRouteNamed('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">
                        <i class="la la-home"></i>
                        <span class="menu-title" data-i18n="nav.add_on_drag_drop.main">
                                Main 
                        </span>
                </a>
        </li>
        {{-- Projects --}}
        <li class=" nav-item">
                @can('project-list')
                <a href="">
                        <i class="la la-briefcase"></i>
                        <span class="menu-title" data-i18n="nav.dash.main">{{ __('Projects') }}</span>
                        <span class="badge badge badge-info badge-pill float-right mr-2">{{ App\Models\Project::count() }}</span>
                </a>
                <ul class="menu-content">
                        @can('project-list')
                        <li class="{{ Route::currentRouteNamed('project.index') ? 'active' : '' }}">
                                <a href="{{ route('project.index') }}" class="menu-item" href="dashboard-ecommerce.html" data-i18n="nav.dash.projects">All Projects</a>
                        </li>
                        @endcan
                        @can('project-create')
                        <li class="{{ Route::currentRouteNamed('project.create') ? 'active' : '' }}">
                                <a href="{{ route('project.create') }}" class="menu-item" href="dashboard-crypto.html" data-i18n="nav.dash.addnewproject">Add New Project</a>
                        </li>
                        @endcan
                </ul>
                @endcan
        </li>
        {{-- Settings --}}
        <li class="nav-item">
                <!-- The current user can update the post... -->
                @can('settings-list')
                <a href="">
                        <i class="ft-settings icon-left"></i>
                        <span class="menu-title" data-i18n="nav.dash.main">{{ __('Settings') }}</span>
                </a>
                <ul class="menu-content">
                        @can('settings-edit')
                        <li class="{{ Route::currentRouteNamed('frontSettings') ? 'active' : '' }}">
                                <a href="{{ route('frontSettings') }}" class="menu-item" href="dashboard-ecommerce.html" data-i18n="nav.dash.websettings">Website Settings</a>
                        </li>
                        <li class="{{ Route::currentRouteNamed('dashboardSettings') ? 'active' : '' }}">
                                <a href="{{ route('dashboardSettings') }}" class="menu-item" href="dashboard-crypto.html" data-i18n="nav.dash.adminsettings">Dashboard Settings</a>
                        </li>
                        @endcan
                </ul>
                @endcan
        </li>
        {{-- Users --}}
        <li class="nav-item">
                @can('user-list')
                <a href="">
                        <i class="la la-user"></i>
                        <span class="menu-title" data-i18n="nav.dash.main">{{ __('Users') }}</span>
                        <span class="badge badge badge-info badge-pill float-right mr-2">{{ App\Models\User::count() }}</span>
                </a>
                <ul class="menu-content">
                        @can('user-list')
                        <li class="{{ Route::currentRouteNamed('users.index') ? 'active' : '' }}">
                                <a href="{{ route('users.index') }}" class="menu-item" href="dashboard-ecommerce.html" data-i18n="nav.dash.websettings">All Users</a>
                        </li>
                        @endcan
                        @can('user-create')
                        <li class="{{ Route::currentRouteNamed('users.create') ? 'active' : '' }}">
                                <a href="{{ route('users.create') }}" class="menu-item" href="dashboard-crypto.html" data-i18n="nav.dash.adminsettings">Add User</a>
                        </li>
                        @endcan
                </ul>
                @endcan
        </li>
        {{-- Roles --}}
        <li class="nav-item">
                @can('role-list')
                        <a href="">
                                <i class="la la-user"></i>
                                <span class="menu-title" data-i18n="nav.dash.main">{{ __('Role') }}</span>
                        </a>
                        <ul class="menu-content">
                                @can('role-list')
                                <li class="{{ Route::currentRouteNamed('roles.index') ? 'active' : '' }}">
                                        <a href="{{ route('roles.index') }}" class="menu-item" href="dashboard-ecommerce.html" data-i18n="nav.dash.websettings">All Roles</a>
                                </li>
                                @endcan
                                @can('role-create')
                                <li class="{{ Route::currentRouteNamed('roles.create') ? 'active' : '' }}">
                                        <a href="{{ route('roles.create') }}" class="menu-item" href="dashboard-crypto.html" data-i18n="nav.dash.adminsettings">Add Role</a>
                                </li>
                                @endcan
                        </ul>
                @endcan
        </li>
</div>
</div>
<!--End Sidebare-->
