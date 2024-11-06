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
          <label for="menu">Tên Sản Phẩm</label>
          <input type="text" name="name" value="{{ old('name') }}" class="form-control"  placeholder="Nhập tên sản phẩm">
        </div>

        <div class="form-group">
            <label for="menu">Giá Sản Phẩm</label>
            <input type="number" name="price" value="{{ old('price') }}" class="form-control"  placeholder="Nhập giá sản phẩm">
        </div>

        <div class="form-group">
            <label for="menu">Giảm Giá Sản Phẩm</label>
            <input type="number" name="price_sale" value="{{ old('price_sale') }}" class="form-control"  placeholder="Nhập giảm giá sản phẩm">
        </div>

        <div class="form-group">
            <label for="menu">Ảnh Sản Phẩm</label>
            <input type="file"  class="form-control" id="upload"  placeholder="Nhập ảnh sản phẩm">
            <div id="image_show" style="margin-top: 10px;">
                 
            </div>
            <input type="hidden" name="thumb" id="thumb">
        </div>

        <div class="form-group">
            <label >Danh Mục Cha</label>
            <select class="form-control" name="menu_id">
                @foreach ($menus as $menu)
                <option value="{{ $menu->id }}">{{ $menu->name }}</option>

                @endforeach
            </select>
          </div>

        <div class="form-group">
            <label>Mô Tả</label>
            <textarea name="description" class="form-control">{{ old('description') }}</textarea>
        </div>

        <div class="form-group">
            <label >Mô Tả Chi Tiết</label>
            <textarea name="content" id="editor" class="form-control">{{ old('content') }}</textarea>
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> origin/search_product_admin
=======
>>>>>>> origin/search_product


          {{-- <div class="form-group">
=======


          <div class="form-group">
>>>>>>> origin/san_pham_noi_bat
=======


          <div class="form-group">
>>>>>>> origin/san_pham_mơi_nhat
            <label for="">Nổi Bật</label>
            <div class="custom-control custom-radio">
              <input class="custom-control-input" value="1" type="radio" id="is_featured" name="is_featured" >
              <label for="is_featured" class="custom-control-label">Có</label>
            </div>
            <div class="custom-control custom-radio">
              <input class="custom-control-input" value="0" type="is_featured" id="no_is_featured" name="is_featured" checked="">
              <label for="no_is_featured" class="custom-control-label">Không</label>
            </div>
           
<<<<<<< HEAD
<<<<<<< HEAD
          </div> --}}
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
          </div>
>>>>>>> origin/san_pham_noi_bat
=======
          </div>
>>>>>>> origin/san_pham_mơi_nhat
=======
>>>>>>> origin/quan_ly_user
        

      </div>
      <!-- /.card-body -->
      
      <div class="card-footer">
        <a href="/admin/products/list" class="btn btn-primary">Trở Về</a>

        <button type="submit" class="btn btn-primary">Tạo Sản Phẩm</button>
      </div>
      
    </form>
  </div>
@endsection

@section('footer')
<script>
    CKEDITOR.replace('content');
</script>
@endsection