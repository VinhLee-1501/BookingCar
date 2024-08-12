@extends('layouts.admin.app')

@section('content')
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Hành Khách</h5>
        <div class="card">
            <div class="card-body">
                <div class="row ">
                    <div class="col-md-8">
                        <a href="{{ route('dashboard.addUser') }}" class="btn btn-success">Thêm +</a>
                    </div>
                    <div class="col-md-4" data-mdb-input-init>
                        <input type="search" name="search" class="form-control" id="searchInput" placeholder="Tìm kiếm...">
                    </div>
                </div>
                <table class="table table-hover" id="search-table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên Hành Khách</th>
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
                                <th scope="row">{{ $row->id }}</th>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->phone }}</td>
                                <td>{{ $row->address }}</td>
                                <td>{{ $row->cccd }}</td>
                                <td>{{ \Carbon\Carbon::parse($row->birthday)->format('d/m/Y') }}</td>
                                <td>{{ $row->gender == 0 ? 'Nam' : 'Nữ' }}</td>
                                <td>
                                    <form class="d-flex" action="{{ route('dashboard.deleteUser', $row->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this item?');">
                                        @csrf
                                        @method('DELETE')
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
