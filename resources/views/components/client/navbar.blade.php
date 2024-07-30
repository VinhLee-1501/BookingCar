<!-- Navbar Start -->
<div class="container-fluid nav-bar bg-transparent">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
        <a href="index.blade.php" class="navbar-brand d-flex align-items-center text-center">
            <div class="icon p-2 me-2">
                <img class="img-fluid" src="{{asset('client/img/logo-hcn.png')}}" style="width: 180px;">
            </div>
            {{-- <h1 class="m-0 text-primary">Makaan</h1> --}}
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="{{route('user.home')}}"
                   class="nav-item nav-link {{ request()->routeIs('user.home') ? 'active' : '' }}">Trang chủ</a>
                <a href="{{route('user.schedule')}}"
                   class="nav-item nav-link {{ request()->routeIs('user.schedule') ? 'active' : '' }} ">Lịch trình</a>
                <a href="{{route('user.searchTicket')}}"
                   class="nav-item nav-link {{ request()->routeIs('user.searchTicket') ? 'active' : '' }} ">Tra cứu
                    vé</a>
                <a href="{{route('user.news')}}"
                   class="nav-item nav-link {{ request()->routeIs('user.news') ? 'active' : '' }} ">Tin tức</a>
                <a href="{{route('user.contact')}}"
                   class="nav-item nav-link {{ request()->routeIs('user.contact') ? 'active' : '' }} ">Liên hệ</a>
                <a href="{{route('user.about')}}"
                   class="nav-item nav-link {{ request()->routeIs('user.about') ? 'active' : '' }} ">Về chúng tôi</a>
            </div>
            <a href="{{route('user.signin')}}" class="btn btn-primary px-3 d-none d-lg-flex">Đăng nhập</a>
        </div>
    </nav>
</div>
<!-- Navbar End -->
