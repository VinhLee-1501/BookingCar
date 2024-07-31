@extends('layouts.client.login')

@section('content')
    <div class="container-xxl py-5">
        <!-- Tabs content -->
        <div class="container bg-light p-md-5" style="width: 600px;">
            <!-- Pills navs -->
            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link {{ request()->routeIs('user.signin') ? 'active' : '' }}"
                       href="{{ route('user.signin') }}" role="tab" aria-controls="pills-login"
                       aria-selected="true">Đăng nhập</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link {{ request()->routeIs('user.signup') ? 'active' : '' }}" id="tab-register"
                       href="{{ route('user.signup') }}" role="tab" aria-controls="pills-register"
                       aria-selected="false">Đăng ký</a>
                </li>
            </ul>
            <!-- Pills navs -->

            <!-- Pills content -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                    <form class="">
                        {{-- <div class="text-center mb-3">
                            <p>Đăng nhập bằng:</p>
                            <button type="button" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </button>

                            <button type="button" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-google"></i>
                            </button>

                            <button type="button" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                            </button>

                            <button type="button" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-github"></i>
                            </button>
                        </div> --}}

                        {{-- <p class="text-center">or:</p> --}}

                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="email" id="loginName" class="form-control" />
                            <label class="form-label" for="loginName">Số điện thoại</label>
                        </div>

                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="password" id="loginPassword" class="form-control" />
                            <label class="form-label" for="loginPassword">Mật khẩu</label>
                        </div>

                        <!-- 2 column grid layout -->
                        <div class="row mb-4">
                            <div class="col-md-6 d-flex justify-content-center">
                                <!-- Checkbox -->
                                <div class="form-check mb-3 mb-md-0">
                                    <input class="form-check-input" type="checkbox" value="" id="loginCheck"
                                        checked />
                                    <label class="form-check-label" for="loginCheck"> Remember me </label>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex justify-content-center">
                                <!-- Simple link -->
                                <a href="#!">Quên mật khẩu?</a>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" data-mdb-button-init data-mdb-ripple-init
                            class="btn btn-primary btn-block mb-4">Đăng nhập</button>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>Không có tài khoản? <a href="#!">Đăng ký</a></p>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Pills content -->
        </div>
    </div>
@endsection
