@extends('layouts.admin.app')

@section('content')
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Danh mục</h5>
        <div class="card">
            <div class="card-body">
{{--                <a href="{{route('dashboard.addCarriageway')}}" class="btn btn-success">Thêm +</a>--}}
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên tuyến</th>
                        <th scope="col">Tuyến tuần</th>
                        <th scope="col">Tuyến ngày</th>
                        <th scope="col">Thời gian TB</th>
                        <th scope="col">Quản đường</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($carriageWays as $carriageWay)
                        <tr>
                            <th scope="row" >{{ $carriageWay->carriage_way_id }}</th>
                            <td>{{ $carriageWay->carriage_way_name }}</td>
                            <td>{{ $carriageWay->trips_this_week }} tuyến</td>
                            <td>{{ $carriageWay->trips_today }} tuyến / ngày</td>
                            <td>{{ $carriageWay->average_travel_time }} giờ</td>
                            <td>{{ $carriageWay->distance}}Km</td>
                            <td> <a class="btn btn-primary btn-sm me-2">Chi tiết</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
