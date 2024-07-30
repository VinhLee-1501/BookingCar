@extends('layouts.client.app')

@section('content')
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="{{asset('client/img/about.jpg')}}">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">#1 BEECAR - Chất lượng luôn đứng đầu</h1>
                    <p class="mb-4"><i class="fa fa-check text-primary me-3"></i><b>Về chúng tôi:</b>
                        BEECAR là một công ty công nghệ Việt Nam, chúng tôi tự hào là cầu nối giữa khách hàng và người cung cấp dịch vụ.
                         Chúng tôi cam kết mang đến trải nghiệm vận chuyển an toàn, tiện lợi và thân thiện với môi trường.</p>
                    <p><i class="fa fa-check text-primary me-3"></i><b>Triết lý:</b>
                        Chúng tôi tin rằng việc chia sẻ là cách để xây dựng cộng đồng.
                        BEECAR không chỉ là phương tiện di chuyển, mà còn là sự kết nối giữa con người và cộng đồng.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


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

@endsection
