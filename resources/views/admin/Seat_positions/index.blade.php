@extends('layouts.admin.app')

@section('content')
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Vị Trí Ghế</h5>
        <div class="card">
            @if(session('delete'))
                <h5 class="alert alert-danger" >{{session('delete')}}
                </h5>
            @endif
            <div class="card-body">
                <a href="{{route('seat.create')}}" class="btn btn-success">Thêm +</a>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên Ghế</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Trạng Thái</th>
                        <th scope="col">Tên Xe</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tbody>'
                    @foreach($seat as $row)
                    <tr>
                        <th scope="row">{{$row->id}}</th>
                        <td>{{$row->name}}</td>
                        <td>{{$row->price}}.000</td>
                        <td>
                            {{ $row->status == 1 ? 'Đã đặt' : 'Chưa đặt' }}
                        </td>
                        <td>{{$row->cars_id}}</td>
                        <td class="d-flex">
                            <a href="{{route('seat.edit', $row->id)}}" class="btn btn-primary btn-sm me-2">Sửa</a>
                            <form action="{{ route('seat.destroy', $row->id) }}" method="post">
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
