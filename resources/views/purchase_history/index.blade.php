@extends('main')

@section('content')
    @include('admin.alert')
    <div class="bg0 p-t-100 p-b-85">
        
        @if (count($purchaseHistory) != 0)
            <div class="container">
                <h2>Lịch sử mua hàng</h2>
                <div class="row mt-3">
                    @foreach ($purchaseHistory as $order)
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Order #{{ $order->id }}</h5>
                                    <p class="card-text">
                                        Status: 
                                        <span class="
                                            @if($order->status == 'completed') text-success 
                                            @elseif($order->status == 'cancelled') text-danger 
                                            @else text-warning 
                                            @endif">
                                            {{ $order->status }}
                                        </span>
                                    </p>
                                    <p class="card-text">Total: {{ $order->total }}</p>
                                    <a href="{{ route('purchase.history.show', $order->id) }}" class="btn btn-primary">View Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <div class="text-center">
                <h2>Bạn chưa có đơn hàng nào</h2>
            </div>
        @endif
    </div>
@endsection