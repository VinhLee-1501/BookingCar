@extends('layouts.admin.app')

@section('content')
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Danh mục</h5>
        <div class="card">
            <div class="card-body">
                <a href="{{route('dashboard.addTheried')}}" class="btn btn-success">Thêm +</a>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên chuyến</th>
                        <th scope="col">Thời gian đi</th>
                        <th scope="col">Dự kiến KH</th>
                        <th scope="col">Dự kiến đến</th>
                        <th scope="col">Tuyến xe</th>
                        <th scope="col">Xe di chuyển</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>09/07/2024 - 14:13</td>
                        <td>2 giờ</td>
                        <td>14:15</td>
                        <td>16h20</td>
                        <td>Cần Thơ - Vĩnh Long</td>
                        <td>Xe VinFast VF5</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm">Sửa</a>
                            <button type="button" class="btn btn-danger btn-sm">Xóa</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>09/07/2024 - 13:30</td>
                        <td>3 giờ</td>
                        <td>13:30</td>
                        <td>17:30</td>
                        <td>Cần Thơ - TP Hồ Chí Minh</td>
                        <td>Xe Universe Advanced</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm">Sửa</a>
                            <button type="button" class="btn btn-danger btn-sm">Xóa</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>09/07/2024 - 13:31</td>
                        <td>4 giờ</td>
                        <td>13:31</td>
                        <td>17:31</td>
                        <td>Cần Thơ - TP Hồ Chí Minh</td>
                        <td>Xe Universe Advanced</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm">Sửa</a>
                            <button type="button" class="btn btn-danger btn-sm">Xóa</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>09/07/2024 - 14:00</td>
                        <td>4 giờ</td>
                        <td>14:00</td>
                        <td>18:00</td>
                        <td>Cần Thơ - TP Hồ Chí Minh</td>
                        <td>Xe Universe Advanced</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm">Sửa</a>
                            <button type="button" class="btn btn-danger btn-sm">Xóa</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>10/07/2024 - 01:00</td>
                        <td>2 giờ</td>
                        <td>01:00</td>
                        <td>05:00</td>
                        <td>Cần Thơ - Gò Công</td>
                        <td>Xe HYUNDAI COUNTY</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm">Sửa</a>
                            <button type="button" class="btn btn-danger btn-sm">Xóa</button>
                        </td>
                    </tr>

                    </tbody>
                </table>
                <a href="{{route('dashboard.addTheried')}}" class="btn btn-success">Thêm +</a>
            </div>
        </div>
    </div>

@endsection
