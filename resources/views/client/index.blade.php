@extends('layouts.client.app')

@section('meta_title','BeeCar-Trang chủ')

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
                            <img class="img-fluid" src="{{asset('client/img/km1.png')}}" alt="Icon">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 " data-wow-delay="0.1s">
                    <a class="cat-item d-block" href="">
                        <div class="">
                            <img class="img-fluid" src="{{asset('client/img/km2.png')}}" alt="Icon">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 " data-wow-delay="0.1s">
                    <a class="cat-item d-block" href="">
                        <div class="">
                            <img class="img-fluid" src="{{asset('client/img/km3.png')}}" alt="Icon">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 " data-wow-delay="0.1s">
                    <a class="cat-item d-block" href="">
                        <div class="">
                            <img class="img-fluid" src="{{asset('client/img/km4.png')}}" alt="Icon">
                        </div>
                    </a>
                </div>


            </div>
        </div>
    </div>
    <!-- Category End -->


    <!-- Property List Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                        <h2 class="mb-3">Tuyến phổ biến</h2>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary active" data-bs-toggle="pill" href="#tab-1">Miền Nam</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2">Miền Tây</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="{{asset('client/img/property-1.jpg')}}" alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        Miền Nam
                                    </div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">650.000 đ / Ghế<h5>
                                    <a class="d-block h5 mb-2" href="">Cần Thơ - Vĩnh Long</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Bến xe Trung Tâm TP Cần Thơ
                                    </p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><b>Thời gian:</b> 1 giờ 20 phút</small>
                                    <small class="flex-fill text-center border-end py-2"><b>Ghế</b>: 45</small>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="{{asset('client/img/property-1.jpg')}}" alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        Miền Nam
                                    </div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">650.000 đ / Ghế<h5>
                                    <a class="d-block h5 mb-2" href="">Cần Thơ - Vĩnh Long</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Bến xe Trung Tâm TP Cần Thơ
                                    </p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><b>Thời gian:</b> 1 giờ 20 phút</small>
                                    <small class="flex-fill text-center border-end py-2"><b>Ghế</b>: 45</small>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="{{asset('client/img/property-1.jpg')}}" alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        Miền Nam
                                    </div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">650.000 đ / Ghế<h5>
                                    <a class="d-block h5 mb-2" href="">Cần Thơ - Vĩnh Long</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Bến xe Trung Tâm TP Cần Thơ
                                    </p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><b>Thời gian:</b> 1 giờ 20 phút</small>
                                    <small class="flex-fill text-center border-end py-2"><b>Ghế</b>: 45</small>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="{{asset('client/img/property-1.jpg')}}" alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        Miền Nam
                                    </div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">650.000 đ / Ghế<h5>
                                    <a class="d-block h5 mb-2" href="">Cần Thơ - Vĩnh Long</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Bến xe Trung Tâm TP Cần Thơ
                                    </p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><b>Thời gian:</b> 1 giờ 20 phút</small>
                                    <small class="flex-fill text-center border-end py-2"><b>Ghế</b>: 45</small>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="{{asset('client/img/property-1.jpg')}}" alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        Miền Nam
                                    </div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">650.000 đ / Ghế<h5>
                                    <a class="d-block h5 mb-2" href="">Cần Thơ - Vĩnh Long</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Bến xe Trung Tâm TP Cần Thơ
                                    </p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><b>Thời gian:</b> 1 giờ 20 phút</small>
                                    <small class="flex-fill text-center border-end py-2"><b>Ghế</b>: 45</small>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="{{asset('client/img/property-1.jpg')}}" alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        Miền Nam
                                    </div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">650.000 đ / Ghế<h5>
                                    <a class="d-block h5 mb-2" href="">Cần Thơ - Vĩnh Long</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Bến xe Trung Tâm TP Cần Thơ
                                    </p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><b>Thời gian:</b> 1 giờ 20 phút</small>
                                    <small class="flex-fill text-center border-end py-2"><b>Ghế</b>: 45</small>

                                </div>
                            </div>
                        </div>



                        <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                            <a class="btn btn-primary py-3 px-5" href="">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div id="tab-2" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="{{asset('client/img/property-1.jpg')}}" alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        Miền Nam
                                    </div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">650.000 đ / Ghế<h5>
                                    <a class="d-block h5 mb-2" href="">Cần Thơ - Vĩnh Long</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Bến xe Trung Tâm TP Cần Thơ
                                    </p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><b>Thời gian:</b> 1 giờ 20 phút</small>
                                    <small class="flex-fill text-center border-end py-2"><b>Ghế</b>: 45</small>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="{{asset('client/img/property-1.jpg')}}" alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        Miền Nam
                                    </div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">650.000 đ / Ghế<h5>
                                    <a class="d-block h5 mb-2" href="">Cần Thơ - Vĩnh Long</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Bến xe Trung Tâm TP Cần Thơ
                                    </p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><b>Thời gian:</b> 1 giờ 20 phút</small>
                                    <small class="flex-fill text-center border-end py-2"><b>Ghế</b>: 45</small>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="{{asset('client/img/property-1.jpg')}}" alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        Miền Tây
                                    </div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">650.000 đ / Ghế<h5>
                                    <a class="d-block h5 mb-2" href="">Cần Thơ - Vĩnh Long</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Bến xe Trung Tâm TP Cần Thơ
                                    </p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><b>Thời gian:</b> 1 giờ 20 phút</small>
                                    <small class="flex-fill text-center border-end py-2"><b>Ghế</b>: 45</small>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="{{asset('client/img/property-1.jpg')}}" alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        Miền Nam
                                    </div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">650.000 đ / Ghế<h5>
                                    <a class="d-block h5 mb-2" href="">Cần Thơ - Vĩnh Long</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Bến xe Trung Tâm TP Cần Thơ
                                    </p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><b>Thời gian:</b> 1 giờ 20 phút</small>
                                    <small class="flex-fill text-center border-end py-2"><b>Ghế</b>: 45</small>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="{{asset('client/img/property-1.jpg')}}" alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        Miền Tây
                                    </div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">650.000 đ / Ghế<h5>
                                    <a class="d-block h5 mb-2" href="">Cần Thơ - Vĩnh Long</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Bến xe Trung Tâm TP Cần Thơ
                                    </p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><b>Thời gian:</b> 1 giờ 20 phút</small>
                                    <small class="flex-fill text-center border-end py-2"><b>Ghế</b>: 45</small>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="{{asset('client/img/property-1.jpg')}}" alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        Miền Tây
                                    </div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">650.000 đ / Ghế<h5>
                                    <a class="d-block h5 mb-2" href="">Cần Thơ - Vĩnh Long</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Bến xe Trung Tâm TP Cần Thơ
                                    </p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><b>Thời gian:</b> 1 giờ 20 phút</small>
                                    <small class="flex-fill text-center border-end py-2"><b>Ghế</b>: 45</small>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
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
                            <img class="img-fluid rounded w-100" src="{{asset('client/img/call-to-action.jpg')}}" alt="">
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="mb-4">
                                <h1 class="mb-3">BEECAR - CHẤT LƯỢNG LÀ DANH DỰ </h1>
                                <h5>Được khách hàng tin tưởng và lựa chọn</h5>
                            </div>
                            <a href="" class="btn btn-primary py-3 px-4 me-2"><i class="fa fa-phone-alt me-2"></i>HOTLINE</a>
                            <a href="" class="btn btn-dark py-3 px-4"><i class="fa fa-calendar-alt me-2"></i>G-MAIL</a>
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
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('client/img/team-1.jpg')}}" alt="">

                        </div>
                        <div class="text-center p-4 mt-3">
                            <h6 class="fw-bold mb-0">PHƯƠNG TRANG - FUTA BUS LINES KHAI TRƯƠNG</h6>
                            <small> Đáp ứng nhu cầu đi lại của quý bà con, ngày 01/07/2024 Phương Trang - FUTA Bus Lines đã chính thức khai trương tuyến xe mới.</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
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
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
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
    <!-- Team End -->


@endsection
