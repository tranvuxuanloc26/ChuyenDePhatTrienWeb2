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
            <th style="width: 100px">&nbsp;</th>
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
                <a class="btn btn-primary btn-sm" href="/admin/products/edit/{{ $product->id }}">
                    <i class="fas fa-edit"></i>
                </a>
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

