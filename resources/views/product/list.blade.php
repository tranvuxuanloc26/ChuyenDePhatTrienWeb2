<div class="row isotope-grid" id="loadProduct">
    @if(isset($products) && is_iterable($products))

    @foreach ($products as $key => $product)
    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
        <!-- Block2 -->
        <div class="block2">
            <div class="block2-pic hov-img0" >
                <img src="{{ $product->thumb }}" alt="{{ $product->name }}" width="100%" height="335px">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

                <a href="/san-pham/{{ $product->id }}-{{ \Str::slug($product->name, '-') }}.html" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                    Quick View
                </a>
=======
=======
>>>>>>> chi_tiet_don_hang_da_luu
=======
>>>>>>> get_product_by_menu
=======
>>>>>>> gui_mail
                {{-- <a href="/san-pham/{{ $product->id }}-{{ \Str::slug($product->name, '-') }}.html" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                    Quick View
                </a> --}}
                <button  class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                    Quick View
                </button>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> add_to_cart
=======
>>>>>>> chi_tiet_don_hang_da_luu
=======
>>>>>>> get_product_by_menu
=======
>>>>>>> gui_mail
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
        </div>
    </div>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
   
>>>>>>> add_to_cart
=======
   
>>>>>>> chi_tiet_don_hang_da_luu
=======
   
>>>>>>> get_product_by_menu
=======
   
>>>>>>> gui_mail
    @endforeach
    @endif
</div>
  


