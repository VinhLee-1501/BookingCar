@extends('components.admin.app')

@section('content')

    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Sửa thông tin xe</h5>
        <div class="card">
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên danh mục</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                        {{--                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Số xe</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="license_plates">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Hình ảnh</label>
                        <input type="file" class="form-control" id="exampleInputPassword1" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Loại xe</label>
                        <select id="disabledSelect" class="form-select" name="category_id">
                            <option>Loại 1</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Sửa</button>
                </form>
            </div>
        </div>
    </div>

@endsection
