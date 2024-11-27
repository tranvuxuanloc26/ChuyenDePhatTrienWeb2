<!DOCTYPE html>
<html>
<head>
    <title>Mã giảm giá</title>
</head>
<body>
    <h1>Chào {{ $user->name }},</h1>
    <p>Bạn đã nhận được mã giảm giá: <strong>{{ $voucher->code }}</strong></p>
    <p>Chi tiết mã giảm giá:</p>
    <ul>
        <li>Loại giảm giá: {{ $voucher->discount_type === 'percent' ? 'Phần trăm' : 'Số tiền' }}</li>
        <li>Giá trị: {{ $voucher->discount_value }} {{ $voucher->discount_type === 'percent' ? '%' : 'VND' }}</li>
        <li>Hạn sử dụng: {{ $voucher->expired_at->format('d/m/Y') }}</li>
    </ul>
    <p>Hãy sử dụng mã giảm giá này khi thanh toán để nhận ưu đãi!</p>
</body>
</html>
