@extends('layouts.admin.app')

@section('content')
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Hành Khách</h5>
        <div class="card">
            <div class="card-body">
                <a href="{{ route('dashboard.addUser') }}" class="btn btn-success">Thêm +</a>
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
                    @foreach ($users as $row)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->phone }}</td>
                            <td>{{ $row->address }}</td>
                            <td>{{ $row->cccd }}</td>
                            <td>{{ $row->birthday }}</td>
                            <td>{{ $row->gender == 0 ? 'Nam' : 'Nữ' }}</td>
                            <td>
                                <form action="{{ route('dashboard.deleteUser', $row->id) }}" method="POST"
                                      onsubmit="return confirm('Are you sure you want to delete this item?');">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('dashboard.editUser', $row->id) }}"
                                       class="btn btn-primary btn-sm">Sửa</a>
                                    <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
