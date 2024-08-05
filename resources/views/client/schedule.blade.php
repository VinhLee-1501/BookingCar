@extends('layouts.client.app')
@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="card mb-3">
                <div class="card-body">
                    <table class="table table-borderless">
                        <tbody>

                            <tr>
                                <th style="width:300px; ">Tuyến xe</th>
                                <th style="width:200px; ">Loại xe</th>
                                <th style="width:150px; ">Quảng đường</th>
                                <th style="width:200px; ">Thời gian hành trình</th>
                                <th style="width:200px; ">Giá vé</th>
                                <th></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-body">

                        <table class="table table-borderless">
                            <tbody>
                            @foreach ($scheduleData as $schedule)
                                <tr>
                                    <th style="width:300px; "><span class="text-primary">{{ $schedule->name }}</span>
                                    </th>
                                    <th style="width:200px; ">{{ $schedule->category_name}}</th>
                                    <th style="width:200px; ">{{ $schedule->distance}} km</th>
                                    <th style="width:150px; ">{{ $schedule->average_travel_time}} giờ</th>
                                    <th style="width:200px; ">{{ $schedule->price}}.000 đ</th>

                                    <th class="position-relative">
                                        <a href="{{route('user.ridefilter', ['id' => $schedule->id])}}"
                                           class="btn btn-outline-primary rounded-pill bottom-0 end-1">
                                            Tìm chuyến xe
                                        </a>
                                    </th>
                                </tr>

                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
