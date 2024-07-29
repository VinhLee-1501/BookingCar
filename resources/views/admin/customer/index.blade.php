@extends('components.admin.app')

@section('content')
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Hành Khách</h5>
        <div class="card">
            <div class="card-body">
                <a href="{{route('dashboard.addcustomer')}}" class="btn btn-success">Thêm +</a>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên Hành Khác</th>
                        <th scope="col">Email</th>
                        <th scope="col">Số Điện Thoại</th>
                        <th scope="col">Địa Chỉ</th>
                        <th scope="col">CCCD</th>
                        <th scope="col">Ngày Sinh</th>
                        <th scope="col">Giới Tính</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Phước Vinh</td>
                        <td>Vinhlp05022@fpt.com</td>
                        <td>0367659411</td>
                        <td>Cần Thơ</td>
                        <td>01545648464</td>
                        <td>20/11/2003</td>
                        <td>Nam</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm">Sửa</a>
                            <button type="button" class="btn btn-danger btn-sm">Xóa</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Văn Huế</td>
                        <td>huevan@gmail.com</td>
                        <td>0397865599</td>
                        <td>Vĩnh Long</td>
                        <td>098239880040</td>
                        <td>09/11/2004</td>
                        <td>Nữ</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm">Sửa</a>
                            <button type="button" class="btn btn-danger btn-sm">Xóa</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
