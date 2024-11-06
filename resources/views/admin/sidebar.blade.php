<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
      <img src="/template/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
      <div class="user-panel ml-3 mt-3 pb-3 mb-3 d-flex">
=======
      <div class="user-panel ml-3 mt-3 pb-3 mb-3 d-flex" style="max-width: 300px">
>>>>>>> origin/tim_kiem_user_admin
=======
      <div class="user-panel ml-3 mt-3 pb-3 mb-3 d-flex" style="max-width: 300px">
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
      <div class="user-panel ml-3 mt-3 pb-3 mb-3 d-flex" style="max-width: 300px">
>>>>>>> origin/search_product_admin
=======
      <div class="user-panel ml-3 mt-3 pb-3 mb-3 d-flex" style="max-width: 300px">
>>>>>>> origin/search_product
=======
      <div class="user-panel ml-3 mt-3 pb-3 mb-3 d-flex" style="max-width: 300px">
>>>>>>> origin/san_pham_noi_bat
=======
      <div class="user-panel ml-3 mt-3 pb-3 mb-3 d-flex" style="max-width: 300px">
>>>>>>> origin/san_pham_mơi_nhat
=======
      <div class="user-panel ml-3 mt-3 pb-3 mb-3 d-flex" style="max-width: 300px">
>>>>>>> origin/quan_ly_user
=======
      <div class="user-panel ml-3 mt-3 pb-3 mb-3 d-flex" style="max-width: 300px">
>>>>>>> origin/profile
        <div class="d-flex align-items-center">
          <img src="{{ asset('template/images/icons/R.png') }}" alt="User Avatar" class="rounded-circle me-2" style="width: 40px; height: 40px;">
          <span class="fw-bold" style="margin-left: 10px;color:#9fa5ad">{{ Auth::user()->name }}</span>
      </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
               @if(Auth::user()->role == 2)
>>>>>>> origin/tim_kiem_user_admin
=======
               @if(Auth::user()->role == 2)
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
               @if(Auth::user()->role == 2)
>>>>>>> origin/search_product_admin
=======
               @if(Auth::user()->role == 2)
>>>>>>> origin/search_product
=======
               @if(Auth::user()->role == 2)
>>>>>>> origin/san_pham_noi_bat
=======
               @if(Auth::user()->role == 2)
>>>>>>> origin/san_pham_mơi_nhat
=======
               @if(Auth::user()->role == 2)
>>>>>>> origin/quan_ly_user
=======
               @if(Auth::user()->role == 2)
>>>>>>> origin/profile
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Danh Mục
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/menus/add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm danh mục </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/menus/list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách danh mục</p>
                </a>
              </li>
            </ul>
          </li>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
          @endif
>>>>>>> origin/tim_kiem_user_admin
=======
          @endif
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
          @endif
>>>>>>> origin/search_product_admin
=======
          @endif
>>>>>>> origin/search_product
=======
          @endif
>>>>>>> origin/san_pham_noi_bat
=======
          @endif
>>>>>>> origin/san_pham_mơi_nhat
=======
          @endif
>>>>>>> origin/quan_ly_user
=======
          @endif
>>>>>>> origin/profile

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-store-alt"></i>
              <p>
                Sản Phẩm
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/products/add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm sản phẩm </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/products/list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách sản phẩm</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Slide
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/sliders/add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Slider </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/sliders/list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách Slider</p>
                </a>
              </li>
            </ul>
          </li>
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
>>>>>>> origin/quan_ly_user
=======
>>>>>>> origin/profile
          @if(Auth::user()->role == 2)
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
<<<<<<< HEAD
<<<<<<< HEAD
                <a href="/admin/users/list" class="nav-link">
=======
                <a href="{{ route('admin.users.list') }}" class="nav-link">
>>>>>>> origin/quan_ly_user
=======
                <a href="/admin/users/list" class="nav-link">
>>>>>>> origin/profile
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách Users</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
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

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cart-plus"></i>
              <p>
                Giỏ Hàng
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/customers" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách Đơn Hàng</p>
                </a>
              </li>
            </ul>
          </li>
       
         
             
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>