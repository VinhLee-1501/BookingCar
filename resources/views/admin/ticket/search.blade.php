@foreach ($ticketCars as $ticketCar)
    <tr>
        <th scope="row">{{ $ticketCar['id'] }}</th>
        <td>{{ $ticketCar['user_name'] }}</td>
        <td>{{ $ticketCar['seat_position'] }}</td>
        <td>{{ $ticketCar['status'] == 1 ? 'Hoàn thành' : 'Chưa' }}</td>
        <td>{{ $ticketCar['name_car'] }} | {{ $ticketCar['license_plates'] }}</td>
        <td>
            @if ($ticketCar['status'] == 1)
                <a href="{{ route('dashboard.detail', $ticketCar['id']) }}" class="btn btn-primary btn-sm">Chi tiết</a>
            @endif
            {{-- <button type="button" class="btn btn-danger btn-sm">Xóa</button> --}}
        </td>
    </tr>
@endforeach
