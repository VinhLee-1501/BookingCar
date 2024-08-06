@extends('layouts.client.app')

@section('content')
    <!--News Hot  Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Tin nổi bật!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                        <p>CÙNG BÌNH PHƯỚC - PHƯỚC LONG, BÙ ĐĂNG TRẢI NGHIỆM ĐẲNG CẤP DÒNG XE 34 PHÒNG ĐỘC ĐÁO RIÊNG TƯ!!</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="{{asset('client/img/team-1.jpg')}}"
                                 style="width:100%;">
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                        <p>CÙNG BÌNH PHƯỚC - PHƯỚC LONG, BÙ ĐĂNG TRẢI NGHIỆM ĐẲNG CẤP DÒNG XE 34 PHÒNG ĐỘC ĐÁO RIÊNG TƯ!!</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="{{asset('client/img/team-1.jpg')}}"
                                 style="width:100%;">
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                        <p>CÙNG BÌNH PHƯỚC - PHƯỚC LONG, BÙ ĐĂNG TRẢI NGHIỆM ĐẲNG CẤP DÒNG XE 34 PHÒNG ĐỘC ĐÁO RIÊNG TƯ!!</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="{{asset('client/img/team-1.jpg')}}"
                                 style="width:100%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- News Hot End --}}

    {{-- News Start --}}
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Tin tức</h1>
            </div>
            <div class="row g-4 mb-3">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('client/img/team-1.jpg')}}" alt="">
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold mb-0">PHƯƠNG TRANG - FUTA BUS LINES KHAI TRƯƠNG</h5>
                            <small>Đáp ứng nhu cầu đi lại của quý bà con, ngày 01/07/2024 Phương Trang - FUTA Bus Lines đã chính thức khai trương tuyến xe mới.</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('client/img/team-1.jpg')}}" alt="">
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold mb-0">PHƯƠNG TRANG - FUTA BUS LINES KHAI TRƯƠNG</h5>
                            <small>Đáp ứng nhu cầu đi lại của quý bà con, ngày 01/07/2024 Phương Trang - FUTA Bus Lines đã chính thức khai trương tuyến xe mới.</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('client/img/team-1.jpg')}}" alt="">
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold mb-0">PHƯƠNG TRANG - FUTA BUS LINES KHAI TRƯƠNG</h5>
                            <small>Đáp ứng nhu cầu đi lại của quý bà con, ngày 01/07/2024 Phương Trang - FUTA Bus Lines đã chính thức khai trương tuyến xe mới.</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('client/img/team-1.jpg')}}" alt="">
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold mb-0">PHƯƠNG TRANG - FUTA BUS LINES KHAI TRƯƠNG</h5>
                            <small>Đáp ứng nhu cầu đi lại của quý bà con, ngày 01/07/2024 Phương Trang - FUTA Bus Lines đã chính thức khai trương tuyến xe mới.</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 mb-3">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('client/img/team-1.jpg')}}" alt="">
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold mb-0">PHƯƠNG TRANG - FUTA BUS LINES KHAI TRƯƠNG</h5>
                            <small>Đáp ứng nhu cầu đi lại của quý bà con, ngày 01/07/2024 Phương Trang - FUTA Bus Lines đã chính thức khai trương tuyến xe mới.</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('client/img/team-1.jpg')}}" alt="">
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold mb-0">PHƯƠNG TRANG - FUTA BUS LINES KHAI TRƯƠNG</h5>
                            <small>Đáp ứng nhu cầu đi lại của quý bà con, ngày 01/07/2024 Phương Trang - FUTA Bus Lines đã chính thức khai trương tuyến xe mới.</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('client/img/team-1.jpg')}}" alt="">
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold mb-0">PHƯƠNG TRANG - FUTA BUS LINES KHAI TRƯƠNG</h5>
                            <small>Đáp ứng nhu cầu đi lại của quý bà con, ngày 01/07/2024 Phương Trang - FUTA Bus Lines đã chính thức khai trương tuyến xe mới.</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('client/img/team-1.jpg')}}" alt="">
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold mb-0">PHƯƠNG TRANG - FUTA BUS LINES KHAI TRƯƠNG</h5>
                            <small>Đáp ứng nhu cầu đi lại của quý bà con, ngày 01/07/2024 Phương Trang - FUTA Bus Lines đã chính thức khai trương tuyến xe mới.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- News end End -->
@endsection
