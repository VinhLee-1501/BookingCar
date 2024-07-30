@extends('layouts.admin.app')

@section('content')

    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Thêm Khách Hàng</h5>
        <div class="card">
            <div class="card-body">
                <form action="{{route('dashboard.storecustomer')}}" method="post">
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
                            <label for="exampleInputPassword1" class="form-label">Mật Khẩu</label>
                            <input type="Text" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                    </div>

                    <div class="col-lg-12 row mt-2">
                        <div class="col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Ngày Sinh</label>
                            <input type="datetime-local" class="form-control" id="exampleInputPassword1"
                                   name="birthday">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Giới Tính</label>
                            <select class="form-select" name="gender">
                                <option></option>
                                <option>Nam</option>
                                <option>Nữ</option>

                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Sửa</button>
                </form>
            </div>
        </div>
    </div>

@endsection
