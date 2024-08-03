@extends('layouts.admin.app')

@section('content')
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Thêm thông tin xe</h5>
        <div class="card">
            <div class="card-body">
                <a href="{{ route('admin/cars/create')  }}" class="btn btn-success">Thêm +</a>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Số xe</th>
                        <th scope="col">Loại xe</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Xe HYUNDAI UNIVERSE</td>
                        <td>65H-321.12</td>
                        <td>Xe 45 chỗ</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm">Sửa</a>
                            <button type="button" class="btn btn-danger btn-sm">Xóa</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Xe Universe Advanced</td>
                        <td>65H-321.12</td>
                        <td>Xe 47 chỗ</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm">Sửa</a>
                            <button type="button" class="btn btn-danger btn-sm">Xóa</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Xe HYUNDAI COUNTY</td>
                        <td>65H-321.12</td>
                        <td>Xe 29 chỗ</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm">Sửa</a>
                            <button type="button" class="btn btn-danger btn-sm">Xóa</button>
                        </td>
                    </tr>

                    </tbody>
                </table>
                <a href="" class="btn btn-success">Thêm +</a>
            </div>
        </div>
    </div>

@endsection
