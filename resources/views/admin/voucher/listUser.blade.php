@extends('admin.main')

@section('content')
<div class="card-footer">
    {{-- <a href="{{ route('voucher.create') }}" class="btn btn-info">Thêm voucher</a> --}}
</div>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên người dùng</th>
            <th>Mã Voucher</th>
            <th>Trạng thái</th>
            <th>Thời gian tạo</th>
            {{-- <th>Hành động</th> --}}
        </tr>
    </thead>
    <tbody>
        @foreach($userVouchers as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->voucher->code }}</td>
                <td>
                    @if($item->status == 'unused')
                        Chưa sử dụng
                    @elseif($item->status == 'used')
                        Đã sử dụng
                    @else
                        Hết hạn
                    @endif
                </td>
                <td>{{ $item->created_at }}</td>
                <td>
                    {{-- <a href="{{ route('voucher.edit', $item->id) }}" class="btn btn-warning">Sửa</a> --}}
                    {{-- <button class="btn btn-danger" onclick="removeRow({{ $item->id }}, '{{ route('voucher.destroy', $item->id) }}')">Xóa</button> --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
