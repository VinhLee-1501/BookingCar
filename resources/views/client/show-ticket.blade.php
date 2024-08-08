@php use Carbon\Carbon; @endphp
@extends('layouts.client.app')

@section('content')
    <!-- Form Start -->

    <div class="p-5 wow fadeInUp col-12 mt-5" data-wow-delay="0.5s">
        <h2 class="mb-3 text-center">Tra cứu thông tin đặt vé</h2>
        <form action="{{ route('user.searchInfo') }}" method="get">
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
                        <input type="email" class="form-control" id="email" placeholder="Nhập mã vé" name="ticket_id">
                        <label for="email">Nhập mã vé</label>
                    </div>
                </div>
                <div class="col-4">
                    <button class="btn btn-primary w-100 py-3" type="submit">Tra cứu</button>
                </div>
            </div>
        </form>

        <div class="d-flex justify-content-center align-items-center mt-5">
            <div class="card" style="width: 50rem">
                @if ( isset($error) )
                <p class="text-center text-danger">{{ $error }}</p>
            @else
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
                            <p class="text-start ps-2">Mã vé xe: 0{{ $ticket->name }}</p>
                            <div class="d-flex justify-around align-items-center col-md-12">
                                <div class="col-md-6">
                                    <table class="table table-borderless">
                                        <tbody>
                                        <tr>
                                            <td>Họ và tên:</td>
                                            <td>{{ $ticket->user_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Giới tính:</td>
                                            <td>{{ $ticket->gender }}</td>
                                        </tr>
                                        <tr>
                                            <td>SDT:</td>
                                            <td>{{ $ticket->phone }}</td>
                                        </tr>
                                        <tr>
                                            <td>Địa chỉ:</td>
                                            <td>{{ $ticket->address }}</td>
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
                                            <td>{{ $ticket->seat_name }}</td>
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
                            <h5 class="text-center text-danger">Giá tiền: {{ number_format($ticket->pre_payment) }}
                                đ/lượt</h5>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>


    </div>


    <!-- Form End -->
@endsection
