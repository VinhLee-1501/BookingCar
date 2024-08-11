@extends('layouts.admin.app')

@section('content')
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <h5 class="card-title fw-semibold mb-4">Sửa Thông Tin Khách Hàng</h5>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('dashboard.updateUser', $user->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="col-lg-12 row">
                        <div class="col-lg-6">
                            <label for="name" class="form-label">Tên khách hàng</label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ old('name', $user->name) }}">
                            @error('name')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control"
                                value="{{ old('email', $user->email) }}">
                            @error('email')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                    <div class="col-lg-12 row mt-2">
                        <div class="col-lg-6">
                            <label for="phone" class="form-label">Số điện thoại</label>
                            <input type="text" name="phone" id="phone" class="form-control"
                                value="{{ old('phone', $user->phone) }}">
                            @error('phone')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="address" class="form-label">Địa chỉ</label>
                            <input type="text" name="address" id="address" class="form-control"
                                value="{{ old('address', $user->address) }}">
                            @error('address')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-12 row mt-2">
                        <div class="col-lg-6">
                            <label for="cccd" class="form-label">Số CCCD</label>
                            <input type="text" name="cccd" id="cccd" class="form-control"
                                value="{{ old('cccd', $user->cccd) }}">
                            @error('cccd')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12 row mt-2">
                        <div class="col-lg-6">
                            <label for="birthday" class="form-label">Ngày sinh</label>
                            <input type="date" name="birthday" id="birthday" class="form-control"
                                value="{{ old('birthday', $user->birthday) }}">
                            @error('birthday')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="gender" class="form-label">Giới Tính</label>
                            <select name="gender" id="gender" class="form-select">
                                <option value="0" {{ old('gender', $user->gender) == 0 ? 'selected' : '' }}>Nam
                                </option>
                                <option value="1" {{ old('gender', $user->gender) == 1 ? 'selected' : '' }}>Nữ
                                </option>
                            </select>
                            @error('gender')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Sửa</button>
                </form>
            </div>
        </div>
    </div>
@endsection
