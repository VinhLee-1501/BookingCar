@php use Carbon\Carbon; @endphp
@extends('layouts.client.master')

@section('content')
    <div class="container bg-light mt-4">
        <div class="row">
            @foreach($tickets as $ticket)
                @if($loop->index % 3 == 0 && $loop->index > 0)
                    </div><div class="row">
                @endif
                <div class="col-12 col-md-4 mb-4">
                    <div class="card card-custom">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="route-info text-center">{{ $ticket->ride_name }}</h5>
                            </div>
                        </div>
                        <div class="card-body card-body-custom">
                            <div>
                                Mã vé:
                                <h6 class="time-info">{{ $ticket->ticket_name }}</h6>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">

                                <div>
                                    <h5 class="time-info">{{ Carbon::parse($ticket->time_to_go)->format('H:i') }}</h5>
                                </div>
                                <div>
                                    <i class="bi bi-arrow-right"></i>
                                </div>
                                <div>
                                    <h5 class="time-info">{{ Carbon::parse($ticket->timefrom)->format('H:i') }}</h5>
                                </div>
                            </div>
                            <div class="details">
                                <h6>Lịch trình</h6>
                                <p><strong>{{ Carbon::parse($ticket->time_to_go)->format('H:i') }}:</strong>
                                    {{ $ticket->start_station_name }}</p>
                                <p><strong>{{ Carbon::parse($ticket->timefrom)->format('H:i') }}:</strong>
                                    {{ $ticket->end_station_name }}</p>
                            </div>
                            <div class="details">
                                <h6>Thông tin hành khách</h6>
                                <div class="d-flex col-12 m-0 p-0">
                                    <p class="col-md-4 m-0 p-0">Họ và tên</p>
                                    <b class="col-md-8 text-end">{{ $ticket->user_name }}</b>
                                </div>
                                <div class="d-flex col-12 m-0 p-0">
                                    <p class="col-md-4 m-0 p-0">Số điện thoại</p>
                                    <b class="col-md-8 text-end">{{ $ticket->user_phone }}</b>
                                </div>
                            </div>
                            <div class="details">
                                <h6>Thông tin chuyến xe</h6>
                                <div class="d-flex col-12">
                                    <p class="col-md-4 m-0 p-0">Số ghế</p>
                                    <b class="col-md-8 text-end text-warning">
                                        {{ $ticket->seat_name }}
                                    </b>
                                </div>
                                <div class="d-flex col-12">
                                    <p class="col-md-4 m-0 p-0">Số Xe</p>
                                    <b class="col-md-8 text-end">{{ $ticket->license_plates }}</b>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end align-items-center mt-3">
                                <h4 class="text-danger">Tổng tiền:  {{ number_format($ticket->prepayment, 0, ',', '.') }} đ</h4>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
