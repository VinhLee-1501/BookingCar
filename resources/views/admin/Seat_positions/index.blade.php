@extends('layouts.admin.app')

@section('content')
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Vị trí Ghế</h5>
        <div class="card">
            @if(session('delete'))
                <h5 class="alert alert-danger">{{ session('delete') }}</h5>
            @endif
            <div class="card-body">
                <form method="GET" action="{{ route('dashboard.seatposition') }}" class="mb-3">
                    <div class="row">
                        <div class="col-md-4">
                            <select name="car_id" class="form-select" id="carSelect2">
                                <option value="">Chọn biển số xe</option>
                                @foreach($cars as $car)
                                    <option value="{{ $car->id }}" {{ request('car_id') == $car->id ? 'selected' : '' }}>
                                        {{ $car->license_plates }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select name="seat_name" class="form-select" id="seatNameSelect2">
                                <option value="">Chọn tên ghế</option>
                                @foreach($seatNames as $seatName)
                                    <option value="{{ $seatName->name }}" {{ request('seat_name') == $seatName->name ? 'selected' : '' }}>
                                        {{ $seatName->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                            <a href="{{ route('dashboard.seatposition') }}" class="btn btn-secondary">Xóa bộ lọc</a>
                        </div>
                    </div>
                </form>
                <a href="{{ route('dashboard.seat.create') }}" class="btn btn-success">Thêm +</a>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên Ghế</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Trạng Thái</th>
                        <th scope="col">Tên Xe</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($seat as $row)
                        <tr>
                            <th scope="row">{{ $row->id }}</th>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->price }}.000</td>
                            <td>
                                {{ $row->status == 1 ? 'Đã đặt' : 'Chưa đặt' }}
                            </td>
                            <td>{{ $row->car_license_plates }}</td>
                            <td class="d-flex">
                                <a href="{{ route('dashboard.seat.edit', $row->id) }}" class="btn btn-primary btn-sm me-2">Sửa</a>
                                <form action="{{ route('dashboard.seat.destroy', $row->id) }}" method="post">
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
                {{ $seat->onEachSide(1)->links() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#carSelect2').select2({
                placeholder: 'Chọn biển số xe',
                allowClear: true
            });

            $('#seatNameSelect2').select2({
                placeholder: 'Chọn tên ghế',
                allowClear: true
            });
        });
    </script>
@endpush
