<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="" class="text-nowrap logo-img">
                <img src="{{asset('admin/images/logos/BEEBUS-logo.png')}}" width="180" alt=""/>
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Trang chủ</span>
                </li>
                <li class="sidebar-item ">
                    <a class="sidebar-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                       href="{{route('dashboard.dashboard')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                        <span class="hide-menu">Thống kê</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Chức năng</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs('dashboard.categories.index') ? 'active' : '' }}"
                       href="{{ route('dashboard.categories.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                        <span class="hide-menu">Danh mục</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs('dashboard.cars.index') ? 'active' : '' }}"
                       href="{{ route('dashboard.cars.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-bus"></i>
                </span>
                        <span class="hide-menu">Xe</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs('dashboard.carriageway') ? 'active' : '' }}"
                       href="{{route('dashboard.carriageway')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-map-2"></i>
                </span>
                        <span class="hide-menu">Tuyến xe</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs('dashboard.theried') ? 'active' : '' }}"
                       href="{{route('theride.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-road"></i>
                </span>
                        <span class="hide-menu">Chuyến xe</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs('dashboard.ticket') ? 'active' : '' }}"
                       href="{{route('dashboard.ticket')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-ticket"></i>
                </span>
                        <span class="hide-menu">Vé</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs('dashboard.customer') ? 'active' : '' }}"
                       href="{{route('dashboard.customer')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-users"></i>
                </span>
                        <span class="hide-menu">Hành khách</span>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
