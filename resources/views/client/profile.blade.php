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
                        <h5 class="my-3">{{$users['user']->name}}</h5>
                        <p class="text-muted mb-1">
                        @if ($users['user']->role == 0)
                            <p class="text-muted mb-1">Khách hàng</p>
                        @else
                            <p class="text-muted mb-1">Quản trị</p>
                        @endif
                        <p class="text-muted mb-4">{{$users['user']->address }}</p>
                        <a href="{{route('user.edituser')}}" class="btn btn-primary">Cập nhật hồ sơ</a>

                    </div>
                </div>

            </div>

            <div class="col-md-8">
                <!-- Thông tin chi tiết -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5>Thông tin cá nhân</h5>
                        <p class="text-muted">Họ tên: {{$users['user']->name}}</p>
                        <p class="text-muted">Email: {{$users['user']->email}}</p>
                        <p class="text-muted">Số điện thoại: {{$users['user']->phone}}</p>
                        <p class="text-muted">Địa chỉ: {{$users['user']->address}}</p>


                    </div>
                </div>

                <!-- Thông tin liên hệ -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5>Lịch sử đặt xe</h5>
                        <ul class="list-unstyled">
                            @foreach($users['userTickets'] as $ticket)
                            <li class="media">
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">{{$ticket->ride_name}}</h6>
                                    Mã vé: {{$ticket->ticket_car_name}} - Ngày đặt: {{ Carbon\Carbon::parse($ticket->ticket_created_at)->format('d/m/Y H:i') }} - Trạng thái:
                                    @if($ticket->user_role == '0')

                                       Đã thanh toán
                                    @else
                                        Chưa thanh toán
                                    @endif
                                 </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
