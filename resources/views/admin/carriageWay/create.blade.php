@extends('components.admin.app')

@section('content')

    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Thêm tuyến xe</h5>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('dashboard.storeCarriageWay') }}">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên tuyến</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="name">
                        {{--                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tuyến tuần</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="day_of_week">
                    </div>
                    <div class="col-lg-12 row">
                        <div class="col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Tuyến ngày</label>
                            <input type="number" class="form-control" id="exampleInputPassword1" name="trip_of_day">
                        </div>
                        <div class="col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Thời gian TB</label>
                            <input type="datetime-local" class="form-control" id="exampleInputPassword1"
                                   name="average_travel_time">
                        </div>
                    </div>
                    <div class="col-lg-12 row mt-2">
                        <div class="col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Quảng đường</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="distance">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Trạm xe</label>
                            <select class="form-select" name="carriage_way_id">
                                <option>Disabled select</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Thêm</button>
                </form>
            </div>
        </div>
    </div>

@endsection
