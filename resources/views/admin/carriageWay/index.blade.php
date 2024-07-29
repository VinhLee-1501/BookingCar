@extends('components.admin.app')

@section('content')
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Danh mục</h5>
        <div class="card">
            <div class="card-body">
                <a href="{{route('dashboard.addCarriageway')}}" class="btn btn-success">Thêm +</a>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên tuyến</th>
                        <th scope="col">Tuyến tuần</th>
                        <th scope="col">Tuyến ngày</th>
                        <th scope="col">Thời gian TB</th>
                        <th scope="col">Quản đường</th>
                        <th scope="col">Trạm xe</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Cần Thơ - Vĩnh Long</td>
                        <td>20 tuyến</td>
                        <td>4 tuyến / ngày</td>
                        <td>2 giờ</td>
                        <td>40km</td>
                        <td>Bến xe TTTP-CT</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm">Sửa</a>
                            <button type="button" class="btn btn-danger btn-sm">Xóa</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Cần Thơ - TP Hồ Chí Minh</td>
                        <td>23 tuyến</td>
                        <td>4 tuyến / ngày</td>
                        <td>3 giờ</td>
                        <td>150km</td>
                        <td>Bến xe TTTP-CT</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm">Sửa</a>
                            <button type="button" class="btn btn-danger btn-sm">Xóa</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Cần Thơ - Gò Công</td>
                        <td>20 tuyến</td>
                        <td>4 tuyến / ngày</td>
                        <td>2 giờ 42 phút</td>
                        <td>145km</td>
                        <td>Bến xe TTTP-CT</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm">Sửa</a>
                            <button type="button" class="btn btn-danger btn-sm">Xóa</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <a href="{{route('dashboard.addCarriageway')}}" class="btn btn-success">Thêm +</a>
            </div>
        </div>
    </div>

@endsection
