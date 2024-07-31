@extends('layouts.client.app')
@section('content')
    <div class="bg-light">
        <div class="row pt-4">
            <div class="col-md-8">
                <div class=" bg-white rounded border">
                    <div class="flex-1">
                        <div class="px-3 py-3">
                            <div class="row">
                                <p class="col-md-3">Chọn ghế</p>
                                <div class="col text-blue-400 ">Thông tin xe</div>
                            </div>
                            <div class="row my-4 ">
                                <div class="col-md-3">
                                    <div class="mb-4 text-center"><span>Tầng trên</span></div>
                                    <table class="table table-borderless">
                                        <tbody>
                                        <tr class="d-flex items-center gap-1 justify-content-between">
                                            <td class="position-relative mt-1 d-flex justify-center text-center">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_disabled.svg"
                                                     alt="seat icon"><span class="position-absolute ">A01</span>
                                            </td>
                                            <td class="w-6"></td>
                                            <td class="w-6"></td>
                                            <td class="w-6"></td>
                                            <td class="position-relative mt-1 d-flex justify-center text-center">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_disabled.svg"
                                                     alt="seat icon"><span class="position-absolute">A02</span>
                                            </td>
                                        </tr>
                                        <tr class="d-flex items-center gap-1 justify-content-between">
                                            <td class="position-relative mt-1 d-flex justify-center text-center">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_disabled.svg"
                                                     alt="seat icon"><span class="position-absolute ">A03</span>
                                            </td>
                                            <td class="position-relative w-6"></td>
                                            <td class="position-relative mt-1 d-flex justify-center text-center">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_disabled.svg"
                                                     alt="seat icon"><span class="position-absolute ">A04</span>
                                            </td>
                                            <td class="position-relative w-6"></td>
                                            <td class="position-relative mt-1 d-flex justify-center text-center">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_disabled.svg"
                                                     alt="seat icon"><span class="position-absolute ">A05</span>
                                            </td>
                                        </tr>
                                        <tr class="d-flex items-center gap-1 justify-content-between">
                                            <td class="position-relative mt-1 d-flex justify-center text-center">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_disabled.svg"
                                                     alt="seat icon"><span class="position-absolute ">A06</span>
                                            </td>
                                            <td class="position-relative w-6"></td>
                                            <td class="position-relative mt-1 d-flex justify-center text-center ">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_active.svg"
                                                     alt="seat icon"><span
                                                    class="position-absolute fw-bold lg:text-[10px] text-[#339AF4] top-1">A07</span>
                                            </td>
                                            <td class="position-relative w-6"></td>
                                            <td class="position-relative mt-1 d-flex justify-center text-center">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_disabled.svg"
                                                     alt="seat icon"><span class="position-absolute ">A08</span>
                                            </td>
                                        </tr>
                                        <tr class="d-flex items-center gap-1 justify-content-between">
                                            <td class="position-relative mt-1 d-flex justify-center text-center">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_disabled.svg"
                                                     alt="seat icon"><span class="position-absolute ">A09</span>
                                            </td>
                                            <td class="position-relative w-6"></td>
                                            <td class="position-relative mt-1 d-flex justify-center text-center">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_disabled.svg"
                                                     alt="seat icon"><span class="position-absolute ">A10</span>
                                            </td>
                                            <td class="position-relative w-6"></td>
                                            <td class="position-relative mt-1 d-flex justify-center text-center">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_disabled.svg"
                                                     alt="seat icon"><span class="position-absolute ">A11</span>
                                            </td>
                                        </tr>
                                        <tr class="d-flex items-center gap-1 justify-content-between">
                                            <td class="position-relative mt-1 d-flex justify-center text-center ">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_active.svg"
                                                     alt="seat icon"><span
                                                    class="position-absolute fw-bold lg:text-[10px] text-[#339AF4] top-1">A12</span>
                                            </td>
                                            <td class="position-relative w-6"></td>
                                            <td class="position-relative mt-1 d-flex justify-center text-center">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_disabled.svg"
                                                     alt="seat icon"><span class="position-absolute ">A13</span>
                                            </td>
                                            <td class="position-relative w-6"></td>
                                            <td class="position-relative mt-1 d-flex justify-center text-center ">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_active.svg"
                                                     alt="seat icon"><span
                                                    class="position-absolute fw-bold lg:text-[10px] text-[#339AF4] top-1">A14</span>
                                            </td>
                                        </tr>
                                        <tr class="d-flex items-center gap-1 justify-content-between">
                                            <td class="position-relative mt-1 d-flex justify-center text-center ">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_active.svg"
                                                     alt="seat icon"><span
                                                    class="position-absolute fw-bold lg:text-[10px] text-[#339AF4] top-1">A15</span>
                                            </td>
                                            <td class="position-relative w-6"></td>
                                            <td class="position-relative mt-1 d-flex justify-center text-center ">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_active.svg"
                                                     alt="seat icon"><span
                                                    class="position-absolute fw-bold lg:text-[10px] text-[#339AF4] top-1">A16</span>
                                            </td>
                                            <td class="position-relative w-6"></td>
                                            <td class="position-relative mt-1 d-flex justify-center text-center ">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_active.svg"
                                                     alt="seat icon"><span
                                                    class="position-absolute fw-bold lg:text-[10px] text-[#339AF4] top-1">A17</span>
                                            </td>
                                        </tr>
                                        <tr class="d-flex items-center gap-1 justify-content-between">
                                            <td class="position-relative mt-1 d-flex justify-center text-center">
                                                <img width="32" src="https://futabus.vn/images/icons/seat_disabled.svg"
                                                     alt="seat icon">
                                                <label class="position-absolute top-50 start-50 translate-middle"
                                                       for="Aseat1">
                                                        <span
                                                            class="position-absolute top-50 start-50 translate-middle">A01</span>
                                                </label>
                                                <input type="checkbox" value="01" id="Aseat1" hidden>
                                            </td>
                                            <td class="w-6"></td>
                                            <td class="w-6"></td>
                                            <td class="w-6"></td>
                                            <td class="position-relative mt-1 d-flex justify-center text-center">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_disabled.svg"
                                                     alt="seat icon">
                                                <label class="position-absolute top-50 start-50 translate-middle"
                                                       for="Aseat2">
                                                        <span
                                                            class="position-absolute top-50 start-50 translate-middle">A02</span>
                                                </label>
                                                <input type="checkbox" value="02" id="Aseat2" hidden>
                                            </td>
                                        </tr>
                                        @for ($row = 0; $row < 6; $row++)
                                            <tr class="d-flex items-center gap-1 justify-content-between">
                                                @for ($col = 0; $col < 3; $col++)
                                                    @php
                                                        $seatIndex = $row * 3 + $col + 3;
                                                        $formattedSeatIndex =
                                                            'A' . str_pad($seatIndex, 2, '0', STR_PAD_LEFT); // Số ghế chuyền vào checkbox vs label
                                                    @endphp
                                                    @if ($seatIndex <= 17)
                                                        <td
                                                            class="position-relative mt-1 d-flex justify-content-center text-center">
                                                            <img src="https://futabus.vn/images/icons/seat_active.svg"
                                                                 id="aSeat-image-{{ $formattedSeatIndex }}"
                                                                 alt="seat icon">
                                                            <label
                                                                class="position-absolute top-50 start-50 translate-middle"
                                                                for="aSeat{{ $formattedSeatIndex }}">
                                                                <p
                                                                    class="fs-6 text-center position-absolute top-50 start-50 translate-middle">
                                                                    {{ $formattedSeatIndex }} {{-- Số ghế --}}
                                                                </p>
                                                                {{-- Số ghế 00 --}}
                                                            </label>
                                                            <input class="aSeat-checkbox" type="checkbox"
                                                                   value="{{ $formattedSeatIndex }}"
                                                                   id="aSeat{{ $formattedSeatIndex }}" hidden>
                                                        </td>
                                                    @else
                                                        <td class="w-6"></td>
                                                    @endif
                                                @endfor
                                            </tr>
                                        @endfor
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="mb-4 text-center"><span>Tầng dưới</span></div>
                                    <table class="table table-borderless">
                                        <tbody>
                                        <tr class="d-flex items-center gap-1 justify-content-between">
                                            <td class="position-relative mt-1 d-flex justify-center text-center">
                                                <img width="32" src="https://futabus.vn/images/icons/seat_disabled.svg"
                                                     alt="seat icon">
                                                <label class="position-absolute top-50 start-50 translate-middle"
                                                       for="bSeat01">
                                                        <span
                                                            class="position-absolute top-50 start-50 translate-middle">B01</span>
                                                </label>
                                                <input type="checkbox" value="B01" id="bSeat01" hidden>
                                            </td>
                                            <td class="w-6"></td>
                                            <td class="w-6"></td>
                                            <td class="w-6"></td>
                                            <td class="position-relative mt-1 d-flex justify-center text-center">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_disabled.svg"
                                                     alt="seat icon">
                                                <label class="position-absolute top-50 start-50 translate-middle"
                                                       for="bSeat02">
                                                        <span
                                                            class="position-absolute top-50 start-50 translate-middle">B02</span>
                                                </label>
                                                <input type="checkbox" value="B02" id="bSeat02" hidden>
                                            </td>
                                        </tr>
                                        @for ($row = 0; $row < 6; $row++)
                                            <tr class="d-flex items-center gap-1 justify-content-between">
                                                @for ($col = 0; $col < 3; $col++)
                                                    @php
                                                        $seatIndex = $row * 3 + $col + 3; // Số ghế chuyền vào checkbox vs label
                                                        $formattedSeatIndex =
                                                            'B' . str_pad($seatIndex, 2, '0', STR_PAD_LEFT);
                                                    @endphp
                                                    @if ($seatIndex <= 17)
                                                        <td
                                                            class="position-relative mt-1 d-flex justify-content-center text-center">
                                                            <img src="https://futabus.vn/images/icons/seat_active.svg"
                                                                 id="bSeat-image-{{ $formattedSeatIndex }}"
                                                                 alt="seat icon">
                                                            <label
                                                                class="position-absolute top-50 start-50 translate-middle"
                                                                for="bSeat{{ $formattedSeatIndex }}">
                                                                <p
                                                                    class="fs-6 text-center position-absolute top-50 start-50 translate-middle">
                                                                    {{ $formattedSeatIndex }}
                                                                </p>
                                                                {{-- Số ghế 00 --}}
                                                            </label>
                                                            <input class="bSeat-checkbox" type="checkbox"
                                                                   value="{{ $seatIndex }}"
                                                                   id="bSeat{{ $seatIndex }}" hidden>
                                                        </td>
                                                    @else
                                                        <td class="w-6"></td>
                                                    @endif
                                                @endfor
                                            </tr>
                                        @endfor
                                        <tr class="d-flex items-center gap-1 justify-content-between">
                                            <td class="position-relative mt-1 d-flex justify-center text-center">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_active.svg"
                                                     alt="seat icon"><span
                                                    class="position-absolute fw-bold lg:text-[10px] text-[#339AF4] top-1">B01</span>
                                            </td>
                                            <td class="position-relative w-6"></td>
                                            <td class="position-relative w-6"></td>
                                            <td class="position-relative w-6"></td>
                                            <td class="position-relative mt-1 d-flex justify-center text-center">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_active.svg"
                                                     alt="seat icon"><span
                                                    class="position-absolute fw-bold lg:text-[10px] text-[#339AF4] top-1">B02</span>
                                            </td>
                                        </tr>
                                        <tr class="d-flex items-center gap-1 justify-content-between">
                                            <td class="position-relative mt-1 d-flex justify-center text-center ">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_active.svg"
                                                     alt="seat icon"><span
                                                    class="position-absolute fw-bold lg:text-[10px] text-[#339AF4] top-1">B03</span>
                                            </td>
                                            <td class="position-relative w-6"></td>
                                            <td class="position-relative mt-1 d-flex justify-center text-center ">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_active.svg"
                                                     alt="seat icon"><span
                                                    class="position-absolute fw-bold lg:text-[10px] text-[#339AF4] top-1">B04</span>
                                            </td>
                                            <td class="position-relative w-6"></td>
                                            <td class="position-relative mt-1 d-flex justify-center text-center ">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_active.svg"
                                                     alt="seat icon"><span
                                                    class="position-absolute fw-bold lg:text-[10px] text-[#339AF4] top-1">B05</span>
                                            </td>
                                        </tr>
                                        <tr class="d-flex items-center gap-1 justify-content-between">
                                            <td class="position-relative mt-1 d-flex justify-center text-center">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_disabled.svg"
                                                     alt="seat icon"><span class="position-absolute ">B06</span>
                                            </td>
                                            <td class="position-relative w-6"></td>
                                            <td class="position-relative mt-1 d-flex justify-center text-center ">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_active.svg"
                                                     alt="seat icon"><span
                                                    class="position-absolute fw-bold lg:text-[10px] text-[#339AF4] top-1">B07</span>
                                            </td>
                                            <td class="position-relative w-6"></td>
                                            <td class="position-relative mt-1 d-flex justify-center text-center">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_disabled.svg"
                                                     alt="seat icon"><span class="position-absolute ">B08</span>
                                            </td>
                                        </tr>
                                        <tr class="d-flex items-center gap-1 justify-content-between">
                                            <td class="position-relative mt-1 d-flex justify-center text-center ">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_active.svg"
                                                     alt="seat icon"><span
                                                    class="position-absolute fw-bold lg:text-[10px] text-[#339AF4] top-1">B09</span>
                                            </td>
                                            <td class="position-relative w-6"></td>
                                            <td class="position-relative mt-1 d-flex justify-center text-center ">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_active.svg"
                                                     alt="seat icon"><span
                                                    class="position-absolute fw-bold lg:text-[10px] text-[#339AF4] top-1">B10</span>
                                            </td>
                                            <td class="position-relative w-6"></td>
                                            <td class="position-relative mt-1 d-flex justify-center text-center ">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_active.svg"
                                                     alt="seat icon"><span
                                                    class="position-absolute fw-bold lg:text-[10px] text-[#339AF4] top-1">B11</span>
                                            </td>
                                        </tr>
                                        <tr class="d-flex items-center gap-1 justify-content-between">
                                            <td class="position-relative mt-1 d-flex justify-center text-center ">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_active.svg"
                                                     alt="seat icon"><span
                                                    class="position-absolute fw-bold lg:text-[10px] text-[#339AF4] top-1">B12</span>
                                            </td>
                                            <td class="position-relative w-6"></td>
                                            <td class="position-relative mt-1 d-flex justify-center text-center ">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_active.svg"
                                                     alt="seat icon"><span
                                                    class="position-absolute fw-bold lg:text-[10px] text-[#339AF4] top-1">B13</span>
                                            </td>
                                            <td class="position-relative w-6"></td>
                                            <td class="position-relative mt-1 d-flex justify-center text-center ">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_active.svg"
                                                     alt="seat icon"><span
                                                    class="position-absolute fw-bold lg:text-[10px] text-[#339AF4] top-1">B14</span>
                                            </td>
                                        </tr>
                                        <tr class="d-flex items-center gap-1 justify-content-between">
                                            <td class="position-relative mt-1 d-flex justify-center text-center ">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_active.svg"
                                                     alt="seat icon"><span
                                                    class="position-absolute fw-bold lg:text-[10px] text-[#339AF4] top-1">B15</span>
                                            </td>
                                            <td class="position-relative w-6"></td>
                                            <td class="position-relative mt-1 d-flex justify-center text-center ">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_active.svg"
                                                     alt="seat icon"><span
                                                    class="position-absolute fw-bold lg:text-[10px] text-[#339AF4] top-1">B16</span>
                                            </td>
                                            <td class="position-relative w-6"></td>
                                            <td class="position-relative mt-1 d-flex justify-center text-center ">
                                                <img width="32"
                                                     src="https://futabus.vn/images/icons/seat_active.svg"
                                                     alt="seat icon"><span
                                                    class="position-absolute fw-bold lg:text-[10px] text-[#339AF4] top-1">B17</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col ml-4 mt-5 ">
                                    <div class="mr-8 d-flex items-center">
                                        <span class="badge bg-secondary m-1"> </span>Đã bán
                                    </div>
                                    <div class="mr-8 d-flex items-center">
                                        <span class="badge bg-info m-1"> </span>Còn trống
                                    </div>
                                    <div class=" d-flex items-center">
                                        <span class="badge bg-danger m-1"> </span> Đang chọn
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-1 rounded border bg-white">
                    <div class="row px-3 py-3">
                        <div class="col-md-6 ">
                            <p class="text-black">Thông tin khách hàng</p>
                            <form class="form pe-4">
                                <div class="mb-3">
                                    <div class="">
                                        <label for="CustName" class="" title="">
                                            <div class="">Họ và tên<span class="mx-1 text-danger">*</span></div>
                                        </label>
                                    </div>
                                    <div class="">
                                        <div class="content">
                                            <span class="">
                                                <input class="form-control" type="text" name="name"
                                                       id="CustName" value="">
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
                                                    <input type="tel" class="form-control" id="CustMobile"
                                                           value="">
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
                                                <input type="email" class="form-control" id="CustEmail"
                                                       value="">
                                            </span>
                                        </div>
                                    </div>
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
                        <label class=" px-6">

                            <input type="checkbox" class="ant-checkbox-input" value="">
                            <span>
                                <span class=" text-danger underline">Chấp nhận điều khoản</span>
                                đặt vé &amp; chính sách bảo mật thông tin của FUTABusline
                            </span>
                        </label>
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
                                    <div class="d-flex mt-3">
                                        <div class="form-check me-4">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                   id="exampleRadios1" value="option1" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Điểm đón
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                   id="exampleRadios3" value="option3" disabled>
                                            <label class="form-check-label" for="exampleRadios3">
                                                Trung chuyển
                                            </label>
                                        </div>
                                    </div>
                                    <select class="form-select my-3" aria-label="Default select example">
                                        <option selected>Bến xe miền tây</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <div class=" ">
                                        <span class="">Quý khách vui lòng có mặt tại Bến xe/Văn Phòng</span>
                                        <span class="fw-bold">BX Mien Tay</span>
                                        <span class="fw-bold  text-danger">Trước 00:45 31/07/2024</span>
                                        <span class="">để được trung chuyển hoặc kiểm tra thông tin trước khi lên
                                            xe.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="h-full w-[1px] border-r"></div> --}}
                        <div class="col">
                            <span class="fw-bold text-uppercase">
                                Điểm trả
                            </span>
                            <div class="d-flex mt-3">
                                <div class="form-check me-4">
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                           id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Điểm trả
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                           id="exampleRadios3" value="option3" disabled>
                                    <label class="form-check-label" for="exampleRadios3">
                                        Trung chuyển
                                    </label>
                                </div>
                            </div>
                            <select class="form-select my-3" aria-label="Default select example">
                                <option selected>Bến xe miền tây</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="d-flex bg-white mt-1 border rounded mb-3 p-4 justify-content-between">
                    <div class="d-flex flex-col"><span class="">BEECAR</span><span
                            class="mt-2 fw-bold fs-3 text-black">0đ</span>
                    </div>
                    <div class="d-grid gap-2 d-md-block">
                        <button type="button" class="btn btn-outline-danger">Hủy</button>
                        <button type="button" class="btn btn-secondary">Thanh toán</button>

                    </div>
                </div>
            </div>
            {{-- <div class="divide py-[2px]"></div> --}}
            <div class="col-md-4">
                <div class="rounded border bg-white px-4 py-3 ">
                    <h1 class="fs-5">Thông tin lượt đi</h1>
                    <div class="mt-4 d-flex justify-content-between">
                        <span class="text-gray w-20">Tuyến xe</span>
                        <span class="text-right text-black">Mien Tay - Can Tho</span>
                    </div>
                    <div class="mt-1 d-flex items-center justify-content-between">
                        <span class="text-gray w-30">Thời gian xuất bến</span>
                        <span class="text-[#00613D]">01:00 31/07/2024</span>
                    </div>
                    <div class="mt-1 d-flex items-center justify-content-between">
                        <span class="text-gray w-28">Số lượng ghế</span><span class="text-black">0 Ghế</span>
                    </div>
                    <div class="mt-1 d-flex items-center justify-content-between">
                        <span class="text-gray w-28">Số ghế</span>
                        <span class="text-[#00613D]"></span>
                    </div>
                    <div class="mt-1 d-flex items-start justify-content-between">
                        <span class="text-gray w-40">Điểm trả khách</span>
                        <span class="text-right text-black"></span>
                    </div>
                    <div class="mt-1 d-flex items-center justify-content-between">
                        <span class="text-gray">Tổng tiền lượt đi</span>
                        <span class="text-[#00613D]">0đ</span>
                    </div>
                </div>
                <div class="rounded border bg-white px-4 py-3 mt-3">
                    <div class="icon-orange d-flex gap-2 text-black">Chi tiết giá <img class="w-6  text-danger"
                                                                                       src="https://futabus.vn/images/icons/info_white.svg"
                                                                                       alt="open filter">
                    </div>
                    <div class="mt-4 d-flex items-center justify-content-between"><span class="text-gray">Giá vé lượt
                            đi</span><span class="text-danger">0đ</span></div>
                    <div class="mt-1 d-flex items-center justify-content-between"><span class="text-gray">Phí thanh
                            toán</span><span class="text-black">0đ</span></div>
                    <div class="divide my-3"></div>
                    <div class="d-flex items-center justify-content-between"><span
                            class="text-gray">Tổng tiền</span><span
                            class="text-danger">0đ</span></div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('client/js/seatPosition.js') }}"></script>
@endsection
