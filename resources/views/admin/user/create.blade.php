@extends('layouts.admin.app')

@section('content')
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <h5 class="card-title fw-semibold mb-4">Thêm Khách Hàng</h5>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('dashboard.storeUser') }}" method="post">
                    @csrf
                    <div class="col-lg-12 row">
                        <div class="col-lg-6">
                            <label for="name" class="form-label">Tên Khách Hàng</label>
                            <input type="text" name="name" id="name" class="form-control"
                                   value="{{ old('name') }}">
                            @error('name')
                            <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="password" class="form-label">Mật Khẩu</label>
                            <input type="password" name="password" id="password" class="form-control"
                                   value="{{ old('password') }}">
                            @error('password')
                            <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                    <div class="col-lg-12 row mt-2">
                        <div class="col-lg-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control"
                                   value="{{ old('email') }}">
                            @error('email')
                            <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="phone" class="form-label">Số Điện Thoại</label>
                            <input type="text" name="phone" id="phone" class="form-control"
                                   value="{{ old('phone') }}">
                            @error('phone')
                            <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-12 row mt-2">
                        <div class="col-lg-6">
                            <label for="cccd" class="form-label">Cân Cước Công Dân</label>
                            <input type="text" name="cccd" id="cccd" class="form-control"
                                   value="{{ old('cccd') }}">
                            @error('cccd')
                            <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="address" class="form-label">Địa Chỉ</label>
                            <input type="text" name="address" id="address" class="form-control"
                                   value="{{ old('address') }}">
                            @error('address')
                            <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-12 row mt-2">
                        <div class="col-lg-6">
                            <label for="birthday" class="form-label">Ngày Sinh</label>
                            <input type="date" name="birthday" id="birthday" class="form-control"
                                   value="{{ old('birthday') }}">
                            @error('birthday')
                            <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="gender" class="form-label">Giới Tính</label>
                            <select name="gender" id="gender" class="form-select">
                                <option value="">Vui lòng chọn giới tính</option>
                                <option value="0" {{ old('gender') == 0 ? 'selected' : '' }}>Nam</option>
                                <option value="1" {{ old('gender') == 1 ? 'selected' : '' }}>Nữ</option>
                            </select>
                            @error('gender')
                            <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Thêm</button>
                </form>
            </div>
        </div>
    </div>
@endsection
