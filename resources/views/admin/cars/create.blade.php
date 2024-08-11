@extends('layouts.admin.app')

@section('content')

    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Thêm thông tin xe</h5>
        <div class="card">
            @if(session('success'))
                <h5 class="alert alert-success">{{session('success')}}
                </h5>
            @endif
            <div class="card-body">
                <form action="{{route('dashboard.car.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên xe</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Số xe</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="license_plates">

                    </div>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Loại xe</label>
                        <select id="disabledSelect" class="form-select" name="category_id">
                            @foreach($Categories as $row)
                                <option value="{{$row->id}}">{{$row->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </form>
            </div>
        </div>
    </div>
@endsection
