@extends('layouts.admin.app')

@section('content')
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Vé xe</h5>
        <div class="card">
            <div class="card-body">
                <a href="{{route('dashboard.addTicket')}}" class="btn btn-success">Thêm +</a>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên KH</th>
                        <th scope="col">Số lượng ghế</th>
                        <th scope="col">Tổng tiền</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Xe di chuyển</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Huế</td>
                        <td>03</td>
                        <td>350,000đ</td>
                        <td>Hoàn thành</td>
                        <td>Honda | 65H-321.12</td>
                        <td>
                            <a href="{{ route('dashboard.detail') }}" class="btn btn-primary btn-sm">Chi tiết</a>
                            <button type="button" class="btn btn-danger btn-sm">Xóa</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Vinh</td>
                        <td>09</td>
                        <td>165,000đ</td>
                        <td>Hoàn thành</td>
                        <td>HYUNDAI COUNTY| 65H-321.22</td>
                        <td>
                            <a href="{{ route('dashboard.detail-2') }}" class="btn btn-primary btn-sm">Chi tiết</a>
                            <button type="button" class="btn btn-danger btn-sm">Xóa</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <a href="{{route('dashboard.addTicket')}}" class="btn btn-success">Thêm +</a>
            </div>
        </div>
    </div>

@endsection
