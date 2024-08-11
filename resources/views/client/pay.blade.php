@php use Carbon\Carbon; @endphp
@extends('layouts.client.master')

@section('content')
    <div class="container bg-light mt-4">
        <div class="row">
            <div class="col-12 col-md-3 mb-4">
                <div class="card mt-3">
                    <div class="card-header">
                        Phương thức thanh toán
                    </div>
                    <ul class="list-group">
                        {{--                        <li class="list-group-item">--}}
                        {{--                            <input class="form-check-input me-1" type="radio" name="payment_method" value="vnpay"--}}
                        {{--                                   id="vnpayRadio" checked>--}}
                        {{--                            <label class="form-check-label" for="vnpayRadio">Thanh toán qua VNPAY</label>--}}
                        {{--                        </li>--}}
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="payment_method" value="momo"
                                   id="momoRadio">
                            <label class="form-check-label" for="momoRadio">Thanh toán qua MOMO</label>
                        </li>
                        {{--                        <li class="list-group-item">--}}
                        {{--                            <input class="form-check-input me-1" type="radio" name="payment_method" value="cash"--}}
                        {{--                                   id="cashRadio">--}}
                        {{--                            <label class="form-check-label" for="cashRadio">Thanh toán tiền mặt</label>--}}
                        {{--                        </li>--}}
                    </ul>
                </div>
                <div class="card mt-3">
                    <div class="card-header">
                        Mã thanh toán
                    </div>

                </div>
            </div>
            <div class="col-12 col-md-5 p-4">
                <div class="row justify-content-center">
                    <h4 class="text-center">Xuất vé</h4>
                    <div class="card card-custom">
                        <div class="card-header card-header-custom d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="route-info text-center">{{ $theRide->carriageWay->name }}</h5>
                            </div>

                        </div>
                        <div class="card-body card-body-custom">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="time-info">{{ Carbon::parse($theRide->time_to_go)->format('H:i') }}</h5>
                                    {{--                                    <p class="mb-0">4 giờ</p>--}}
                                </div>
                                <div>
                                    <i class="bi bi-arrow-right"></i>
                                </div>
                                <div>
                                    <h5 class="time-info">{{ Carbon::parse($theRide->estimated_arrival_time)->format('H:i') }}</h5>
                                </div>
                            </div>
                            <div class="details">
                                <h6>Lịch trình</h6>
                                <p><strong>{{ Carbon::parse($theRide->time_to_go)->format('H:i') }}:</strong>
                                    {{ $theRide->carriageWay->stationsTo->name}}</p>
                                <p><strong>{{ Carbon::parse($theRide->estimated_arrival_time)->format('H:i') }}
                                        :</strong>
                                    {{ $theRide->carriageWay->stationsFrom->name}}</p>
                            </div>
                            <div class="details">
                                <h6>Thông tin hành khách</h6>
                                <div class="d-flex col-12 m-0 p-0">
                                    <p class="col-md-4 m-0 p-0">Họ và tên</p>
                                    <b class="col-md-8 text-end">{{ $infoUser->name }}</b>
                                </div>
                                <div class="d-flex col-12 m-0 p-0">
                                    <p class="col-md-4  m-0 p-0">Số điện thoại</p>
                                    <b class="col-md-8 text-end">{{ $infoUser->phone }}</b>
                                </div>
                            </div>
                            <div class="details">
                                <h6>Thông tin chuyến xe</h6>
                                <div class="d-flex col-12">
                                    <p class="col-md-4  m-0 p-0">Số ghế</p>
                                    <b class="col-md-8 text-end text-warning">
                                        @foreach( $selectedSeats as $seat)
                                            {!! $seat.', ' !!}
                                        @endforeach
                                    </b>
                                </div>
                                <div class="d-flex col-12">
                                    <p class="col-md-4  m-0 p-0">Số Xe</p>
                                    <b class="col-md-8 text-end">{{ $theRide->car->license_plates }}</b>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end align-items-center mt-3">
                                <h4 class="text-danger">Tổng tiền: {{ $data['totalPrice'] }}.000đ</h4>
                            </div>
                            <div class="d-grid gap-2">
                                <form id="momoForm" action="{{ route('user.momo_payment') }}" method="post">
                                    @csrf
                                    <input name="totalPrice" value="{{ $data['totalPrice'] }}" hidden>
                                    <input name="the_ride_id" value="{{ $theRide->id }}" hidden>
                                    <input name="name" value="{{ $data['name'] }}" hidden>
                                    <input name="phone" value="{{ $data['phone'] }}" hidden>
                                    <input name="email" value="{{ $data['email'] }}" hidden>
                                    @foreach( $selectedSeats as $seat)
                                        <input name="seat_id[]" value="{{ $seat }}" hidden>
                                    @endforeach
                                    <button type="submit" class="btn btn-primary" name="payUrl">Thanh toán</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-5">
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card mt-3 p-4">
                    <h6 class="p-2">Thông tin khách hàng</h6>
                    <div class="ps-4 pe-4">
                        <div class="d-flex col-12 m-0 p-0">
                            <p class="col-md-4 m-0 p-0">Họ và tên</p>
                            <b class="col-md-8 text-end">{{ $infoUser->name }}</b>
                        </div>
                        <div class="d-flex col-12">
                            <p class="col-md-4  m-0 p-0">Số điện thoại</p>
                            <b class="col-md-8 text-end ">{{ $infoUser->phone }}</b>
                        </div>
                        <div class="d-flex col-12">
                            <p class="col-md-4  m-0 p-0">Email</p>
                            <b class="col-md-8 text-end">{{ $infoUser->email }}</b>
                        </div>
                    </div>
                </div>

                {{--                <div class="card mt-3 p-4">--}}
                {{--                    <h6 class="p-2">Thông tin lượt đi</h6>--}}
                {{--                    <div class="ps-4 pe-4">--}}
                {{--                        <div class="d-flex col-12 m-0 p-0">--}}
                {{--                            <p class="col-md-4 m-0 p-0">Tuyến xe</p>--}}
                {{--                            <b class="col-md-8 text-end">Can Tho - Mien Tay</b>--}}
                {{--                        </div>--}}
                {{--                        <div class="d-flex col-12 m-0 p-0">--}}
                {{--                            <p class="col-md-4  m-0 p-0">Thời gian xuất bến</p>--}}
                {{--                            <b class="col-md-8 text-end">14:30 30/07/2024</b>--}}
                {{--                        </div>--}}
                {{--                        <div class="d-flex col-12">--}}
                {{--                            <p class="col-md-4  m-0 p-0">Số lượng ghế</p>--}}
                {{--                            <b class="col-md-8 text-end">1</b>--}}
                {{--                        </div>--}}
                {{--                        <div class="d-flex col-12">--}}
                {{--                            <p class="col-md-4  m-0 p-0">Số ghế</p>--}}
                {{--                            <b class="col-md-8 text-end text-warning">14A</b>--}}
                {{--                        </div>--}}
                {{--                        <div class="d-flex col-12">--}}
                {{--                            <p class="col-md-4  m-0 p-0">Điểm lên xe</p>--}}
                {{--                            <b class="col-md-8 text-end">Cần Thơ</b>--}}
                {{--                        </div>--}}
                {{--                        <div class="d-flex col-12">--}}
                {{--                            <p class="col-md-4  m-0 p-0">Thời gian đến điểm lên xe</p>--}}
                {{--                            <b class="col-md-8 text-end text-warning">Trước 14:00 30/07/2024</b>--}}
                {{--                        </div>--}}
                {{--                        <div class="d-flex col-12">--}}
                {{--                            <p class="col-md-4  m-0 p-0">Điểm trả khách</p>--}}
                {{--                            <b class="col-md-8 text-end">BX Miền Tây</b>--}}
                {{--                        </div>--}}
                {{--                        <div class="d-flex col-12">--}}
                {{--                            <p class="col-md-4  m-0 p-0">Tổng tiền lượt đi</p>--}}
                {{--                            <b class="col-md-8 text-end text-danger">165.000đ</b>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
@endsection
