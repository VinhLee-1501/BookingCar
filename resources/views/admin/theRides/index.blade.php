@extends('layouts.admin.app')

@section('content')
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Danh mục</h5>
        <div class="card">
            @if(session('delete'))
                <h5 class="alert alert-danger">{{session('delete')}}
                </h5>
            @endif
            <div class="card-body">
                <a href="{{route('theride.create')}}" class="btn btn-success">Thêm +</a>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên chuyến</th>
                        <th scope="col">Thời gian đi</th>
                        <th scope="col">Dự kiến KH</th>
                        <th scope="col">Dự kiến đến</th>
                        <th scope="col">Tuyến xe</th>
                        {{--                        <th scope="col">Xe di chuyển</th>--}}
                        <th scope="col">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Therides as $row)
                        <tr>
                            <th scope="row">{{$row->id}}</th>
                            <td>{{$row->name}}</td>
                            <td>{{$row->time_to_go}}</td>
                            <td>{{$row->estimated_arrival_time}}</td>
                            <td>{{$row->estimated_departure_time}}</td>
                            <td>{{$row->price}}</td>
                            {{--                            <td>{{$row->id}}</td>--}}
                            <td>
                                <a href="{{ route('theride.edit', ['id' => $row->id]) }}"
                                   class="btn btn-primary btn-sm">Sửa</a>
                                <form action="{{ route('theride.destroy', ['id' => $row->id]) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm">Xóa</button>
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
