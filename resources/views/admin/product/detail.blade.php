@extends('admin.main')

@section('content')

   <table>
      <thead>
        <tr>
            <th style="width: 50px; padding-left: 15px;">ID</th>
            <th>Hình ảnh</th>
            <th>Name</th>
            <th>Product Parent</th>
            <th>Description</th>
            <th>Content</th>
            <th>Price</th>
            <th>Price Sale</th>
            <th>Active</th>
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
            <th>Update</th>
            <th style="width: 130px">&nbsp;</th>
        </tr>
      </thead>
      <tbody>
      
        <tr>
            <td style="width: 50px; padding-left: 15px;">{{ $product->id }}"</td>
            <td> 
                <div class="how-itemcart1">
                    <a href="{{ $product->thumb }}" target="_blank" > 
                    <img src="{{ $product->thumb }}" width="100px" target="_blank" alt="IMG">
                </div>
            </td>
            <td> {{ $product->name }}</td>
            <td> {{ $product->menu ? $product->menu->name : 'Không có danh mục' }}</td>
            <td> {{ $product->description }}</td>
            <td style="max-width: 200px;">{{ $product->content }}</td>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            <td>{!! \App\Helpers\Helper::active($product->active)  !!}</td>
=======
=======
>>>>>>> origin/search_product_admin
=======
>>>>>>> origin/search_product
            <td>{{ $product->price }}</td>
            <td style="padding-left: 30px;
}">{{ $product->price_sale }}</td>
            <td>{!! \App\Helpers\Helper::active($product->active)  !!}</td>
            <td>
              @if ($product->is_featured == 0)
                  <span class="badge badge-danger btn-xs">NO</span>
              @else
                  <span class="badge badge-success btn-xs">YES</span>
              @endif
          </td>
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/tim_kiem_user_admin
=======
            <td>{!! \App\Helpers\Helper::active($product->active)  !!}</td>
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
>>>>>>> origin/search_product_admin
=======
>>>>>>> origin/search_product
            <td>{{ $product->updated_at }}</td>
        </tr>

      </tbody>
   </table>
@endsection

