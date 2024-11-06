@extends('admin.main')

@section('content')
<div class="card-footer">
    <a href="/admin/products/add" class="btn btn-primary">Tạo Sản Phẩm</a>
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
=======
>>>>>>> origin/search_product_admin
=======
>>>>>>> origin/profile
=======
>>>>>>> origin/lien_he_email
=======
>>>>>>> origin/doi_mat_khau
<!-- Form tìm kiếm -->
<form action="{{ route('admin.products.search') }}" method="GET" class="form-inline mb-3">
    <input type="text" name="query" class="form-control" placeholder="Tìm kiếm sản phẩm..." value="{{ request('query') }}">
    <button type="submit" class="btn btn-primary ml-2">Tìm kiếm</button>
</form>
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
   <table>
      <thead>
        <tr>
            <th style="width: 50px; padding-left: 15px;">ID</th>
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
            <th style="width: 27%;">Tên Sản Phẩm </th>
=======
            <th style="width: 23%;">Tên Sản Phẩm </th>
>>>>>>> origin/tim_kiem_user_admin
=======
            <th style="width: 27%;">Tên Sản Phẩm </th>
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
            <th style="width: 23%;">Tên Sản Phẩm </th>
>>>>>>> origin/search_product_admin
=======
            <th style="width: 23%;">Tên Sản Phẩm </th>
>>>>>>> origin/search_product
=======
            <th style="width: 23%;">Tên Sản Phẩm </th>
>>>>>>> origin/san_pham_noi_bat
=======
            <th style="width: 23%;">Tên Sản Phẩm </th>
>>>>>>> origin/san_pham_mơi_nhat
=======
            <th style="width: 27%;">Tên Sản Phẩm </th>
>>>>>>> origin/quan_ly_user
=======
            <th style="width: 23%;">Tên Sản Phẩm </th>
>>>>>>> origin/profile
=======
            <th style="width: 23%;">Tên Sản Phẩm </th>
>>>>>>> origin/lien_he_email
=======
            <th style="width: 23%;">Tên Sản Phẩm </th>
>>>>>>> origin/forgot_password
=======
            <th style="width: 23%;">Tên Sản Phẩm </th>
>>>>>>> origin/doi_mat_khau
            <th>Danh Mục</th>
            <th>Giá Gốc</th>
            <th>Giá Khuyễn Mãi</th>
            <th>Active</th>
            <th>Update</th>
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
            <th>Feature</th>
>>>>>>> origin/tim_kiem_user_admin
=======
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
            <th>Feature</th>
>>>>>>> origin/search_product_admin
=======
            <th>Feature</th>
>>>>>>> origin/search_product
=======
            <th>Feature</th>
>>>>>>> origin/san_pham_noi_bat
=======
            <th>Feature</th>
>>>>>>> origin/san_pham_mơi_nhat
=======
>>>>>>> origin/quan_ly_user
=======
            <th>Feature</th>
>>>>>>> origin/profile
=======
            <th>Feature</th>
>>>>>>> origin/lien_he_email
=======
            <th>Feature</th>
>>>>>>> origin/forgot_password
=======
            <th>Feature</th>
>>>>>>> origin/doi_mat_khau
            <th style="width: 130px">&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $key => $product)
        <tr>
            <td style="width: 50px; padding-left: 15px;">{{ $product->id }}</td>
            <td class="d-inline-block " style="max-width: 220px;">{{ $product->name }}</td>
            <td>{{ $product->menu ? $product->menu->name : 'Không có danh mục' }}</td>
            <td>{{ $product->price }}</td>
            <td style="padding-left: 30px;
}">{{ $product->price_sale }}</td>
            <td>{!! \App\Helpers\Helper::active($product->active)  !!}</td>
            <td>{{ $product->updated_at }}</td>
            <td>
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
                @if ($product->is_featured == 0)
                    <span class="badge badge-danger btn-xs">NO</span>
                @else
                    <span class="badge badge-success btn-xs">YES</span>
                @endif
            </td>
            <td>
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
                <a class="btn btn-primary btn-sm" href="/admin/products/edit/{{ $product->id }}">
                    <i class="fas fa-edit"></i>
                </a>
                <a class="btn btn-primary btn-sm" href="/admin/products/detail/{{ $product->id }}">
                    <i class="fas fa-eye"></i>
               </a>
                <a class="btn btn-danger btn-sm" href="#" onClick="removeRow({{ $product->id }} ,'/admin/products/destroy')">
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
   {{  $products->links('pagination::bootstrap-4')  }}
@endsection
=======
   {{ $products->appends(['query' => request('query')])->links('pagination::bootstrap-4') }}@endsection
>>>>>>> origin/tim_kiem_user_admin
=======
   {{  $products->links('pagination::bootstrap-4')  }}
@endsection
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
   {{ $products->appends(['query' => request('query')])->links('pagination::bootstrap-4') }}@endsection
>>>>>>> origin/search_product_admin
=======
   {{  $products->links('pagination::bootstrap-4')  }}
@endsection
>>>>>>> origin/search_product
=======
   {{  $products->links('pagination::bootstrap-4')  }}
@endsection
>>>>>>> origin/san_pham_noi_bat
=======
   {{  $products->links('pagination::bootstrap-4')  }}
@endsection
>>>>>>> origin/san_pham_mơi_nhat
=======
   {{  $products->links('pagination::bootstrap-4')  }}
@endsection
>>>>>>> origin/quan_ly_user
=======
   {{ $products->appends(['query' => request('query')])->links('pagination::bootstrap-4') }}@endsection
>>>>>>> origin/profile
=======
   {{ $products->appends(['query' => request('query')])->links('pagination::bootstrap-4') }}@endsection
>>>>>>> origin/lien_he_email
=======
   {{  $products->links('pagination::bootstrap-4')  }}
@endsection
>>>>>>> origin/forgot_password
=======
   {{ $products->appends(['query' => request('query')])->links('pagination::bootstrap-4') }}@endsection
>>>>>>> origin/doi_mat_khau

