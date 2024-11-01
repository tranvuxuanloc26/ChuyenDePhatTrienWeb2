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
            <ul class="header-cart-wrapitem w-full">
              
                <li class="header-cart-item flex-w flex-t m-b-12">
                    <div class="header-cart-item-img">
                        <img src="" alt="IMG">
=======
=======
>>>>>>> chi_tiet_don_hang_da_luu
=======
>>>>>>> get_product_by_menu
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
>>>>>>> add_to_cart
=======
>>>>>>> chi_tiet_don_hang_da_luu
=======
>>>>>>> get_product_by_menu
                    </div>

                    <div class="header-cart-item-txt p-t-8">
                        <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
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
                            {{ $product->name }}
                        </a>

                        <span class="header-cart-item-info">
                            {!! $price !!}
                        </span>
                    </div>
                </li>
                @endforeach
             
                 @endif
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> add_to_cart
=======
>>>>>>> chi_tiet_don_hang_da_luu
=======
>>>>>>> get_product_by_menu
            </ul>
            
            <div class="w-full">
                <div class="header-cart-total w-full p-tb-40">
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
                </div>

                <div class="header-cart-buttons flex-w w-full">
                    <a href="/carts" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                        View Cart
                    </a>

                    <a href="/carts" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                        Check Out
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

