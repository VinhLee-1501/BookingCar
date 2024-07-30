@extends('layouts.client.app')

@section('content')
    <!-- Form Start -->
    <div class="container ">
        <div class="row">
            <div class="col-12 col-md-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        Bộ lộc tìm kiếm
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <ul class="list-group list-group-flush">
                                <h6>Giờ đi</h6>
                                <div class="d-flex p-2">
                                    <input type="checkbox" name="" id="" style="width:5%;">
                                    <h7 class="ms-2 mt-1">Sáng sớm 0:00 - 6:00 giờ</h7>
                                </div>
                                <div class="d-flex p-2">
                                    <input type="checkbox" name="" id="" style="width:5%;">
                                    <h7 class="ms-2 mt-1">Buổi sáng 6:00 - 12:00 giờ</h7>
                                </div>
                                <div class="d-flex p-2">
                                    <input type="checkbox" name="" id="" style="width:5%;">
                                    <h7 class="ms-2 mt-1">Buổ chiều 12:00 - 18:00 giờ</h7>
                                </div>
                                <div class="d-flex p-2">
                                    <input type="checkbox" name="" id="" style="width:5%;">
                                    <h7 class="ms-2 mt-1">Buổi tối 18:00 - 24:00 giờ</h7>
                                </div>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <h6>Loại xe</h6>
                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off"
                                    checked>
                                <label class="btn btn-outline-primary" for="btnradio1">Ghế</label>
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio2">Giường</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-8 p-4">
                <h5>Chuyến từ Cần Thơ - Hậu Giang</h5>

                <div class="card mb-5">
                    <div class="card-header d-flex justify-content-between text-center">
                        <div>
                            <h5 class="text-danger">15:00</h5>
                            <h6>Bến xe TT Cần Thơ</h6>
                        </div>
                        <div>
                            <h6>Thời gian</h6>
                            <h6 class="text-success">15:00</h6>
                        </div>
                        <div>
                            <h5 class="text-danger">19:00</h5>
                            <h6>Bến xe TT Cần Thơ</h6>
                        </div>
                        <div>
                            <h6 class="f-left">Chỗ trống: 15</h6>
                            <h5 class="text-danger">165.000 đ</h5>
                        </div>

                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs tab-custom" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="seat-tab" data-toggle="tab" href="#seat" role="tab"
                                    aria-controls="seat" aria-selected="true">Chọn ghế</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="schedule-tab" data-toggle="tab" href="#schedule" role="tab"
                                    aria-controls="schedule" aria-selected="false">Lịch trình</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="transfer-tab" data-toggle="tab" href="#transfer" role="tab"
                                    aria-controls="transfer" aria-selected="false">Trung chuyển</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="policy-tab" data-toggle="tab" href="#policy" role="tab"
                                    aria-controls="policy" aria-selected="false">Chính sách</a>
                            </li>
                        </ul>

                        <div class="tab-content mt-3" id="myTabContent">
                            <div class="tab-pane fade show active" id="seat" role="tabpanel"
                                aria-labelledby="seat-tab">
                                <a href=""><button class="btn btn-primary">Chọn chuyến</button></a>
                            </div>
                            <div class="tab-pane fade" id="schedule" role="tabpanel" aria-labelledby="schedule-tab">
                                <p>16:30 - Cần Thơ</p>
                                <p>16:30 - BX Miền Tây</p>
                            </div>
                            <div class="tab-pane fade" id="transfer" role="tabpanel" aria-labelledby="transfer-tab">
                                <p>Thông tin trung chuyển...</p>
                            </div>
                            <div class="tab-pane fade" id="policy" role="tabpanel" aria-labelledby="policy-tab">
                                <p>Thông tin chính sách...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-5">
                    <div class="card-header d-flex justify-content-between text-center">
                        <div>
                            <h5 class="text-danger">15:00</h5>
                            <h6>Bến xe TT Cần Thơ</h6>
                        </div>
                        <div>
                            <h6>Thời gian</h6>
                            <h6 class="text-success">15:00</h6>
                        </div>
                        <div>
                            <h5 class="text-danger">19:00</h5>
                            <h6>Bến xe TT Cần Thơ</h6>
                        </div>
                        <div>
                            <h6 class="f-left">Chỗ trống: 15</h6>
                            <h5 class="text-danger">165.000 đ</h5>
                        </div>

                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs tab-custom" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="seat-tab" data-toggle="tab" href="#seat"
                                    role="tab" aria-controls="seat" aria-selected="true">Chọn ghế</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="schedule-tab" data-toggle="tab" href="#schedule" role="tab"
                                    aria-controls="schedule" aria-selected="false">Lịch trình</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="transfer-tab" data-toggle="tab" href="#transfer" role="tab"
                                    aria-controls="transfer" aria-selected="false">Trung chuyển</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="policy-tab" data-toggle="tab" href="#policy" role="tab"
                                    aria-controls="policy" aria-selected="false">Chính sách</a>
                            </li>
                        </ul>

                        <div class="tab-content mt-3" id="myTabContent">
                            <div class="tab-pane fade show active" id="seat" role="tabpanel"
                                aria-labelledby="seat-tab">
                                <a href=""><button class="btn btn-primary">Chọn chuyến</button></a>
                            </div>
                            <div class="tab-pane fade" id="schedule" role="tabpanel" aria-labelledby="schedule-tab">
                                <p>16:30 - Cần Thơ</p>
                                <p>16:30 - BX Miền Tây</p>
                            </div>
                            <div class="tab-pane fade" id="transfer" role="tabpanel" aria-labelledby="transfer-tab">
                                <p>Thông tin trung chuyển...</p>
                            </div>
                            <div class="tab-pane fade" id="policy" role="tabpanel" aria-labelledby="policy-tab">
                                <p>Thông tin chính sách...</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Form End -->
@endsection
