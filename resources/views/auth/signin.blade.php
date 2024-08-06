@extends('layouts.client.login')

@section('content')
    <div class="container-xxl py-5">
        <!-- Tabs content -->
        <div class="container bg-light p-md-5" style="width: 600px;">
            <!-- Pills navs -->
            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="tab-login" data-mdb-pill-init href="#pills-login" role="tab"
                       aria-controls="pills-login" aria-selected="true">Đăng nhập</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="tab-register" href="{{route('signup')}}"
                       aria-controls="pills-register" aria-selected="false">Đăng ký</a>
                </li>
            </ul>
            <!-- Pills navs -->

            <!-- Pills content -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                    <form method="POST" action="{{ route('siginStore') }}">
                        @csrf
                        <!-- Email Address -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <x-input-label for="email" :value="__('Email')" class="form-label"/>
                            <x-text-input id="email" class="block mt-1 w-full form-control" type="email"
                                          name="email" :value="old('email')" required autofocus
                                          autocomplete="username"/>
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red"/>
                        </div>


                        <!-- Password -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <x-input-label for="password" :value="__('Mật khẩu')" class="form-label "
                                           for="loginPassword"/>

                            <x-text-input id="password" class="block mt-1 w-full form-control" type="password"
                                          name="password" required autocomplete="current-password"/>

                            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                        </div>


                        <!-- 2 column grid layout -->
                        <div class="row mb-4">
                            <div class="col-md-6 d-flex justify-content-center">
                                <!-- Checkbox -->
                                <div class="form-check mb-3 mb-md-0">

                                    <label for="remember_me" class="inline-flex items-center form-check-label mt-4">
                                        <input id="remember_me" type="checkbox"
                                               class="form-check-input rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                               name="remember">
                                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex justify-content-center">
                                <!-- Simple link -->
                                <div class="flex items-center justify-end mt-4">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                           href="{{ route('password.request') }}">
                                            {{ __('Quên mật khẩu ?') }}
                                        </a>
                                    @endif


                                </div>
                            </div>
                        </div>
                        <div class="row d-flex">
                            <div class="col-md-6 mt-2">
                                <x-primary-button data-mdb-button-init data-mdb-ripple-init
                                                  class=" btn btn-primary p-2">
                                    {{ __('Đăng nhập') }}
                                </x-primary-button>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('auth.google') }}">
                                    <img
                                        src="https://alpineschools.org/wp-content/uploads/2021/08/btn_google_signin_dark_pressed_web@2x.png"
                                        class=" img-fluid" alt="">
                                </a>
                            </div>

                        </div>


                        <!-- Register buttons -->
                        <div class="text-center mt-3">
                            <p>Không có tài khoản? <a href="{{route('signup')}}">Đăng ký</a></p>
                        </div>
                    </form>
                </div>

            </div>
            <!-- Pills content -->
        </div>
    </div>
@endsection
