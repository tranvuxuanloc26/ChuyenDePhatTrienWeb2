
<header >
    @php $menuHtml = App\Helpers\Helper::menus($menus);     @endphp
    <!-- Header desktop -->
    <div class="container-menu-desktop ">
        <!-- Topbar -->
        <div class="top-bar">
            <div class="content-topbar flex-sb-m h-full container">
                <div class="left-top-bar">
                    Free shipping for standard order over $100
                </div>

                <div class="right-top-bar flex-w h-full">
                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        Help & FAQs
                    </a>

                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        My Account
                    </a>

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
<<<<<<< HEAD
                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        EN
                    </a>

                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        USD
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
>>>>>>> origin/quan_ly_user
=======
>>>>>>> origin/profile
=======
>>>>>>> origin/lien_he_email
=======
>>>>>>> origin/forgot_password
=======
>>>>>>> origin/doi_mat_khau
                    <a href="{{ route('set.language', 'en') }}" class="flex-c-m trans-04 p-lr-25">
                        EN
                    </a>

                    <a href="{{ route('set.language', 'vi') }}" class="flex-c-m trans-04 p-lr-25">
                        Vi
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
=======
>>>>>>> origin/lien_he_email
=======
>>>>>>> origin/forgot_password
=======
>>>>>>> origin/doi_mat_khau
                    </a>
                </div>
            </div>
        </div>

        <div class="wrap-menu-desktop ">
            <nav class="limiter-menu-desktop container">
                
                <!-- Logo desktop -->		
                <a href="/" class="logo">
                    <img src="/template/images/icons/logo-01.png" alt="IMG-LOGO">
                </a>

                <!-- Menu desktop -->
            

                <div id="nav" class="menu-desktop ">

                    <ul id="navbuttons" class="main-menu ">
                        {!! $menuHtml !!}
                      

                        {{-- <li >
                            <a href="index.html">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Homepage 1</a></li>
                                <li><a href="home-02.html">Homepage 2</a></li>
                                <li><a href="home-03.html">Homepage 3</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="product.html">Shop</a>
                        </li>

                        <li class="label1" data-label1="hot">
                            <a href="shoping-cart.html">Features</a>
                        </li>

                        <li>
                            <a href="blog.html">Blog</a>
                        </li>

                        <li>
                            <a href="about.html">About</a>
                        </li>

                        <li>
                            <a href="contact.html">Contact</a>
                        </li> --}}
                    </ul>
                </div>	

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                        <i class="zmdi zmdi-search"></i>
                    </div>

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
<<<<<<< HEAD
=======
>>>>>>> origin/quan_ly_user
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="{{!is_null(\Session::get('carts')) ? count(\Session::get('carts')) : 0 }}">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>

                    <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
                        <i class="zmdi zmdi-favorite-outline"></i>
                    </a>
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
=======
>>>>>>> origin/lien_he_email
=======
>>>>>>> origin/forgot_password
=======
>>>>>>> origin/doi_mat_khau
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti1 js-show-cart" data-notify="{{!is_null(\Session::get('carts')) ? count(\Session::get('carts')) : 0 }}">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>

                    <a href="{{ route('wishlist.show') }}" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="{{ session('wishlists') ? count(session('wishlists')) : 0 }}">
                        <i class="zmdi zmdi-favorite-outline"></i>
                    </a>
                    
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> origin/lien_he_email
=======
>>>>>>> origin/forgot_password
=======
>>>>>>> origin/doi_mat_khau
                    <li class="p-l-30 p-r-2 nav-item dropdown" style="right: 1px">
                        @auth
                        <!-- Hiển thị khi người dùng đã đăng nhập -->
                        <div class="d-flex align-items-center">
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
<<<<<<< HEAD
                            <img src="{{ asset('template/images/icons/R.png') }}" alt="User Avatar" class="rounded-circle me-4" style="width: 40px; height: 40px;">
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
=======
>>>>>>> origin/lien_he_email
=======
>>>>>>> origin/forgot_password
=======
>>>>>>> origin/doi_mat_khau
                        @if (Auth::user() && Auth::user()->thumb)
                            <img src="{{ Auth::user()->thumb }}" alt="{{ Auth::user()->name }}" class="rounded-circle me-4" style="width: 40px; height: 40px;">
                        @else
                            <img src="{{ asset('template/images/icons/R.png') }}" alt="User Avatar" class="rounded-circle me-4" style="width: 40px; height: 40px;">
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
                            <img src="{{ asset('template/images/icons/R.png') }}" alt="User Avatar" class="rounded-circle me-4" style="width: 40px; height: 40px;">
>>>>>>> origin/quan_ly_user
=======
>>>>>>> origin/profile
=======
>>>>>>> origin/lien_he_email
=======
>>>>>>> origin/forgot_password
=======
>>>>>>> origin/doi_mat_khau
                            <span class="fw-bold dropdown-toggle" style="margin-left: 10px" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </span>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                                <li><a class="dropdown-item" href="">Thông tin người dùng</a></li>
                                <li><a class="dropdown-item" href="">Đổi mật khẩu</a></li>
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
>>>>>>> origin/quan_ly_user
=======
                                <li><a class="dropdown-item" href="/user/profile">Thông tin người dùng</a></li>
                                <li><a class="dropdown-item" href="/change-password">Đổi mật khẩu</a></li>
