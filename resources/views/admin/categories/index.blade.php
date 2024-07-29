@extends('components.admin.app')
@section('meta_title', 'Danh sách danh mục')

@section('content')
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Danh mục</h5>
        <div class="card">
            <div class="card-body">
                <a href="{{ route('dashboard.categories.create') }}" class="btn btn-success">Thêm +</a>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên loại xe</th>
                        <th scope="col">Số lượng ghế</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $categories as $item )
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->name}}</td>
                            <td>Xe {{ $item->seats}} chỗ</td>
                            <td>
                                <a href="{{ route('dashboard.categories.edit', $item->id) }}" class="btn btn-primary btn-sm">Sửa</a>
                                <a href="{{ route('dashboard.categories.destroy', $item->id) }}" class="btn btn-danger btn-sm">Xóa</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="" class="btn btn-success">Thêm +</a>
            </div>
        </div>
    </div>

@endsection
