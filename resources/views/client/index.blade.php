@extends('layouts.client.app')

@section('meta_title', 'BeeCar-Trang chủ')

@section('content')

    <!-- Category Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h2 class="mb-3">Khuyến mãi nổi bật </h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 " data-wow-delay="0.1s">
                    <a class="cat-item d-block" href="">
                        <div class="">
                            <img class="img-fluid" src="{{ asset('client/img/km1.png') }}" alt="Icon">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 " data-wow-delay="0.1s">
                    <a class="cat-item d-block" href="">
                        <div class="">
                            <img class="img-fluid" src="{{ asset('client/img/km2.png') }}" alt="Icon">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 " data-wow-delay="0.1s">
                    <a class="cat-item d-block" href="">
                        <div class="">
                            <img class="img-fluid" src="{{ asset('client/img/km3.png') }}" alt="Icon">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 " data-wow-delay="0.1s">
                    <a class="cat-item d-block" href="">
                        <div class="">
                            <img class="img-fluid" src="{{ asset('client/img/km4.png') }}" alt="Icon">
                        </div>
                    </a>
                </div>


            </div>
        </div>
    </div>
    <!-- Category End -->


    <!-- Property List Start -->
    <div class="container-xxl py-5">
        <div class="container bg-light">
            <div class=" col-md-12 d-flex p-5">
                <div class="col-md-4 card m-2 " style="border-radius:15px;">
                    <img alt="" loading="lazy" decoding="async" data-nimg="1"
                        class="transition-all duration-200 undefined" style="color: transparent;"
                        src="https://cdn.futabus.vn/futa-busline-cms-dev/Rectangle_23_2_8bf6ed1d78/Rectangle_23_2_8bf6ed1d78.png">
                    <div class="">
                        <h5 class="p-3">Tuyến xe Tp Hồ Chí Minh</h5>
                        @foreach ($Data['tiketHCMData'] as $tiketHome)
                            <a href="{{route('user.seatPosition', ['id' => $tiketHome->id])}}" class="text-dark">
                                <div class="flex  border-b p-4 ">
                                    <div class="row d-flex">
                                        <div class="col-md-7">
                                            <span class=" font-medium">{{ $tiketHome->name }}</span>
                                        </div>
                                        <div class="col-md-5">
                                            <span class="ms-5 text-danger">{{ $tiketHome->price }}.000<!-- -->đ</span>
                                        </div>
                                    </div>
                                    <span class="text-gray text-[15px]">{{ $tiketHome->distance }}km -
                                        {{ $tiketHome->time }}
                                        giờ - {{ Carbon\Carbon::parse($tiketHome->timeStart)->format('d/m/Y') }}</span>

                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4 card m-2" style="border-radius:15px;">
                    <img alt="" loading="lazy" decoding="async" data-nimg="1"
                        class="transition-all duration-200 undefined" style="color: transparent;"
                        src="https://cdn.futabus.vn/futa-busline-cms-dev/Rectangle_23_3_2d8ce855bc/Rectangle_23_3_2d8ce855bc.png">
                    <div class="max-h-64 overflow-y-auto">
                        <h5 class="p-3">Tuyến xe Vĩnh Long</h5>
                        @foreach ($Data['tiketVLData'] as $ticket)
                            <a href="{{route('user.seatPosition', ['id' => $ticket->id])}}" class="text-dark">
                                <div class="flex  border-b p-4 last-of-type:border-0">
                                    <div class="row d-flex">
                                        <div class="col-md-7">
                                            <span class=" text-lg font-medium">{{ $ticket->name }}</span>
                                        </div>
                                        <div class="col-md-5">
                                            <span class="ms-5 text-danger">{{ $ticket->price }}.000<!-- -->đ</span>
                                        </div>
                                    </div>
                                    <span class="text-gray text-[15px]">{{ $ticket->distance }}km - {{ $ticket->time }}
                                        giờ - {{ Carbon\Carbon::parse($ticket->timeStart)->format('d/m/Y') }}</span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4 card m-2" style="border-radius:15px;">
                    <img alt="" loading="lazy" decoding="async" data-nimg="1"
                        class="transition-all duration-200 undefined" style="color: transparent;"
                        src="https://cdn.futabus.vn/futa-busline-cms-dev/Rectangle_23_4_061f4249f6/Rectangle_23_4_061f4249f6.png">

                    <div class="max-h-64 overflow-y-auto">
                        <h5 class="p-3">Tuyến xe Hậu Giang</h5>
                        @foreach ($Data['tiketCMData'] as $ticket)
                            <a href="{{route('user.seatPosition', ['id' => $ticket->id])}}" class="text-dark">
                                <div class="flex  border-b p-4 last-of-type:border-0">
                                    <div class="row d-flex">
                                        <div class="col-md-7">
                                            <span class=" text-lg font-medium">{{ $ticket->name }}</span>
                                        </div>
                                        <div class="col-md-5">
                                            <span class="ms-5 text-danger">{{ $ticket->price }}.000<!-- -->đ</span>
                                        </div>
                                    </div>
                                    <span class="text-gray text-[15px]">{{ $ticket->distance }}km -
                                        {{ $ticket->time }} giờ -
                                        {{ Carbon\Carbon::parse($ticket->timeStart)->format('d/m/Y') }}</span>
                                </div>
                            </a>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>

    </div>

    </div>
    </div>
    </div>
    <!-- Property List End -->


    <!-- Call to Action Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="bg-light rounded p-3">
                <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid rounded w-100" src="{{ asset('client/img/call-to-action.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="mb-4">
                                <h1 class="mb-3">BEECAR - CHẤT LƯỢNG LÀ DANH DỰ </h1>
                                <h5>Được khách hàng tin tưởng và lựa chọn</h5>
                            </div>
                            <a href="" class="btn btn-primary py-3 px-4 me-2"><i
                                    class="fa fa-phone-alt me-2"></i>HOTLINE</a>
                            <a href="{{ route('user.contact') }}" class="btn btn-dark py-3 px-4"><i
                                    class="fa fa-calendar-alt me-2"></i>G-MAIL</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Tin tức</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="{{ route('user.news') }}">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{ asset('client/img/team-1.jpg') }}" alt="">

                            </div>
                            <div class="text-center p-4 mt-3">
                                <h6 class="fw-bold mb-0">PHƯƠNG TRANG - FUTA BUS LINES KHAI TRƯƠNG</h6>
                                <small> Đáp ứng nhu cầu đi lại của quý bà con, ngày 01/07/2024 Phương Trang - FUTA Bus Lines
                                    đã
                                    chính thức khai trương tuyến xe mới.</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="{{ route('user.news') }}">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{ asset('client/img/team-1.jpg') }}" alt="">

                            </div>
                            <div class="text-center p-4 mt-3">
                                <h6 class="fw-bold mb-0">PHƯƠNG TRANG - FUTA BUS LINES KHAI TRƯƠNG</h6>
                                <small> Đáp ứng nhu cầu đi lại của quý bà con, ngày 01/07/2024 Phương Trang - FUTA Bus Lines
                                    đã
                                    chính thức khai trương tuyến xe mới.</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="{{ route('user.news') }}">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{ asset('client/img/team-1.jpg') }}" alt="">

                            </div>
                            <div class="text-center p-4 mt-3">
                                <h6 class="fw-bold mb-0">PHƯƠNG TRANG - FUTA BUS LINES KHAI TRƯƠNG</h6>
                                <small> Đáp ứng nhu cầu đi lại của quý bà con, ngày 01/07/2024 Phương Trang - FUTA Bus Lines
                                    đã
                                    chính thức khai trương tuyến xe mới.</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="{{ route('user.news') }}">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{ asset('client/img/team-1.jpg') }}" alt="">

                            </div>
                            <div class="text-center p-4 mt-3">
                                <h6 class="fw-bold mb-0">PHƯƠNG TRANG - FUTA BUS LINES KHAI TRƯƠNG</h6>
                                <small> Đáp ứng nhu cầu đi lại của quý bà con, ngày 01/07/2024 Phương Trang - FUTA Bus Lines
                                    đã
                                    chính thức khai trương tuyến xe mới.</small>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


@endsection
