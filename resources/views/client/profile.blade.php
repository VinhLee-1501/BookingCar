@extends('layouts.client.master')

@section('content')

    <div class="container bg-light mt-4">
        <div class="row mt-4">
            <div class="p-5">
                <h5 class="text-center">Thông tin</h5>
            </div>
            <div class="col-md-4">
                <!-- Ảnh đại diện -->

                <div class="card mb-4">
                    <div class="card-body text-center">
                        {{-- <img src="duong_dan_den_anh_dai_dien.jpg" alt="Ảnh đại diện" class="rounded-circle img-fluid" style="width: 150px;"> --}}
                        <h5 class="my-3">{{$user->name}}</h5>
                        <p class="text-muted mb-1">
                        @if ($user->role == 0)
                            <p class="text-muted mb-1">Khách hàng</p>
                        @else
                            <p class="text-muted mb-1">Quản trị</p>
                        @endif
                        <p class="text-muted mb-4">{{ $user->address }}</p>
                        <a href="{{route('user.edituser')}}" class="btn btn-primary">Cập nhật hồ sơ</a>

                    </div>
                </div>

            </div>

            <div class="col-md-8">
                <!-- Thông tin chi tiết -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5>Thông tin cá nhân</h5>
                        <p class="text-muted">Họ tên: {{$user->name}}</p>
                        <p class="text-muted">Email: {{$user->email}}</p>
                        <p class="text-muted">Số điện thoại: {{$user->phone}}</p>
                        <p class="text-muted">Địa chỉ: {{$user->address}}</p>
                        <p class="text-muted">Địa chỉ: {{$user->address}}</p>

                        <h5>Lịch sử đặt xe</h5>
                        <ul class="list-unstyled">
                            <li class="media">
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Chuyến Cần Thơ - Vĩnh Long</h6>
                                    Ngày đặt: 01/01/2024 - Trạng thái: Đã hoàn thành
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Thông tin liên hệ -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5>Thông tin liên hệ</h5>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-envelope"></i> {{$user->email}}</li>
                            <li><i class="bi bi-phone"></i> {{$user->phone}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
