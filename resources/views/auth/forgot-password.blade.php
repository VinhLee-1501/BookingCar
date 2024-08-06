@extends('layouts.client.login')

@section('content')
    <div class="container-xxl py-5">

        <!-- Tabs content -->
        <div class="container bg-light p-md-5" style="width: 600px;">
            <ul class="bg-primary mb-5" id="ex1" role="tablist">
                <h6 class="text-white p-2 text-center" id="tab-login">Quên mật khẩu</h6>
            </ul>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="form-label"/>
                    <x-text-input id="email" class="block mt-1 w-full form-control" type="email" name="email"
                                  :value="old('email')" required autofocus/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ms-4 btn btn-primary btn-block mb-4">
                        {{ __('Xác nhận Email') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
@endsection
