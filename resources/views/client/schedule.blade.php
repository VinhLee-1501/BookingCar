@extends('layouts.client.app')
@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="card mb-3">
                <div class="card-body">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th style="width:350px; ">Tuyến xe</th>
                                <th style="width:100px; ">Loại xe</th>
                                <th style="width:150px; ">Quảng đường</th>
                                <th style="width:200px; ">Thời gian hành trình</th>
                                <th>Giá vé</th>
                                <th></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="overflow-auto bg-body-tertiary" style=" max-height: 150px;">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th style="width:350px; "><span class="text-primary">TP. Hồ Chí Minh <i
                                                class="bi bi-arrow-right"></i>
                                            Cà mau</span>
                                    </th>
                                    <th style="width:100px; ">Giường</th>
                                    <th style="width:150px; ">639km</th>
                                    <th style="width:200px; ">11 giờ 30 phút</th>
                                    <th>---</th>
                                    <th class="position-relative"><button type="button"
                                            class="btn btn-outline-primary rounded-pill bottom-0 end-1">Tìm
                                            chuyến xe</button>
                                    </th>
                                </tr>
                                <tr>
                                    <th><span class="text-primary">TP. Hồ Chí Minh <i class="bi bi-arrow-right"></i>
                                            AnNhơn</span>
                                    </th>
                                    <th>Giường</th>
                                    <th>639km</th>
                                    <th>11 giờ 30 phút</th>
                                    <th>---</th>
                                    <th class="position-relative"><button type="button"
                                            class="btn btn-outline-primary rounded-pill position-absolute bottom-0 end-1">Tìm
                                            chuyến xe</button>
                                </tr>
                                <tr>
                                    <th><span class="text-primary">TP. Hồ Chí Minh <i class="bi bi-arrow-right"></i>
                                            Cần thơ</span>
                                    </th>
                                    <th>Giường</th>
                                    <th>639km</th>
                                    <th>11 giờ 30 phút</th>
                                    <th>---</th>
                                    <th class="position-relative"><button type="button"
                                            class="btn btn-outline-primary rounded-pill position-absolute bottom-0 end-1">Tìm
                                            chuyến xe</button>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
