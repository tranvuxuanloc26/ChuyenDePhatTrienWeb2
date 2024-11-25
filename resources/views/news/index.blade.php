@extends('main')
@section('content')

<div class="container p-t-70 p-b-40">
    <!-- Danh sách tin tức -->
    <h2 class="mb-4">Tin tức mới nhất</h2>
    <div class="row">
        @foreach($news as $item)
        <div class="col-12 mb-4">
            <div class="card h-100 d-flex flex-column">
                <div class="row g-0">
                    <!-- Cột Hình ảnh -->
                    <div class="col-md-4">
                        <img src="{{ $item->thumb }}" width="369px" height="180px" class="card-img-top" alt="{{ $item->title }}" style="height: 180px; object-fit: cover;">
                    </div>
                    <!-- Cột Title và Content -->
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="" class="text-decoration-none">
                                    {{ $item->title }}
                                </a>
                            </h5>
                            <p class="card-text" style="font-size: 0.9rem; height: 80px; overflow: hidden; text-overflow: ellipsis;">{!! Str::limit($item->content, 100) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
     <!-- Phân trang -->
     <div class="d-flex justify-content-start">
        {{ $news->appends(['query' => request('query')])->links('pagination::bootstrap-4') }}
    </div>
</div>

@endsection
