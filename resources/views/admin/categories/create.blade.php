@extends('components.admin.app')

@section('content')

    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Thêm danh mục</h5>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('dashboard.categories.store') }}" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên danh mục</label>
                        <input type="text" class="form-control" name="name">
                        {{--                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Số ghế</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="seats">
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </form>
            </div>
        </div>
    </div>

@endsection
