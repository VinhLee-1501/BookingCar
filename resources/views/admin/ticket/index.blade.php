@extends('layouts.admin.app')

@section('content')
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Vé xe</h5>
        <div class="card">
            <div class="card-body">
                {{-- <a href="{{ route('dashboard.addTicket') }}" class="btn btn-success">Thêm +</a> --}}
                <div class="col-md-4 float-end" data-mdb-input-init>
                    <input type="search" name="search" class="form-control" id="searchInput" placeholder="Tìm kiếm mã vé">
                </div>
                <table class="table table-hover" id="search-table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên KH</th>
                            <th scope="col">Vị trí ghế</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Xe di chuyển</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ticketCars as $ticketCar)
                            <tr>
                                <th scope="row">{{ $ticketCar['id'] }}</th>
                                <td>{{ $ticketCar['user_name'] }}</td>
                                <td>{{ $ticketCar['seat_position'] }}</td>
                                <td>{{ $ticketCar['status'] == 1 ? 'Hoàn thành' : 'Chưa' }}</td>
                                <td>{{ $ticketCar['name_car'] }} | {{ $ticketCar['license_plates'] }}</td>
                                <td>
                                    @if ($ticketCar['status'] == 1)
                                        <a href="{{ route('dashboard.detail', $ticketCar['id']) }}"
                                            class="btn btn-primary btn-sm">Chi tiết</a>
                                    @endif
                                    {{-- <button type="button" class="btn btn-danger btn-sm">Xóa</button> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
