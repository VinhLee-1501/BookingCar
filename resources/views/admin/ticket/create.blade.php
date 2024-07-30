@extends('layouts.admin.app')

@section('content')

    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Thêm vé</h5>
        <div class="card">
            <div class="card-body">
                <form action="{{route('dashboard.storeTicket')}}" method="post">
                    @csrf
                    <div class="col-lg-12 row">
                        <div class="col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Tên Khách Hàng</label>
                            <input type="Text" class="form-control" id="exampleInputPassword1" name="name">
                        </div>
                        <div class="col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="Email" class="form-control" id="exampleInputPassword1" name="email">
                        </div>
                    </div>
                    <div class="col-lg-12 row mt-2">
                        <div class="col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Số Điện Thoại</label>
                            <input type="number" class="form-control" id="exampleInputPassword1" name="phone">
                        </div>
                        <div class="col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Địa Chỉ</label>
                            <input type="Text" class="form-control" id="exampleInputPassword1" name="address">
                        </div>
                    </div>

                    <div class="col-lg-12 row mt-2">
                        <div class="col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Cân Cước Công Dân</label>
                            <input type="number" class="form-control" id="exampleInputPassword1" name="cccd">
                        </div>
                        <div class="col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Xe di chuyển</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Chọn xe...</option>
                                <option value="1">Xe HYUNDAI COUNTY</option>
                                <option value="2">Xe Universe Advanced</option>
                                <option value="3">Xe Universe</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12 row mt-2">
                        <div class="col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Khởi hành</label>
                            <input type="date" class="form-control" id="exampleInputPassword1" name="cccd">
                        </div>
                        <div class="col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">TG đến</label>
                            <input type="date" class="form-control" id="exampleInputPassword1" name="cccd">
                        </div>
                    </div>
                    <div class="col-lg-12 row mt-2">
                        <div class="col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Mã ghế</label>
                            <input type="number" class="form-control" id="exampleInputPassword1" name="cccd">
                        </div>
                        <div class="col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Số ghế</label>
                            <input type="number" class="form-control" id="exampleInputPassword1" name="cccd">
                        </div>
                    </div>

                    <div class="col-lg-12 row mt-2">

                        <div class="col-lg-6">
                            <label class="form-label">Trạng thái</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Đã đặt
                                </label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Sửa</button>
                </form>
            </div>
        </div>
    </div>

@endsection
