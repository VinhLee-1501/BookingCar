@extends('layouts.admin.app')

@section('content')

    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Sửa danh mục</h5>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('dashboard.categories.update', $category->id ) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên danh mục</label>
                        <input type="text" class="form-control" value="{{$category->name}}" name="name">
                        {{--                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Số ghế xe</label>
                        <input type="number" class="form-control" value="{{$category->seats}}" name="seats">
                    </div>
                    <button type="submit" class="btn btn-primary">Sửa</button>
                </form>
            </div>
        </div>
    </div>

@endsection
