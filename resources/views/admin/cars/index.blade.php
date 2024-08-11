@extends('layouts.admin.app')

@section('content')
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Danh Sách Xe</h5>
        <div class="card">
            @if(session('delete'))
                <h5 class="alert alert-danger">{{ session('delete') }}</h5>
            @endif
            <div class="card-body">
                <form method="GET" action="{{ route('dashboard.car.index') }}">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <!-- Trường chọn loại xe với select2 -->
                            <select name="category_id" class="form-control select2" placeholder="Chọn loại xe">
                                <option value="">Chọn loại xe</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select name="license_plates" class="form-control select2" placeholder="Chọn biển số xe">
                                <option value="">Chọn biển số xe</option>
                                @foreach($licensePlates as $plate)
                                    <option value="{{ $plate->license_plates }}" {{ request('license_plates') == $plate->license_plates ? 'selected' : '' }}>
                                        {{ $plate->license_plates }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                            <a href="{{ route('dashboard.car.index') }}" class="btn btn-secondary">Xóa bộ lọc</a>
                        </div>
                    </div>
                </form>
                <a href="{{ route('dashboard.car.create') }}" class="btn btn-success">Thêm +</a>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên Xe</th>
                        <th scope="col">Biển Số Xe</th>
                        <th scope="col">Loại Xe</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cars as $car)
                        <tr>
                            <th scope="row">{{ $car->id }}</th>
                            <td>{{ $car->name }}</td>
                            <td>{{ $car->license_plates }}</td>
                            <td>{{ $car->category_name }}</td>
                            <td class="d-flex">
                                <a href="{{ route('dashboard.car.edit', $car->id) }}" class="btn btn-primary btn-sm me-2">Sửa</a>
                                <form action="{{ route('dashboard.car.destroy', $car->id) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">
                {{ $cars->onEachSide(1)->links() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                width: '100%'
            });
        });
    </script>
@endpush
