@extends('layouts.client.login')

@section('content')
    <div class="container-xxl py-5">

        <!-- Tabs content -->
        <div class="container bg-light p-md-5" style="width: 600px;">
            <ul class="bg-primary mb-5" id="ex1" role="tablist">
                <h6 class="text-white p-2 text-center" id="tab-login">Mật khẩu mới</h6>
            </ul>
            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="form-label"/>
                    <x-text-input id="email" class="block mt-1 w-full form-control" type="email" name="email"
                                  :value="old('email', $request->email)" required autofocus autocomplete="username"/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Mật khẩu')" class="form-label"/>
                    <x-text-input id="password" class="block mt-1 w-full form-control" type="password" name="password"
                                  required autocomplete="new-password"/>
                    <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Nhập lại mật khẩu')" class="form-label"/>

                    <x-text-input id="password_confirmation" class="block mt-1 w-full form-control" type="password"
                                  name="password_confirmation" required autocomplete="new-password"/>

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ms-4 btn btn-primary btn-block mb-4">
                        {{ __('Cập nhật mật khẩu') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
@endsection
