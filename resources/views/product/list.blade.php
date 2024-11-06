<div class="row isotope-grid" id="loadProduct">
    @if(isset($products) && is_iterable($products))

    @foreach ($products as $key => $product)
    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
        <!-- Block2 -->
        <div class="block2">
            <div class="block2-pic hov-img0" >
                <img src="{{ $product->thumb }}" alt="{{ $product->name }}" width="100%" height="335px">
                {{-- <a href="/san-pham/{{ $product->id }}-{{ \Str::slug($product->name, '-') }}.html" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                    Quick View
                </a> --}}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/quan_ly_user
                <button  class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                    Quick View
                </button>
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
                <div class="block2-txt-child1 flex-col-l ">
                    <a href="/san-pham/{{ $product->id }}-{{ \Str::slug($product->name, '-') }}.html" class="d-inline-block text-truncate stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6" style="max-width: 220px;color:black">
                        {{ $product->name }}
                    </a>

                    <span class="stext-105 cl4">
                        {!! \App\Helpers\Helper::price($product->price, $product->price_sale) !!}
                    </span>
                </div>

                <div class="block2-txt-child2 flex-r p-t-3">
                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                        <img class="icon-heart1 dis-block trans-04" src="/template/images//icons/icon-heart-01.png" alt="ICON">
                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="/template/images//icons/icon-heart-02.png" alt="ICON">
                    </a>
                </div>
            </div>
<<<<<<< HEAD
=======
=======
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
>>>>>>> origin/search_product_admin
=======
>>>>>>> origin/search_product
=======
>>>>>>> origin/san_pham_noi_bat
=======
>>>>>>> origin/san_pham_mơi_nhat
=======
>>>>>>> origin/profile
                {{-- <button  class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                    Quick View
                </button> --}}

                <a href="/san-pham/{{ $product->id }}-{{ \Str::slug($product->name, '-') }}.html"  class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                    Buy Now
                </a>
            </div>
<div class="block2-txt flex-w flex-t p-t-14" style="justify-content: space-between; align-items: center;">
    <div class="block2-txt-child1 flex-col-l" style="flex: 1; padding-right: 20px;">
        <a href="/san-pham/{{ $product->id }}-{{ \Str::slug($product->name, '-') }}.html" class="d-inline-block text-truncate stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6" style="max-width: 220px;color:black">
            {{ $product->name }}
        </a>
        <span class="stext-105 cl4">
            {!! \App\Helpers\Helper::price($product->price, $product->price_sale) !!}
        </span>
    </div>
    
    <div class="block2-txt-child2 flex-col-l" style="flex: 0 0 auto;">
        <form id="wishlist-form-{{ $product->id }}">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="number" name="num_product" min="0" value="{{ session('wishlists')[$product->id] ?? 0 }}" id="num_product_{{ $product->id }}" readonly style="width: 60px; text-align: center;">
            <button type="button" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2 add-to-wishlist" data-product-id="{{ $product->id }}">
                <img class="icon-heart1 dis-block trans-04" src="/template/images/icons/icon-heart-01.png" alt="ICON">
                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="/template/images/icons/icon-heart-02.png" alt="ICON">
            </button>
        </form>
    </div>
</div>

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/tim_kiem_user_admin
=======
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
>>>>>>> origin/search_product_admin
=======
>>>>>>> origin/search_product
=======
>>>>>>> origin/san_pham_noi_bat
=======
>>>>>>> origin/san_pham_mơi_nhat
=======
>>>>>>> origin/quan_ly_user
=======
>>>>>>> origin/profile
        </div>
    </div>
   
    @endforeach
    @endif
</div>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
  
=======
=======
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
>>>>>>> origin/search_product_admin
=======
>>>>>>> origin/search_product
=======
>>>>>>> origin/san_pham_noi_bat
=======
>>>>>>> origin/san_pham_mơi_nhat
=======
>>>>>>> origin/profile
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.add-to-wishlist').on('click', function(event) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của nút

            var productId = $(this).data('product-id');
            var inputField = $('#num_product_' + productId);
            var currentQuantity = parseInt(inputField.val());

            // Toggle số lượng
            if (currentQuantity === 0) {
                currentQuantity = 1; // Tăng lên 1
            } else {
                currentQuantity = 0; // Giảm về 0
            }
            inputField.val(currentQuantity);

            // Gửi yêu cầu AJAX đến server
            $.ajax({
                url: '{{ route('wishlist.add') }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    product_id: productId,
                    num_product: currentQuantity // Gửi số lượng mới
                },
                success: function(response) {
                    // Cập nhật số lượng trong biểu tượng wishlist
                    var currentWishlistCount = parseInt($('.icon-header-noti').data('notify')) || 0;

                    if (currentQuantity === 1) {
                        currentWishlistCount += 1; // Thêm sản phẩm vào wishlist
                    } else {
                        currentWishlistCount -= 1; // Xóa sản phẩm khỏi wishlist
                    }

                    // Cập nhật thuộc tính data-notify trên biểu tượng
                    $('.icon-header-noti').data('notify', currentWishlistCount).attr('data-notify', currentWishlistCount);

                    // Luôn hiển thị biểu tượng wishlist
                    if (currentWishlistCount > 0) {
                        $('.icon-header-noti').show(); // Hiển thị biểu tượng nếu có sản phẩm
                    }
                },
                error: function(xhr) {
                    alert('Vui lòng Đăng nhập');
                }
            });
        });
    });
</script>




<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/tim_kiem_user_admin
=======
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
>>>>>>> origin/search_product_admin
=======
>>>>>>> origin/search_product
=======
>>>>>>> origin/san_pham_noi_bat
=======
>>>>>>> origin/san_pham_mơi_nhat
=======
  
>>>>>>> origin/quan_ly_user
=======
>>>>>>> origin/profile


