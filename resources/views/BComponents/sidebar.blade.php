<aside class="main-sidebar sidebar-dark-primary elevation-4">
    {{-- Brand Logo --}}
    <a href="{{ route('admin.dashboard') }}" class="brand-link text-center bg-white">
        <img src="{{ asset('img/logo.png') }}" width="100" alt="Logo">
    </a>

    {{-- Sidebar --}}
    <div class="sidebar">
        {{-- Sidebar user panel (optional) --}}
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('BackEnd/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Md. Maraz</a>
            </div>
        </div>

        {{-- SidebarSearch Form --}}
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.buses') }}" class="nav-link {{ request()->routeIs('admin.buses.update') ? 'active' : '' }} {{ request()->routeIs('admin.buses') ? 'active' : '' }} {{ request()->routeIs('admin.buses.create') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-road"></i>
                        <p>
                            Buses
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.routes') }}" class="nav-link {{ request()->routeIs('admin.route.update') ? 'active' : '' }} {{ request()->routeIs('admin.routes') ? 'active' : '' }} {{ request()->routeIs('admin.routes.create') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-road"></i>
                        <p>
                            Routes
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.trips') }}" class="nav-link {{ request()->routeIs('admin.trip.update') ? 'active' : '' }} {{ request()->routeIs('admin.trips') ? 'active' : '' }} {{ request()->routeIs('admin.trip.create') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-bus"></i>
                        <p>
                            Trips
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.books') }}" class="nav-link  {{ request()->routeIs('admin.books') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-ticket-alt"></i>
                        <p>
                            Books
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-item bg-white" style="position: fixed; bottom: 7px;">
                    Logout
                </li> --}}
            </ul>
        </nav>
    </div>
</aside>
