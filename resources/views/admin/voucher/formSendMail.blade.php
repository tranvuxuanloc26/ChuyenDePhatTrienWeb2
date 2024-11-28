@extends('admin.main')

@section('head')
<script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
<form action="{{ route('admin.voucher.sendByEmail') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="emails">Chọn Email Người Dùng</label>
        <select name="emails[]" id="emails" class="form-control" multiple required>
            @foreach ($users as $user)
                <option value="{{ $user->email }}">{{ $user->email }} ({{ $user->name }})</option>
            @endforeach
        </select>
    </div>


    <div class="form-group">
        <label for="voucher_id">Chọn Voucher</label>
        <select name="voucher_id" id="voucher_id" class="form-control">
            @foreach ($vouchers as $voucher)
                <option value="{{ $voucher->id }}">{{ $voucher->code }} ({{ $voucher->discount_type }} - {{ $voucher->discount_value }})</option>
            @endforeach
        </select>
    </div>

    {{-- <div class="form-group">
        <label for="content">Nội dung email</label>
        <textarea name="content" id="content" class="form-control" required></textarea>
    </div> --}}

    <button type="submit" class="btn btn-primary">Gửi Voucher</button>
</form>
@endsection

@section('footer')
<script>
    CKEDITOR.replace('content');
</script>
@endsection
