@extends('admin.main')

@section('head')
<script src="/ckeditor/ckeditor.js"></script>

@endsection
@section('content')

<form action="{{ route('voucher.update', $voucher->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="container">
        <div class="form-group">
            <label for="code">Mã Voucher</label>
            <input type="text" class="form-control" id="code" name="code" value="{{ $voucher->code }}" required>
        </div>

        <div class="form-group">
            <label for="discount_type">Loại giảm giá</label>
            <select class="form-control" id="discount_type" name="discount_type" required>
                <option value="percent" {{ $voucher->discount_type == 'percent' ? 'selected' : '' }}>Phần trăm</option>
                <option value="amount" {{ $voucher->discount_type == 'amount' ? 'selected' : '' }}>Số tiền</option>
            </select>
        </div>

        <div class="form-group">
            <label for="discount_value">Giá trị giảm giá</label>
            <input type="number" class="form-control" id="discount_value" name="discount_value" value="{{ $voucher->discount_value }}" required>
        </div>

        <div class="form-group">
            <label for="min_order_value">Giá trị đơn hàng tối thiểu</label>
            <input type="number" class="form-control" id="min_order_value" name="min_order_value" value="{{ $voucher->min_order_value }}" required>
        </div>

        <div class="form-group">
            <label for="max_discount">Giá trị giảm giá tối đa</label>
            <input type="number" class="form-control" id="max_discount" name="max_discount" value="{{ $voucher->max_discount }}" required>
        </div>

        <div class="form-group">
            <label for="expired_at">Ngày hết hạn</label>
            <input type="date" class="form-control" id="expired_at" name="expired_at" value="{{ $voucher->expired_at }}" required>
        </div>

        <div class="form-group">
            <label for="active">Trạng thái</label>
            <select class="form-control" id="active" name="active" required>
                <option value="1" {{ $voucher->active == 1 ? 'selected' : '' }}>Kích hoạt</option>
                <option value="0" {{ $voucher->active == 0 ? 'selected' : '' }}>Vô hiệu hóa</option>
            </select>
        </div>

    </div>

    <div class="card-footer">
        <a href="{{ route('voucher.index') }}" class="btn btn-danger">Trở Về</a>

        <button type="submit" class=" ml-2 btn btn-success">Cập nhật</button>
    </div>
</form>

@endsection

@section('footer')
<script>
    CKEDITOR.replace('content');
</script>
@endsection
