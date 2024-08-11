@extends('layouts.admin.app')

@section('content')
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Chuyến Đi</h5>
        <div class="card">
            @if(session('delete'))
                <h5 class="alert alert-danger">{{ session('delete') }}</h5>
            @endif
            <div class="card-body">
                <form method="GET" action="{{ route('dashboard.theride.index') }}">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <select name="ride_name" class="form-control select2" placeholder="Chọn chuyến đi">
                                <option value="">Chọn chuyến đi</option>
                                @foreach($Therides as $ride)
                                    <option value="{{ $ride->name }}" {{ request('ride_name') == $ride->name ? 'selected' : '' }}>
                                        {{ $ride->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="date" name="time_to_go" class="form-control" placeholder="Ngày khởi hành" value="{{ request('time_to_go') }}">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                            <a href="{{ route('dashboard.theride.index') }}" class="btn btn-secondary">Xóa bộ lọc</a>
                        </div>
                    </div>
                </form>
                <a href="{{ route('dashboard.theride.create') }}" class="btn btn-success">Thêm +</a>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên chuyến</th>
                        <th scope="col">Thời gian đi</th>
                        <th scope="col">Dự kiến KH</th>
                        <th scope="col">Dự kiến đến</th>
                        <th scope="col">Tuyến Xe</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Therides as $row)
                        <tr>
                            <th scope="row">{{ $row->id }}</th>
                            <td>{{ $row->name}}</td>
                            <td>{{ \Carbon\Carbon::parse($row->time_to_go)->format('d/m/Y H:i') }}</td>
                            <td>{{ \Carbon\Carbon::parse($row->estimated_arrival_time)->format('d/m/Y H:i') }}</td>
                            <td>{{ \Carbon\Carbon::parse($row->estimated_departure_time)->format('d/m/Y H:i') }}</td>
                            <td>{{ ($row->qq) }}</td>

                            {{--                            <td>{{$row->id}}</td>--}}
                            <td class="d-flex">
                                <a href="{{ route('dashboard.theride.edit', ['id' => $row->id]) }}"
                                   class="btn btn-primary btn-sm me-2">Sửa</a>
                                <form action="{{ route('dashboard.theride.destroy', ['id' => $row->id]) }}"
                                      method="post">
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
                {{ $Therides->onEachSide(1)->links() }}
            </div>
        </div>
    </div>
@endsection
