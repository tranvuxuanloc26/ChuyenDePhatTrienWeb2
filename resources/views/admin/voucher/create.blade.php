@extends('admin.main')

@section('head')
<script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
<form action="{{ route('voucher.store') }}" method="POST">
    @csrf
    <div class="container">
        <div class="form-group">
            <label>Mã Voucher</label>
            <input type="text" name="code" class="form-control">
        </div>
        <div class="form-group">
            <label>Loại giảm giá</label>
            <select name="discount_type" class="form-control">
                <option value="percent">Phần trăm</option>
                <option value="amount">Số tiền</option>
            </select>
        </div>
        <div class="form-group">
            <label>Giá trị giảm giá</label>
            <input type="number" name="discount_value" class="form-control">
        </div>
        <div class="form-group">
            <label>Giá trị đơn hàng tối thiểu</label>
            <input type="number" name="min_order_value" class="form-control">
        </div>
        <div class="form-group">
            <label>Giá trị giảm giá tối đa</label>
            <input type="number" name="max_discount" class="form-control">
        </div>
        <div class="form-group">
            <label>Ngày hết hạn</label>
            <input type="date" name="expired_at" class="form-control">
        </div>
        <div class="form-group">
            <label>Trạng thái</label>
            <select name="active" class="form-control">
                <option value="1">Kích hoạt</option>
                <option value="0">Vô hiệu hóa</option>
            </select>
        </div>
    </div>
    <div class="card-footer">
        <a href="{{ route('voucher.index') }}" class="btn btn-danger">Trở Về</a>
        <button type="submit" class="ml-3 btn btn-success">Lưu Voucher</button>
    </div>
</form>
@endsection

@section('footer')
<script>
    CKEDITOR.replace('content');
</script>
@endsection
