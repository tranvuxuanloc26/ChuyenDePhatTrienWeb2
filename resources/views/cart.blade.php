<div class="wrap-header-cart js-panel-cart">
    <div class="s-full js-hide-cart"></div>

    <div class="header-cart flex-col-l p-l-65 p-r-25">
        <div class="header-cart-title flex-w flex-sb-m p-b-8">
            <span class="mtext-103 cl2">
                Your Cart
            </span>

            <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                <i class="zmdi zmdi-close"></i>
            </div>
        </div>
        
        <div class="header-cart-content flex-w js-pscroll">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            <ul class="header-cart-wrapitem w-full">
=======
            <ul class="header-cart-wrapitem w-full">
               
                
>>>>>>> product_detail
              
                <li class="header-cart-item flex-w flex-t m-b-12">
                    <div class="header-cart-item-img">
                        <img src="" alt="IMG">
<<<<<<< HEAD
=======
=======
>>>>>>> chi_tiet_don_hang_da_luu
=======
>>>>>>> get_product_by_menu
=======
>>>>>>> gui_mail
=======
>>>>>>> load_more
=======
>>>>>>> luu_thong_tin_don_hang
=======
>>>>>>> remove_cart
=======
>>>>>>> sort_by_price
=======
>>>>>>> update_cart
            @php $sumPriceCart = 0; @endphp
            <ul class="header-cart-wrapitem w-full">
                @if(count($products) > 0 )
                @foreach ($products as $key=>$product)
                @php 
                
                $price = \App\Helpers\Helper::price($product->price, $product->price_sale); 
                $sumPriceCart += $product->price_sale !=0 ? $product->price_sale : $product->price;
                
                @endphp
                <li class="header-cart-item flex-w flex-t m-b-12">
                    <div class="header-cart-item-img">
                        <img src="{{ $product->thumb }}" alt="IMG">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> load_more
=======
>>>>>>> luu_thong_tin_don_hang
=======
>>>>>>> product_detail
=======
>>>>>>> remove_cart
=======
>>>>>>> sort_by_price
=======
>>>>>>> update_cart
                    </div>

                    <div class="header-cart-item-txt p-t-8">
                        <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                            
                        </a>

                        <span class="header-cart-item-info">
                           
                        </span>
                    </div>
                </li>
             
=======
=======
>>>>>>> chi_tiet_don_hang_da_luu
=======
>>>>>>> get_product_by_menu
=======
>>>>>>> gui_mail
=======
>>>>>>> load_more
=======
>>>>>>> luu_thong_tin_don_hang
=======
>>>>>>> remove_cart
=======
>>>>>>> sort_by_price
=======
>>>>>>> update_cart
                            {{ $product->name }}
                        </a>

                        <span class="header-cart-item-info">
                            {!! $price !!}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                           
                        </a>

                        <span class="header-cart-item-info">
                            
>>>>>>> product_detail
=======
>>>>>>> remove_cart
=======
>>>>>>> sort_by_price
=======
>>>>>>> update_cart
                        </span>
                    </div>
                </li>
                @endforeach
             
                 @endif
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> load_more
=======
>>>>>>> luu_thong_tin_don_hang
=======
>>>>>>> product_detail
=======
>>>>>>> remove_cart
=======
>>>>>>> sort_by_price
=======
>>>>>>> update_cart
            </ul>
            
            <div class="w-full">
                <div class="header-cart-total w-full p-tb-40">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                    Totals: {{ number_format($sumPriceCart,'0', '','.') }} đ
>>>>>>> add_to_cart
=======
                    Totals: {{ number_format($sumPriceCart,'0', '','.') }} đ
>>>>>>> chi_tiet_don_hang_da_luu
=======
                    Totals: {{ number_format($sumPriceCart,'0', '','.') }} đ
>>>>>>> get_product_by_menu
=======
                    Totals: {{ number_format($sumPriceCart,'0', '','.') }} đ
>>>>>>> gui_mail
=======
                    Totals: {{ number_format($sumPriceCart,'0', '','.') }} đ
>>>>>>> load_more
=======
                    Totals: {{ number_format($sumPriceCart,'0', '','.') }} đ
>>>>>>> luu_thong_tin_don_hang
=======
                    Totals: {{ number_format($sumPriceCart,'0', '','.') }} đ
>>>>>>> remove_cart
=======
                    Totals: {{ number_format($sumPriceCart,'0', '','.') }} đ
>>>>>>> sort_by_price
=======
                    Totals: {{ number_format($sumPriceCart,'0', '','.') }} đ
>>>>>>> update_cart
                </div>

                <div class="header-cart-buttons flex-w w-full">
                    <a href="/carts" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                        View Cart
                    </a>

                    <a href="/carts" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                    Totals: 13123 đ
                </div>

                <div class="header-cart-buttons flex-w w-full">
                    <a href="" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                        View Cart
                    </a>

                    <a href="" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
>>>>>>> product_detail
=======
>>>>>>> remove_cart
=======
>>>>>>> sort_by_price
=======
>>>>>>> update_cart
                        Check Out
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

