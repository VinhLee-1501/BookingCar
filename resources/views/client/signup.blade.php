@extends('layouts.client.login')

@section('content')
    <div class="container-xxl py-5">
        <!-- Tabs content -->
        <div class="container bg-light p-md-5" style="width: 600px;">
            <!-- Pills navs -->
            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link {{ request()->routeIs('user.signin') ? 'active' : '' }}" id="tab-login" data-mdb-pill-init href="{{ route('user.signin') }}"
                        role="tab" aria-controls="pills-login" aria-selected="true">Đăng nhập</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link {{ request()->routeIs('user.signup') ? 'active' : '' }}" id="tab-register" data-mdb-pill-init href="{{ route('user.signup') }}"
                        role="tab" aria-controls="pills-register" aria-selected="false">Đăng ký</a>
                </li>
            </ul>
            <!-- Pills navs -->

            <!-- Pills content -->
            <div class="tab-content">
                <div class="" id="" role="" aria-labelledby="">
                    <form>
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="text" id="registerUsername" class="form-control" />
                            <label class="form-label" for="registerUsername">Tài khoản</label>
                        </div>
                        
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="number" id="" class="form-control" />
                            <label class="form-label" for="">Số điện thoại</label>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="email" id="registerEmail" class="form-control" />
                            <label class="form-label" for="registerEmail">Email</label>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="password" id="registerPassword" class="form-control" />
                            <label class="form-label" for="registerPassword">Mật khẩu</label>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="password" id="registerRepeatPassword" class="form-control" />
                            <label class="form-label" for="registerRepeatPassword">Nhập lại mật khẩu</label>
                        </div>

                        <div class="form-check d-flex justify-content-center mb-4">
                            <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
                                aria-describedby="registerCheckHelpText" />
                            <label class="form-check-label" for="registerCheck">
                                Tôi đã đọc và đồng ý với các điều khoản!
                            </label>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" data-mdb-button-init data-mdb-ripple-init
                            class="btn btn-primary btn-block mb-3">Đăng ký</button>
                    </form>
                </div>
            </div>
            <!-- Pills content -->
        </div>
    </div>
@endsection
