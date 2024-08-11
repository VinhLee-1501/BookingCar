@php use Carbon\Carbon; @endphp
@extends('layouts.client.app')

@section('content')
    <!-- Form Start -->

    <div class="p-5 wow fadeInUp col-12 mt-5" data-wow-delay="0.5s">
        <div class="d-flex justify-content-center align-items-center mt-5">
            <div class="card" style="width: 50rem">
                @if ( isset($error) )
                <p class="text-center text-danger">{{ $error }}</p>
                @else
                    @php
                        $seatCounts = $tickets->groupBy('seat_number')->map->count();
                    @endphp
                    @foreach( $tickets as $ticket)
                    <div class="row col-md-12">
                        <div class="col-md-4">
                            <img class="img-fluid p-1" src="{{asset('client/img/logo-hcn.png')}}" style="width: 180px;">
                        </div>
                        <div class="col-md-8 text-end">
                            <h3 class="">BeeCar</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-text text-center">Vé xe khách</h3>
                        <p class="text-start ps-2">Mã vé xe: {{ $ticket->ticket_name }}</p>
                        <div class="d-flex justify-around align-items-center col-md-12">
                            <div class="col-md-6">
                                <table class="table table-borderless">
                                    <tbody>
                                    <tr>
                                        <td>Họ và tên:</td>
                                        <td>{{ $ticket->user_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>SDT:</td>
                                        <td>{{ $ticket->user_phone }}</td>
                                    </tr>
                                    <tr>
                                        <td>Địa chỉ:</td>
                                        <td>{{ $ticket->user_address }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-borderless">
                                    <tbody>
                                    <tr>
                                        <td>Tuyến đường:</td>
                                        <td>{{ $ticket->ride_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Số ghế:</td>
                                        <td>{{ $ticket->seat_position_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Số xe:</td>
                                        <td>{{ $ticket->license_plates  }}</td>
                                    </tr>
                                    <tr>
                                        <td>Thời gian khởi hành:</td>
                                        <td>{{ Carbon::parse($ticket->time_to_go)->format('d-m-Y H:i') }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @php
                            $seatCount = $seatCounts[$ticket->seat_number];
                            $pricePerTicket = $ticket->prepayment / $seatCount;
                        @endphp
                        <h5 class="text-center text-danger">Giá tiền: {{ number_format($pricePerTicket) }} đ/lượt</h5>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- Form End -->
@endsection
