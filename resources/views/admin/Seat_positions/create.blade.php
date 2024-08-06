@extends('layouts.admin.app')

@section('content')

    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Thêm Vị Trí Ghế</h5>
        <div class="card">
            @if(session('add'))
                <div class="alert alert-success">{{ session('add') }}</div>
            @endif
            <div class="card-body">
                <form action="{{ route('dashboard.seat.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="name" class="form-label">Tên Ghế</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                                   placeholder="Nhập tên ghế">
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="price" class="form-label">Giá</label>
                            <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}"
                                   placeholder="Nhập giá ghế">
                            @error('price')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="status" class="form-label">Trạng Thái</label>
                            <select class="form-select" id="status" name="status">
                                <option value="0" {{ old('status') == '1' ? 'selected' : '' }}>Chưa Đặt</option>
                                <option value="1" {{ old('status') == '0' ? 'selected' : '' }}>Đã Đặt</option>
                            </select>
                            @error('status')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="nameCars" class="form-label">Xe</label>
                            <select class="form-select" id="nameCars" name="cars_id">
                                @foreach($cars as $row)
                                    <option
                                        value="{{ $row->id }}" {{ old('nameCars') == $row->id ? 'selected' : '' }}>{{ $row->license_plates}}</option>
                                @endforeach
                            </select>
                            @error('nameCars')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </form>
            </div>
        </div>
    </div>
@endsection
