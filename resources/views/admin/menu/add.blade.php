@extends('admin.main')

@section('head')
<script src="/ckeditor/ckeditor.js"></script>

@endsection
@section('content')
<div class="card card-primary">
   
    <!-- /.card-header -->
    <!-- form start -->
    <form action="" method="POST">
        @csrf
      <div class="card-body">

        <div class="form-group">
          <label for="menu">Tên Danh Mục</label>
          <input type="text" name="name" class="form-control"  placeholder="Nhập tên danh mục">
        </div>

        <div class="form-group">
            <label >Danh Mục Cha</label>
            <select class="form-control" name="parent_id">
                <option value="0">Danh Mục Cha</option>
                @foreach ($menus as $menu)
                <option value="{{ $menu->id }}">{{ $menu->name }}</option>

                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="menu">Ảnh Menu</label>
            <input type="file"  class="form-control" id="upload"  placeholder="Nhập ảnh menu">
            <div id="image_show" style="margin-top: 10px;">
                 
            </div>
            <input type="hidden" name="thumb" id="thumb">
        </div>
        <div class="form-group">
            <label>Mô Tả</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label >Mô Tả Chi Tiết</label>
            <textarea name="content" id="editor" class="form-control"></textarea>
        </div>
      
       
           
        <div class="form-group">
            <label for="">Kích Hoạt</label>
            <div class="custom-control custom-radio">
              <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked="">
              <label for="active" class="custom-control-label">Có</label>
            </div>
            <div class="custom-control custom-radio">
              <input class="custom-control-input" value="0" type="radio" id="no_active" name="active" >
              <label for="no_active" class="custom-control-label">Không</label>
            </div>
           
          </div>
        

      </div>
      <!-- /.card-body -->
      
      <div class="card-footer">
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
        <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
      
            <a href="/admin/menus/list" class="btn btn-primary">Trở về</a>
=======
        <a href="/admin/menus/list" class="btn btn-primary ml-5">Trở Về</a>
        <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
>>>>>>> add_to_cart
=======
        <a href="/admin/menus/list" class="btn btn-primary">Trở Về</a>
        <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
>>>>>>> chi_tiet_don_hang_da_luu
=======
        <a href="/admin/menus/list" class="btn btn-primary ml-5">Trở Về</a>
        <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
>>>>>>> get_product_by_menu
=======
        <a href="/admin/menus/list" class="btn btn-primary">Trở Về</a>
        <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
>>>>>>> gui_mail
=======
        <a href="/admin/menus/list" class="btn btn-primary">Trở Về</a>
        <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
>>>>>>> luu_thong_tin_don_hang
=======
        <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
      
            <a href="/admin/menus/list" class="btn btn-primary">Trở về</a>
>>>>>>> menu
=======
        <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
      
            <a href="/admin/menus/list" class="btn btn-primary">Trở về</a>
>>>>>>> product
=======
        <a href="/admin/menus/list" class="btn btn-primary ml-5">Trở Về</a>
        <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
>>>>>>> product_detail
=======
        <a href="/admin/menus/list" class="btn btn-primary ml-5">Trở Về</a>
        <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
>>>>>>> remove_cart
=======
        <a href="/admin/menus/list" class="btn btn-primary">Trở Về</a>
        <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
>>>>>>> sort_by_price
=======
        <a href="/admin/menus/list" class="btn btn-primary ml-5">Trở Về</a>
        <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
>>>>>>> update_cart
    
      </div>
    
    </form>
  </div>
@endsection

@section('footer')

  <script>
        CKEDITOR.replace('content');
    </script>

@endsection