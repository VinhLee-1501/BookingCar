@foreach ($users as $row)
<tr>
    <th scope="row">1</th>
    <td>{{ $row->name }}</td>
    <td>{{ $row->email }}</td>
    <td>{{ $row->phone }}</td>
    <td>{{ $row->address }}</td>
    <td>{{ $row->cccd }}</td>
    <td>{{ \Carbon\Carbon::parse($row->birthday)->format('d/m/Y') }}</td>
    <td>{{ $row->gender == 0 ? 'Nam' : 'Nữ' }}</td>
    <td>
        <form class="d-flex" action="{{ route('dashboard.deleteUser', $row->id) }}"
            method="POST"
            onsubmit="return confirm('Are you sure you want to delete this item?');">
            @csrf
            @method('DELETE')
            <a href="{{ route('dashboard.editUser', $row->id) }}"
                class="btn btn-primary btn-sm me-2">Sửa</a>
            <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
        </form>
    </td>
</tr>
@endforeach