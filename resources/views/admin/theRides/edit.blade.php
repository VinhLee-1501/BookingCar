@extends('layouts.admin.app')

@section('content')


<div class="card-body">
    <h5 class="card-title fw-semibold mb-4">Cập Nhật Chuyến Xe</h5>
    <div class="card">
        @if(session('update'))
            <div class="alert alert-success">{{ session('update') }}</div>
        @endif
        <div class="card-body">
            <form action="{{ route('dashboard.theride.update', $Therides->id) }}" method="post">
                @method('patch')
                @csrf
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label for="name" class="form-label">Tên chuyến</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $Therides->name) }}">
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label for="price" class="form-label">Giá</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $Therides->price) }}">
                        @error('price')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="mb-3">
                    <label for="time_to_go" class="form-label">Thời gian khởi hành</label>
                    <input type="datetime-local" class="form-control" id="time_to_go" name="time_to_go" value="{{ old('time_to_go', $Therides->time_to_go) }}">
                    @error('time_to_go')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label for="estimated_departure_time" class="form-label">Thời gian dự kiến khởi hành</label>
                        <input type="datetime-local" class="form-control" id="estimated_departure_time" name="estimated_departure_time" value="{{ old('estimated_departure_time', $Therides->estimated_departure_time) }}">
                        @error('estimated_departure_time')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label for="estimated_arrival_time" class="form-label">Thời gian dự kiến đến</label>
                        <input type="datetime-local" class="form-control" id="estimated_arrival_time" name="estimated_arrival_time" value="{{ old('estimated_arrival_time', $Therides->estimated_arrival_time) }}">
                        @error('estimated_arrival_time')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label for="end_location" class="form-label">Điểm đến</label>
                        <input type="text" class="form-control" id="end_location" name="end_location" value="{{ old('end_location', $Therides->end_location) }}">
                        @error('end_location')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label for="start_location" class="form-label">Điểm xuất phát</label>
                        <input type="text" class="form-control" id="start_location" name="start_location" value="{{ old('start_location', $Therides->start_location) }}">
                        @error('start_location')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="time_to_go" class="form-label">Tuyết Xe</label>
                    <select class="form-select" id="nameCars" name="carriage_way_id">
                        @foreach($carriageWays as $row)
                            <option
                                value="{{ $row->id }}" @if($Therides->carriage_way_id == $row->id) selected @endif>{{ $row->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Cập Nhật</button>
            </form>
        </div>
    </div>
</div>
@endsection
