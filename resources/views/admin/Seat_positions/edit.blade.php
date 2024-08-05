@extends('layouts.admin.app')

@section('content')

    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Sửa Vị Trí Ghế</h5>
        <div class="card">
            @if(session('update'))
                <div class="alert alert-success">{{ session('update') }}</div>
            @endif
            <div class="card-body">
                <form action="{{ route('seat.update', $seat->id) }}" method="post">
                    @method('patch')
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="name" class="form-label">Tên Ghế</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $seat->name) }}">
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="price" class="form-label">Giá</label>
                            <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $seat->price) }}">
                            @error('price')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="status" class="form-label">Trạng Thái</label>
                            <select class="form-select" id="status" name="status">
                                <option value="0" {{ old('status', $seat->status) == 0 ? 'selected' : '' }}>Chưa Đặt</option>
                                <option value="1" {{ old('status', $seat->status) == 1 ? 'selected' : '' }}>Đã Đặt</option>
                            </select>
                            @error('status')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="cars_id" class="form-label">Xe</label>
                            <select class="form-select" id="cars_id" name="cars_id">
                                @foreach($cars as $row)
                                    <option value="{{ $row->id }}" {{ old('cars_id', $seat->cars_id) == $row->id ? 'selected' : '' }}>{{ $row->name }}</option>
                                @endforeach
                            </select>
                            @error('cars_id')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Cập Nhật</button>
                </form>
            </div>
        </div>
    </div>
@endsection
