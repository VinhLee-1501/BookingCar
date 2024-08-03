@extends('layouts.admin.app')

@section('content')

    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Thêm chuyến xe</h5>
        <div class="card">
            @if(session('create'))
                <h5 class="alert alert-success">{{session('create')}}
                </h5>
            @endif
            <div class="card-body">
                <form action="{{ route('theride.create')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên chuyến</label>
                        <input type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="name"
                               name="name">
                        {{--                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Thời gian</label>
                        <input type="datetime-local" class="form-control" id="exampleInputPassword1" name="time_to_go">
                    </div>
                    <div class="col-lg-12 row">
                        <div class="col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Thời gian dự kiến đi</label>
                            <input type="datetime-local" class="form-control" id="exampleInputPassword1"
                                   name="estimated_departure_time">
                        </div>
                        <div class="col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Thời gian dự kiến đến</label>
                            <input type="datetime-local" class="form-control" id="exampleInputPassword1"
                                   name="estimated_arrival_time">
                        </div>
                    </div>
                    <div class="col-lg-12 row mt-2">
                        <div class="col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Giá</label>
                            <input type="number" class="form-control" id="exampleInputPassword1" name="price">
                        </div>
                        {{--                        <div class="col-lg-6">--}}
                        {{--                            <label class="form-label">Tuyến xe</label>--}}
                        {{--                            <select class="form-select" name="carriage_way_id">--}}
                        {{--                                <option>Disabled select</option>--}}
                        {{--                            </select>--}}
                        {{--                        </div>--}}
                    </div>
                    {{--                    <div class="mb-3 mt-2">--}}
                    {{--                        <label class="form-label">Disabled select menu</label>--}}
                    {{--                        <select class="form-select" name="car_id">--}}
                    {{--                            <option>Disabled select</option>--}}
                    {{--                        </select>--}}
                    {{--                    </div>--}}
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </form>
            </div>
        </div>
    </div>

@endsection
