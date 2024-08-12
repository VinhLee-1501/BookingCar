@php use Carbon\Carbon; @endphp
@extends('layouts.client.app')
@section('content')
    <div class="bg-light p-3">
        <div class="row pt-4">
            <div class="col-md-8">
                <div class=" bg-white rounded border">
                    <div class="flex-1">
                        <div class="px-3 py-3">
                            <div class="row">
                                <p class="col-md-3">Chọn ghế</p>
                            </div>
                            @if (session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session()->get('error') }}
                                </div>
                            @endif
                            <div class="row my-4 ">
                                <div class="col-md-3">
                                    <div class="mb-4 text-center"><span>Tầng trên</span></div>
                                    <table class="table table-borderless">
                                        @foreach( $seatPositionsA->chunk(3) as $chunk)
                                            <tbody>
                                            <tr class="d-flex items-center gap-1 justify-content-between">
                                                @foreach($chunk as $seat)
                                                    <td class="position-relative mt-1 d-flex justify-center text-center">
                                                        <img width="32" src="{{
                                                                $seat->status == 1 ? 'https://futabus.vn/images/icons/seat_active.svg'
                                                                : 'https://futabus.vn/images/icons/seat_disabled.svg' }}"
                                                             alt="seat icon" id="seat-img-{{ $seat->id }}">
                                                        <label
                                                            class="position-absolute top-50 start-50 translate-middle"
                                                            for="seat{{ $seat->id }}">
                                                        <span
                                                            class="position-absolute top-50 start-50 translate-middle">
                                                            {{ $seat->name }}
                                                        </span>
                                                        </label>
                                                        <input type="checkbox" value="{{ $seat->name }}"
                                                               id="seat{{ $seat->id }}"
                                                               hidden
                                                               onchange="updateSeat('{{ $seat->id }}', '{{ $seat->price }}', '{{ $seat->name }}')">
                                                    </td>
                                                @endforeach

                                            </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>

                                <div class="col-md-3 ">
                                    <div class="mb-4 text-center"><span>Tầng dưới</span></div>
                                    <table class="table table-borderless">
                                        @foreach( $seatPositionsB->chunk(3) as $chunk)
                                            <tbody>
                                            <tr class="d-flex items-center gap-1 justify-content-between">
                                                @foreach( $chunk as $seat)
                                                    <td class="position-relative mt-1 d-flex justify-center text-center">
                                                        <img width="32" class="cursor-not-allowed" src="{{
                                                                $seat->status == 1 ? 'https://futabus.vn/images/icons/seat_active.svg'
                                                                : 'https://futabus.vn/images/icons/seat_disabled.svg' }}"
                                                             alt="seat icon" id="seat-img-{{ $seat->id }}">
                                                        <label
                                                            class="position-absolute top-50 start-50 translate-middle "
                                                            for="seat{{ $seat->id }}">
                                                        <span
                                                            class="position-absolute top-50 start-50 translate-middle">
                                                            {{ $seat->name }}
                                                        </span>
                                                        </label>
                                                        <input class="ps-1 cursor-not-allowed" type="checkbox"
                                                               value="{{ $seat->name }}"
                                                               id="seat{{ $seat->id }}"
                                                               hidden
                                                               {{ $seat->status === 0 ? 'disabled' :''}}
                                                               onchange="updateSeat('{{ $seat->id }}', '{{ $seat->price }}', '{{ $seat->name }}')">
                                                    </td>
                                                @endforeach
                                            </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="col ml-4 mt-5 ">
                                    <div class="mr-8 d-flex items-center">
                                        <span class="p-2 badge m-1" style="background-color: gray"> </span>Đã bán
                                    </div>
                                    <div class="mr-8 d-flex items-center">
                                        <span class="badge bg-info m-1"> </span>Còn trống
                                    </div>
                                    <div class=" d-flex items-center">
                                        <span class="badge m-1" style="background-color: orangered"> </span> Đang chọn
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-1 rounded border bg-white">
                    <div class="row px-3 py-3">
                        <div class="col-md-6 ">
                            <p class="text-black"> Thông tin khách hàng</p>
                            <form action="{{ route('user.payment') }}" method="post" class="form pe-4 payment">
                                @csrf
                                <div class="mb-3">
                                    <div class="">
                                        <label for="CustName" class="" title="">
                                            <div class="">Họ và tên<span class="mx-1 text-danger">*</span></div>
                                        </label>
                                    </div>
                                    <div class="">
                                        <div class="content">
                                            <span class="">
                                                <input class="form-control" type="text" name="name" id="CustName"
                                                       value="{{ old('name') }}">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="">
                                        <label for="CustMobile" class="" title="">
                                            <div>Số điện thoại<span class="mx-1 text-danger">*</span></div>
                                        </label>
                                    </div>
                                    <div class="">
                                        <div class="">
                                            <div class="">
                                                <span class=" mt-1">
                                                    <input type="tel" class="form-control" id="CustMobile" name="phone"
                                                           value="{{ old('phone') }}">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="">
                                        <label for="CustEmail" class="" title="">
                                            <div>Email<span class="mx-1 text-danger">*</span></div>
                                        </label>
                                    </div>
                                    <div class="">
                                        <div class="">
                                            <span class="mt-1">
                                                <input type="email" class="form-control" id="CustEmail" name="email"
                                                       value="{{ old('email') }}">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex bg-white mt-1 border rounded mb-3 p-4 justify-content-between">
                                    <div class="d-flex flex-col"><span class="">BEECAR</span>
                                        <span class="mt-2 fw-bold fs-3 text-black total-price">0đ</span>
                                    </div>

                                </div>
                                <input type="hidden" name="selectedSeats" id="selectedSeats">
                                <input type="hidden" name="totalPrice" id="totalPrice">
                                <input type="hidden" name="seatID" id="seatID">
                                <input type="hidden" name="the_ride_id" value="{{ $theRide->id }}">
                                <div class="d-grid gap-2 d-md-block">
                                    <button type="button" class="btn btn-outline-danger">Hủy</button>
                                    <button type="submit" class="btn btn-secondary">Thanh toán</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-6 text-center text-base text-danger">ĐIỀU KHOẢN &amp; LƯU Ý</p>
                            <div>
                                <p>(*) <span style="color: rgb(0, 0, 0)">Quý khách vui lòng có mặt tại bến xuất phát của xe
                                        trước ít nhất 30 phút giờ xe khởi hành, mang theo thông báo đã thanh toán vé thành
                                        công
                                        có chứa mã vé được gửi từ hệ thống FUTA BUS LINE. </span>Vui lòng liên hệ Trung
                                    tâm
                                    tổng
                                    đài <a target="_self" rel="" class="text-danger" href="tel:19006067"><span
                                            style="color: #ef5222">1900 6067</span></a><a target="_blank" rel=""
                                                                                          class="text-danger"
                                                                                          href="tel:1900 6067"> </a>để
                                    được hỗ trợ.</p>
                                <p style="text-align: justify">(*) Nếu quý khách có nhu cầu trung chuyển, vui lòng liên
                                    hệ
                                    Tổng
                                    đài trung chuyển <a target="_self" rel="" class="text-danger"
                                                        href="tel:19006067"><span
                                            style="color: #ef5222">1900 6918</span></a> trước khi
                                    đặt
                                    vé. Chúng tôi không đón/trung chuyển tại những điểm xe trung chuyển không thể tới
                                    được.
                                </p>
                            </div>
                        </div>
                        {{--                        <label class=" px-6">--}}

                        {{--                            <input type="checkbox" class="ant-checkbox-input" value="">--}}
                        {{--                            <span>--}}
                        {{--                                <span class=" text-danger underline">Chấp nhận điều khoản</span>--}}
                        {{--                                đặt vé &amp; chính sách bảo mật thông tin của FUTABusline--}}
                        {{--                            </span>--}}
                        {{--                        </label>--}}
                    </div>
                </div>


            </div>
            {{-- <div class="divide py-[2px]"></div> --}}

            <div class="col-md-4">
                <div class="rounded border bg-white px-4 py-3 ">
                    <h1 class="fs-5">Thông tin lượt đi</h1>
                    <div class="mt-4 d-flex justify-content-between">
                        <span class="text-gray w-20">Tuyến xe</span>
                        <span class="text-right text-black">{{ $theRide->carriageWay->name }}</span>
                    </div>
                    <div class="mt-1 d-flex items-center justify-content-between">
                        <span class="text-gray w-30">Thời gian xuất bến</span>
                        <span
                            class="text-[#00613D]">{{ Carbon::parse($theRide->time_to_go)->format('H:i d/m/Y') }}</span>
                    </div>
                    <div class="mt-1 d-flex items-center justify-content-between">
                        <span class="text-gray w-28">Số lượng ghế</span>
                        <span class="text-black" id="seat-count">0 Ghế</span>
                    </div>
                    <div class="mt-1 d-flex items-center justify-content-between">
                        <span class="text-gray w-28">Số ghế</span>
                        <span class="text-[#00613D]" id="seat-names"></span>
                    </div>
                    <div class="mt-1 d-flex items-start justify-content-between">
                        <span class="text-gray w-40">Điểm trả khách</span>
                        <span class="text-right text-black">{{  $theRide->carriageWay->stationsFrom->name }}</span>
                    </div>
                </div>
                <div class="mt-1 p-4 bg-white border rounded">
                    <h1 class="fs-5">Thông tin đón trả</h1>
                    <div class="row ">
                        <div class="col">
                            <div class="mt-6 gap-6 ">
                                <div class="">
                                    <span class="fw-bold text-uppercase">
                                        Điểm đón
                                    </span>
                                    <select class="form-select my-3" aria-label="Default select example">
                                        <option
                                            selected>{{ $theRide->carriageWay->stationsTo->name }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="h-full w-[1px] border-r"></div>
                        <div class="col">
                            <span class="fw-bold text-uppercase">
                                Điểm trả
                            </span>
                            <select class="form-select my-3" aria-label="Default select example">
                                <option selected>
                                    {{ $theRide->carriageWay->stationsFrom->name }}
                                </option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <script src="{{ asset('client/js/seatPosition.js') }}"></script>
@endsection
