@extends('layouts.admin.app')

@section('content')
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Thêm thông tin xe</h5>
        <div class="card">
            <div class="card-body">
                <a href="{{ route('dashboard.car.create')}}" class="btn btn-success">Thêm +</a>
                <table class="table table-hover">
                    @if(session('delete'))
                        <h5 class="alert alert-danger">{{session('delete')}}
                        </h5>
                    @endif
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Số xe</th>
                        <th scope="col">Loại xe</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cars as $row)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$row->name}}</td>
                        <td>{{$row->license_plates}}</td>
                        <td>{{$row->category_name}}</td>
                        <td class="d-flex ">
                            <a href="{{route('dashboard.car.edit', $row->id)}}"
                               class="btn btn-primary btn-sm me-2">Sửa</a>
                            <form action="{{ route('dashboard.car.destroy', $row->id) }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger btn-sm ">Xóa</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
