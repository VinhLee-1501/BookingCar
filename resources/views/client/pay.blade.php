@extends('layouts.client.master')

@section('content')
    <div class="container bg-light mt-4">
        <div class="row">
            <div class="col-12 col-md-3 mb-4">
                <div class="card mt-3">
                    <div class="card-header">
                        Phương thức thanh toán
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="listGroupRadio" value=""
                                id="firstRadio" checked>
                            <label class="form-check-label" for="firstRadio">Thanh toán qua VNPAY</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="listGroupRadio" value=""
                                id="thirdRadio">
                            <label class="form-check-label" for="thirdRadio">Thanh toán tiền mặt</label>
                        </li>
                    </ul>
                </div>
                <div class="card mt-3">
                    <div class="card-header">
                        Mã thanh toán
                    </div>

                </div>
            </div>
            <div class="col-12 col-md-5 p-4">
                <div class="row justify-content-center">
                    <h4 class="text-center">Xuất vé</h4>
                    <div class="card card-custom">
                        <div class="card-header card-header-custom d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="route-info">Chuyến Bến Xe Cần Thơ - Bến Xe Miền Tây</h5>
                            </div>

                        </div>
                        <div class="card-body card-body-custom">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="time-info">16:30</h5>
                                    <p class="mb-0">4 giờ</p>
                                </div>
                                <div>
                                    <i class="bi bi-arrow-right"></i>
                                </div>
                                <div>
                                    <h5 class="time-info">20:30</h5>
                                </div>
                            </div>
                            <div class="details">
                                <h6>Lịch trình</h6>
                                <p><strong>16:30:</strong> VP Bến xe Trung Tâm Cần Thơ, P.Hưng Thạnh, Q.Cái Răng, TP.Cần Thơ</p>
                                <p><strong>20:30:</strong> VP BX Miền Tây, 395 Kinh Dương Vương, P.An Lạc, Q.Bình Tân, TP.HCM</p>
                            </div>
                            <div class="details">
                                <h6>Thông tin hành khách</h6>
                                <div class="d-flex col-12 m-0 p-0">
                                    <p class="col-md-4 m-0 p-0">Họ và tên</p>
                                    <b class="col-md-8 text-end">Văn Thị Nguyệt Huế</b>
                                </div>
                                <div class="d-flex col-12 m-0 p-0">
                                    <p class="col-md-4  m-0 p-0">Số điện thoại</p>
                                    <b class="col-md-8 text-end">2158498612</b>
                                </div>
                            </div>
                            <div class="details">
                                <h6>Thông tin chuyến xe</h6>
                                <div class="d-flex col-12">
                                    <p class="col-md-4  m-0 p-0">Tổng số ghế</p>
                                    <b class="col-md-8 text-end">2</b>
                                </div>
                                <div class="d-flex col-12">
                                    <p class="col-md-4  m-0 p-0">Số ghế</p>
                                    <b class="col-md-8 text-end text-warning">14A,A12</b>
                                </div>
                                <div class="d-flex col-12">
                                    <p class="col-md-4  m-0 p-0">Loại ghế</p>
                                    <b class="col-md-8 text-end">Ghế nằm</b>
                                </div>
                                <div class="d-flex col-12">
                                    <p class="col-md-4  m-0 p-0">Số Xe</p>
                                    <b class="col-md-8 text-end">10/54-6785</b>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end align-items-center mt-3">
                                <h4 class="text-danger">Tổng tiền: 165.000đ</h4>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="button" class="btn btn-primary">Xuất</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-5">
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card mt-3 p-4">
                    <h6 class="p-2">Thông tin khách hàng</h6>
                    <div class="ps-4 pe-4">
                        <div class="d-flex col-12 m-0 p-0">
                            <p class="col-md-4 m-0 p-0">Họ và tên</p>
                            <b class="col-md-8 text-end">Văn Thị Nguyệt Huế</b>
                        </div>
                        <div class="d-flex col-12">
                            <p class="col-md-4  m-0 p-0">Số điện thoại</p>
                            <b class="col-md-8 text-end ">07856546865</b>
                        </div>
                        <div class="d-flex col-12">
                            <p class="col-md-4  m-0 p-0">Email</p>
                            <b class="col-md-8 text-end">nguythie19@gmail.com</b>
                        </div>
                    </div>
                </div>

                <div class="card mt-3 p-4">
                    <h6 class="p-2">Thông tin lượt đi</h6>
                    <div class="ps-4 pe-4">
                        <div class="d-flex col-12 m-0 p-0">
                            <p class="col-md-4 m-0 p-0">Tuyến xe</p>
                            <b class="col-md-8 text-end">Can Tho - Mien Tay</b>
                        </div>
                        <div class="d-flex col-12 m-0 p-0">
                            <p class="col-md-4  m-0 p-0">Thời gian xuất bến</p>
                            <b class="col-md-8 text-end">14:30 30/07/2024</b>
                        </div>
                        <div class="d-flex col-12">
                            <p class="col-md-4  m-0 p-0">Số lượng ghế</p>
                            <b class="col-md-8 text-end">1</b>
                        </div>
                        <div class="d-flex col-12">
                            <p class="col-md-4  m-0 p-0">Số ghế</p>
                            <b class="col-md-8 text-end text-warning">14A</b>
                        </div>
                        <div class="d-flex col-12">
                            <p class="col-md-4  m-0 p-0">Điểm lên xe</p>
                            <b class="col-md-8 text-end">Cần Thơ</b>
                        </div>
                        <div class="d-flex col-12">
                            <p class="col-md-4  m-0 p-0">Thời gian đến điểm lên xe</p>
                            <b class="col-md-8 text-end text-warning">Trước 14:00 30/07/2024</b>
                        </div>
                        <div class="d-flex col-12">
                            <p class="col-md-4  m-0 p-0">Điểm trả khách</p>
                            <b class="col-md-8 text-end">BX Miền Tây</b>
                        </div>
                        <div class="d-flex col-12">
                            <p class="col-md-4  m-0 p-0">Tổng tiền lượt đi</p>
                            <b class="col-md-8 text-end text-danger">165.000đ</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
