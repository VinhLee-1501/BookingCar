@extends('layouts.admin.app')

@section('content')
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Chi tiết vé xe</h5>
        <div class="card">
            <div class="card-body">
                <a href="{{route('dashboard.addTicket')}}" class="btn btn-success">Thêm +</a>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">SDT</th>
                        <th scope="col">Mã ghế</th>
                        <th scope="col">Chuyến xe</th>
                        <th scope="col">TG khởi hành</th>
                        <th scope="col">TG đến</th>
                        <th scope="col">Mã xe di chuyển</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">3</th>
                        <td>0987654321</td>
                        <td>G1</td>
                        <td>Cần Thơ - TP Hồ Chí Minh</td>
                        <td>13h30 - 09/07/2024</td>
                        <td>17h30 - 09/07/2024</td>
                        <td>CX1</td>
                    </tr>
                    </tbody>
                </table>
                <a href="{{route('dashboard.addTicket')}}" class="btn btn-success">Thêm +</a>
            </div>
        </div>
    </div>

@endsection
