@extends('admin.main')

@section('content')
<div class="card-footer">
    <a href="/admin/products/add" class="btn btn-primary">Tạo Sản Phẩm</a>
  </div>

   <table>
      <thead>
        <tr>
            <th style="width: 50px; padding-left: 15px;">ID</th>
            <th style="width: 27%;">Tên Sản Phẩm </th>
            <th>Danh Mục</th>
            <th>Giá Gốc</th>
            <th>Giá Khuyễn Mãi</th>
            <th>Active</th>
            <th>Update</th>
<<<<<<< HEAD
            <th style="width: 100px">&nbsp;</th>
=======
            <th style="width: 130px">&nbsp;</th>
>>>>>>> product_admin_detail
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $key => $product)
        <tr>
            <td style="width: 50px; padding-left: 15px;">{{ $product->id }}</td>
            <td class="d-inline-block " style="max-width: 220px;">{{ $product->name }}</td>
            <td>{{ $product->menu ? $product->menu->name : 'Không có danh mục' }}</td>
            <td>{{ $product->price }}</td>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            <td style="padding-left: 30px;">{{ $product->price_sale }}</td>
           
            <td>{!! \App\Helpers\Helper::active($product->active)  !!}</td>
            
=======
            <td style="padding-left: 30px;
}">{{ $product->price_sale }}</td>
            <td>{!! \App\Helpers\Helper::active($product->active)  !!}</td>
>>>>>>> register
=======
            <td style="padding-left: 30px;
}">{{ $product->price_sale }}</td>
            <td>{!! \App\Helpers\Helper::active($product->active)  !!}</td>
>>>>>>> logout
=======
            <td style="padding-left: 30px;
}">{{ $product->price_sale }}</td>
            <td>{!! \App\Helpers\Helper::active($product->active)  !!}</td>
>>>>>>> phan_quyen
=======
            <td style="padding-left: 30px;
}">{{ $product->price_sale }}</td>
            <td>{!! \App\Helpers\Helper::active($product->active)  !!}</td>
>>>>>>> menu_admin_detail
=======
            <td style="padding-left: 30px;
}">{{ $product->price_sale }}</td>
            <td>{!! \App\Helpers\Helper::active($product->active)  !!}</td>
>>>>>>> product_admin_detail
            <td>{{ $product->updated_at }}</td>
            <td>
                <a class="btn btn-primary btn-sm" href="/admin/products/edit/{{ $product->id }}">
                    <i class="fas fa-edit"></i>
                </a>
<<<<<<< HEAD
=======
                <a class="btn btn-primary btn-sm" href="/admin/products/detail/{{ $product->id }}">
                    <i class="fas fa-eye"></i>
               </a>
>>>>>>> product_admin_detail
                <a class="btn btn-danger btn-sm" href="#" onClick="removeRow({{ $product->id }} ,'/admin/products/destroy')">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
        
      </tbody>
   </table>
   {{  $products->links('pagination::bootstrap-4')  }}
@endsection

