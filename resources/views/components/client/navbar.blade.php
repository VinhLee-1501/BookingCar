<!-- Navbar Start -->
<div class="container-fluid nav-bar bg-transparent">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
        <a href="index.blade.php" class="navbar-brand d-flex align-items-center text-center">
            <div class="icon p-2 me-2">
                <img class="img-fluid" src="{{ asset('client/img/logo-hcn.png') }}" style="width: 180px;">
            </div>
            {{-- <h1 class="m-0 text-primary">Makaan</h1> --}}
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="{{ route('user.home') }}"
                   class="nav-item nav-link {{ request()->routeIs('user.home') ? 'active' : '' }}">Trang chủ</a>
                <a href="{{ route('user.schedule') }}"
                   class="nav-item nav-link {{ request()->routeIs('user.schedule') ? 'active' : '' }} ">Lịch trình</a>
                <a href="{{ route('user.searchTicket') }}"
                   class="nav-item nav-link {{ request()->routeIs('user.searchTicket') ? 'active' : '' }} ">Tra cứu
                    vé</a>
                <a href="{{ route('user.news') }}"
                   class="nav-item nav-link {{ request()->routeIs('user.news') ? 'active' : '' }} ">Tin tức</a>
                <a href="{{ route('user.contact') }}"
                   class="nav-item nav-link {{ request()->routeIs('user.contact') ? 'active' : '' }} ">Liên hệ</a>
                <a href="{{ route('user.about') }}"
                   class="nav-item nav-link {{ request()->routeIs('user.about') ? 'active' : '' }} ">Về chúng tôi</a>
            </div>


            @if (auth()->check())
                <div class="" id="navbarNavDarkDropdown me-4">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <button class="bg-transparent border-0 d-flex" data-bs-toggle="dropdown"
                                    aria-expanded="false">

                                <div width="30%" height="30%" class="bg-info rounded-circle mt-1">
                                    <span>
                                        <i class="bi bi-person-circle"></i>
                                    </span>
                                </div>
                                <a href="">
                                    <h5 class="mt-1">{{ auth()->user()->name }}</h5>
                                </a>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-light">
                                <li><a class="dropdown-item" href="#">Thông tin tài khoản</a></li>
                                <li><a class="dropdown-item" href="{{ route('logoutuser') }}">Đăng xuất</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            @else
                <a href="{{ route('signin') }}" class="btn btn-primary px-3 d-none d-lg-flex">Đăng
                    nhập</a>
        @endif



    </nav>
</div>
<!-- Navbar End -->
