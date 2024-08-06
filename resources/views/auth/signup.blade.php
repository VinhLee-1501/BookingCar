@extends('layouts.client.login')

@section('content')
    <div class="container-xxl py-5">
        <!-- Tabs content -->
        <div class="container bg-light p-md-5" style="width: 600px;">
            <!-- Pills navs -->
            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">

                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="tab-register" href="{{route('signin')}}" aria-selected="false">Đăng nhập</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="tab-login" aria-selected="true">Đăng ký</a>
                </li>
            </ul>
            <!-- Pills navs -->

            <!-- Pills content -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                    <form method="POST" action="{{ route('signup') }}">
                        @csrf
                        {{-- name --}}
                        <div data-mdb-input-init class="form-outline mb-4">
                            <x-input-label for="name" :value="__('Name')" class="form-label"/>
                            <x-text-input id="name" class="block mt-1 w-full form-control" type="text"
                                          name="name" :value="old('name')" required autofocus autocomplete="name"/>
                            <x-input-error :messages="$errors->get('Vui lòng nhập tên')" class="mt-2"/>
                        </div>

                        <!-- Email Address -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <x-input-label for="email" :value="__('Email')" class="form-label"/>
                            <x-text-input id="email" class="block mt-1 w-full form-control" type="email"
                                          name="email" :value="old('email')" required autofocus
                                          autocomplete="username"/>
                            <x-input-error :messages="$errors->get('Vui lòng nhập email')" class="mt-2"/>
                        </div>


                        <!-- Password -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <x-input-label for="password" :value="__('Mật khẩu')" class="form-label"/>
                            <x-text-input id="password" class="block mt-1 w-full form-control"
                                          type="password"
                                          name="password"
                                          required autocomplete="new-password"/>
                            @error('password')
                            <x-input-error :messages="$message" class="mt-2"/>
                            @enderror
                        </div>

                        <!--Confirm Password -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <x-input-label for="password_confirmation" :value="__('Nhập lại mật khẩu')"
                                           class="form-label"/>
                            <x-text-input id="password_confirmation" class="block mt-1 w-full  form-control"
                                          type="password"
                                          name="password_confirmation" required autocomplete="new-password"/>
                            @error('password')
                            <x-input-error :messages="$message" class="mt-2"/>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                               href="{{ route('signin') }}">
                                {{ __('Bạn đã đăng kí?') }}
                            </a>
                            <x-primary-button class="ms-4 btn btn-primary btn-block mb-4">
                                {{ __('Đăng ký') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>

            </div>
            <!-- Pills content -->
        </div>
    </div>
@endsection
