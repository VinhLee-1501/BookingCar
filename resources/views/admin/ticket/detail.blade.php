@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <h5 class="card-title fw-semibold mb-4">Chi tiết vé xe</h5>
        <button id="export-btn" class="btn btn-primary">Xuất Hình Ảnh</button>

        <div class="exportImg card mx-auto shadow p-3 mb-5 bg-body roundedt" style="max-width: 500px;">
            <div class="card-body ">
                <div class="text-center">
                    <img src="{{ asset('admin/images/logos/BEEBUS-logo.png') }}" width="180" alt="Logo"
                        class="ticket-logo">
                    {{-- <h2 class="fs-6">Vé Xe</h2> --}}
                </div>
                <div class="mb-3 bg-white">
                    <p class="fw-semibold fs-4">Thông tin hành khách</p>
                    <p class="d-flex justify-content-between">Họ và tên:<span>{{ $user_name }}</span></p>
                    <p class="d-flex justify-content-between">Số điện thoại:<span>{{ $phone }}</span></p>
                    <p class="d-flex justify-content-between">Email:<span>{{ $email }}</span></p>

                </div>
                {{-- <br> --}}
                <hr>
                <p class="fw-semibold fs-4">Thông tin lượt đi</p>
                <div class="ticket-details ">
                    <p class="d-flex justify-content-between">Trạng thái
                        :<span>{{ $status == 1 ? 'Đã thanh toán' : 'Chưa thanh toán' }}<span></p>
                    <p class="d-flex justify-content-between">Vị trí ghế:<span>{{ $seat_position }}</span>
                    <p class="d-flex justify-content-between">Chuyến đi:<span>{{ $name_the_ride }}</span></p>
                    <p class="d-flex justify-content-between">Thời gian khởi
                        hành:<span>{{ \Carbon\Carbon::parse($time_to_go)->format('H:i d/m/Y') }}</span>
                    </p>
                    <p class="d-flex justify-content-between">Số lượng vé:<span>1 Vé</span></p>
                    <p class="d-flex justify-content-between">Điểm đi:<span>{{ $start_location }}</span></p>
                    <p class="d-flex justify-content-between">Điểm đến:<span>{{ $end_location }}</span></p>
                </div>
                <div class="text-center ticket-footer">
                    <p class="text-danger">Quý khách vui lòng đến trước 30 phút để làm thủ tục</p>
                    <p>Hotline: 1900 123 456</p>
                </div>
            </div>
        </div>
    </div>
@endsection
