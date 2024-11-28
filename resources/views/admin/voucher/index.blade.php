@extends('admin.main')

@section('content')
<div class="card-footer">
    <a href="{{ route('voucher.create') }}" class="btn btn-info">Thêm voucher</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Mã Voucher</th>
            <th>Loại giảm giá</th>
            <th>Giá trị giảm giá</th>
            <th>Trạng thái</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach($vouchers as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->code }}</td>
                <td>{{ $item->discount_type }}</td>
                <td>{{ $item->discount_value }}</td>
                <td>{{ $item->active == 1 ? 'Kích hoạt' : 'Vô hiệu hóa' }}</td>
                <td>
                    <a href="{{ route('voucher.edit', $item->id) }}" class="btn btn-warning">Sửa</a>
                    <button class="btn btn-danger" onclick="removeRow({{ $item->id }}, '{{ route('voucher.destroy', $item->id) }}')">Xóa</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
