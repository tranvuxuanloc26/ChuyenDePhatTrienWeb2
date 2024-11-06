@extends('admin.main')

@section('content')
<div class="card-footer">
    <a href="/admin/sliders/add" class="btn btn-primary">Tạo Slider</a>
  </div>

   <table>
      <thead>
        <tr>
            <th style="width: 50px; padding-left: 15px;">ID</th>
            <th>Tiêu Đề</th>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            <th>Link</th>
            <th>Ảnh</th>
            <th>Trạng Thái</th>
=======
            <th>Ảnh</th>
            <th>Role</th>
>>>>>>> origin/tim_kiem_user_admin
=======
            <th>Ảnh</th>
            <th>Role</th>
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
            <th>Ảnh</th>
            <th>Role</th>
>>>>>>> origin/search_product_admin
=======
            <th>Ảnh</th>
            <th>Role</th>
>>>>>>> origin/search_product
=======
            <th>Ảnh</th>
            <th>Role</th>
>>>>>>> origin/san_pham_noi_bat
=======
            <th>Ảnh</th>
            <th>Role</th>
>>>>>>> origin/san_pham_mơi_nhat
=======
            <th>Ảnh</th>
            <th>Role</th>
>>>>>>> origin/quan_ly_user
=======
            <th>Ảnh</th>
            <th>Role</th>
>>>>>>> origin/profile
            <th>Cập Nhật</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($sliders as $key => $slider)
        <tr>
            <td style="width: 50px; padding-left: 15px;">{{ $slider->id }}</td>
            <td>{{ $slider->name }}</td>
            <td>{{ $slider->url }}</td>
            <td>
                <a href="{{ $slider->thumb }}" target="_blank" > 
                <img src="{{ $slider->thumb }}" alt="" height="40px">
            </a>
        </td>
            <td>{!! \App\Helpers\Helper::active($slider->active)  !!}</td>
            <td>{{ $slider->updated_at }}</td>
            <td>
                <a class="btn btn-primary btn-sm" href="/admin/sliders/edit/{{ $slider->id }}">
                    <i class="fas fa-edit"></i>
                </a>
                <a class="btn btn-danger btn-sm" href="#" onClick="removeRow({{ $slider->id }} ,'/admin/sliders/destroy')">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
        
      </tbody>
   </table>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
   {!!  $sliders->links()  !!}
=======
   {!!  $sliders->links('pagination::bootstrap-4')  !!}
>>>>>>> origin/tim_kiem_user_admin
=======
   {!!  $sliders->links('pagination::bootstrap-4')  !!}
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
   {!!  $sliders->links('pagination::bootstrap-4')  !!}
>>>>>>> origin/search_product_admin
=======
   {!!  $sliders->links('pagination::bootstrap-4')  !!}
>>>>>>> origin/search_product
=======
   {!!  $sliders->links('pagination::bootstrap-4')  !!}
>>>>>>> origin/san_pham_noi_bat
=======
   {!!  $sliders->links('pagination::bootstrap-4')  !!}
>>>>>>> origin/san_pham_mơi_nhat
=======
   {!!  $sliders->links('pagination::bootstrap-4')  !!}
>>>>>>> origin/quan_ly_user
=======
   {!!  $sliders->links('pagination::bootstrap-4')  !!}
>>>>>>> origin/profile
@endsection

