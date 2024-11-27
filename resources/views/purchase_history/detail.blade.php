@extends('main')

@section('content')
    @include('admin.alert')
    <div class="bg0 p-t-100 p-b-85">
        <div class="container">
            <h2>{{ $title }}</h2>
            @if ($customer)
                <div class="card mt-4">

                    <div class="card-body">
                        <div class="row mt-3">
                            <div class="col-12 col-md-4 ">
                                <h5 class="card-title">Order #{{ $customer->id }}</h5>
                                <p class="card-text">Name: {{ $customer->name }}</p>
                                <p class="card-text">Phone: {{ $customer->phone }}</p>
                                <p class="card-text">Address: {{ $customer->address }}</p>
                                <p class="card-text">Note: {{ $customer->content }}</p>
                                <p class="card-text">Created at: {{ $customer->created_at }}</p>
                                <p class="card-text">
                                    Status:
                                    <span
                                        class="
                                        @if ($customer->status == 'completed') text-success 
                                        @elseif($customer->status == 'cancelled') text-danger 
                                        @else text-warning @endif">
                                        {{ $customer->status }}
                                    </span>
                                </p>
                                <p class="card-text">Total: {{ $customer->total }}</p>
                                
                            </div>

                            <div class="col-12 col-md-8">
                                @foreach ($customer->carts as $item)
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <h5 class="card-title">Product name: {{ $item->product->name }}</h5>
                                            <img style="object-fit: scale-down" src="{{ $item->product->thumb }}" alt="IMG" class="img-fluid" width="200" height="200">
                                            <p class="card-text">Price: {{ $item->product->price_sale }}</p>
                                            <p class="card-text">Quantity: {{ $item->pty }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="text-center">
                    <h2>Không tìm thấy đơn hàng</h2>
                </div>
            @endif
        </div>
    </div>
@endsection
