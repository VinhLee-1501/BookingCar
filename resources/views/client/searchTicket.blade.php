
@php use Carbon\Carbon; @endphp

@extends('layouts.client.app')

@section('content')
    <!-- Form Start -->

    <div class="p-5 wow fadeInUp col-12 mt-5" data-wow-delay="0.5s">
        <h2 class="mb-3 text-center">Tra cứu thông tin đặt vé</h2>
        @if(session('error'))
            <span class="alert alert-danger d-flex justify-center align-items-center">{{ session('error')}}</span>
        @endif
        <form action="{{ route('user.search') }}" method="get">
            @method('GET')
            @csrf
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="phone" class="form-control" id="name" placeholder="Nhập mã vé" name="phone">
                        <label for="phone">Nhập số điện thoại</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="email" placeholder="Nhập mã vé" name="name">
                        <label for="email">Nhập mã vé</label>
                    </div>
                </div>
                <div class="col-4">
                    <button class="btn btn-primary w-100 py-3" type="submit">Tra cứu</button>
                </div>
            </div>
        </form>


    </div>


    <!-- Form End -->
@endsection