>>>>>>> origin/profile
=======
                                <li><a class="dropdown-item" href="">Thông tin người dùng</a></li>
                                <li><a class="dropdown-item" href="">Đổi mật khẩu</a></li>
>>>>>>> origin/lien_he_email
=======
                                <li><a class="dropdown-item" href="">Thông tin người dùng</a></li>
                                <li><a class="dropdown-item" href="">Đổi mật khẩu</a></li>
>>>>>>> origin/forgot_password
=======
                                <li><a class="dropdown-item" href="">Thông tin người dùng</a></li>
                                <li><a class="dropdown-item" href="/change-password">Đổi mật khẩu</a></li>
>>>>>>> origin/doi_mat_khau
                                <!-- Kiểm tra nếu người dùng có role là 1 hoặc 2 thì hiển thị -->
                                @if(Auth::check() && (Auth::user()->role == 1 || Auth::user()->role == 2))
                                    <li><a class="dropdown-item" href="{{ route('admin') }}">Về trang Admin</a></li>
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
=======
>>>>>>> origin/lien_he_email
=======
>>>>>>> origin/forgot_password
=======
>>>>>>> origin/doi_mat_khau
                                <li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Đăng xuất</a>
                                </li>
                            </ul>
                        </div>
                        @endauth
                        @guest
                        <!-- Hiển thị khi người dùng chưa đăng nhập -->
                        <div class="d-flex align-items-center">
                            <a href="{{ route('login') }}" class="nav-link p-0">Đăng nhập</a>
                            <span class="px-1">/</span>
                            <a href="{{ route('register') }}" class="nav-link p-0">Đăng ký</a>
                        </div>
                        @endguest
                    </li>
                    
                    <style>
                        .dropdown:hover .dropdown-menu {
                            display: block;
                        }
                    </style>
                       
                </div>
            </nav>
        </div>	
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->		
        <div class="logo-mobile">
            <a href="/"><img src="/template//template/images///icons/logo-01.png" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                <i class="zmdi zmdi-search"></i>
            </div>

            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
                <i class="zmdi zmdi-shopping-cart"></i>
            </div>

            <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
                <i class="zmdi zmdi-favorite-outline"></i>
            </a>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="topbar-mobile">
            <li>
                <div class="left-top-bar">
                    Free shipping for standard order over $100
                </div>
            </li>

            <li>
                <div class="right-top-bar flex-w h-full">
                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        Help & FAQs
                    </a>

                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        My Account
                    </a>

                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        EN
                    </a>

                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        USD
                    </a>
                </div>
            </li>
        </ul>

        <ul class="main-menu-m">
            <li class="active-menu"><a href="/">Trang Chủ</a></li>
            {!! $menuHtml !!}
            {{-- <li >
                <a href="index.html">Home</a>
                <ul class="sub-menu">
                    <li><a href="index.html">Homepage 1</a></li>
                    <li><a href="home-02.html">Homepage 2</a></li>
                    <li><a href="home-03.html">Homepage 3</a></li>
                </ul>
            </li>

            <li>
                <a href="product.html">Shop</a>
            </li>

            <li class="label1" data-label1="hot">
                <a href="shoping-cart.html">Features</a>
            </li>

            <li>
                <a href="blog.html">Blog</a>
            </li>

            <li>
                <a href="about.html">About</a>
            </li>

            <li>
                <a href="contact.html">Contact</a>
            </li> --}}
        </ul>
    </div>

    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="/template/images/icons/icon-close2.png" alt="CLOSE">
            </button>

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
<<<<<<< HEAD
            <form class="wrap-search-header flex-w p-l-15">
=======
            <form action="{{ route('search') }}" method="GET" class="wrap-search-header flex-w p-l-15">
>>>>>>> origin/tim_kiem_user_admin
=======
            <form class="wrap-search-header flex-w p-l-15">
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
            <form action="{{ route('search') }}" method="GET" class="wrap-search-header flex-w p-l-15">
>>>>>>> origin/search_product_admin
=======
            <form action="{{ route('search') }}" method="GET" class="wrap-search-header flex-w p-l-15">
>>>>>>> origin/search_product
=======
            <form class="wrap-search-header flex-w p-l-15">
>>>>>>> origin/san_pham_noi_bat
=======
            <form class="wrap-search-header flex-w p-l-15">
>>>>>>> origin/san_pham_mơi_nhat
=======
            <form class="wrap-search-header flex-w p-l-15">
>>>>>>> origin/quan_ly_user
=======
            <form action="{{ route('search') }}" method="GET" class="wrap-search-header flex-w p-l-15">
>>>>>>> origin/profile
=======
            <form action="{{ route('search') }}" method="GET" class="wrap-search-header flex-w p-l-15">
>>>>>>> origin/lien_he_email
=======
            <form class="wrap-search-header flex-w p-l-15">
>>>>>>> origin/forgot_password
=======
            <form action="{{ route('search') }}" method="GET" class="wrap-search-header flex-w p-l-15">
>>>>>>> origin/doi_mat_khau
                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
                <input class="plh3" type="text" name="search" placeholder="Search...">
            </form>
        </div>
    </div>
</header>