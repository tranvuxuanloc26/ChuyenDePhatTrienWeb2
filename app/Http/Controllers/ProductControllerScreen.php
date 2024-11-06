<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Http\Request;
use App\Http\Services\Product\ProductServiceScreen;
=======
=======
>>>>>>> origin/search_product_admin
=======
>>>>>>> origin/search_product
=======
>>>>>>> origin/san_pham_noi_bat
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Services\Product\ProductServiceScreen;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/tim_kiem_user_admin
=======
use Illuminate\Http\Request;
use App\Http\Services\Product\ProductServiceScreen;
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
>>>>>>> origin/search_product_admin
=======
>>>>>>> origin/search_product
=======
>>>>>>> origin/san_pham_noi_bat
class ProductControllerScreen extends Controller
{
     protected $productServiceScreen;
     public function __construct(ProductServiceScreen $productServiceScreen)
     {
          $this->productServiceScreen = $productServiceScreen;
     }
     public function index($id = '', $slug = '')
     {
              $product = $this->productServiceScreen->show($id);
              $productMore = $this->productServiceScreen->more($id);

              return view('product.content', [
                   'title' => $product->name,
                   'product' => $product,
                   'products' => $productMore,


              ]);
     }

     // public function indexQuickView($id = '', $slug = '')
     // {
     //      $product = $this->productServiceScreen->show($id);
         

     //      $productMore = $this->productServiceScreen->more($id);

     //      return view('product.popup', [
     //           'title' => $product->name,
     //           'product' => $product,
     //           'products' => $productMore

     //      ]);
     // }
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
     public function getFeaturedProducts()
{
    $featuredProducts = Product::where('is_featured', true)->get();

    // Trả về partial view chứa danh sách sản phẩm nổi bật
    return view('product.featured_products', compact('featuredProducts'))->render();
}
<<<<<<< HEAD

public function getNewestProducts(Request $request) {
     $products = Product::orderBy('updated_at', 'desc')->paginate(16); // Lấy sản phẩm mới nhất theo thời gian tạo
 
     return view('product.newest_products',[
          'title' => 'Sản phẩm mới nhất'
     ], compact('products'));
 }

 public function search(Request $request)
{
    // Lấy giá trị tìm kiếm từ request
    $search = $request->input('search');

    // Tìm kiếm theo tên và email trong bảng `products`
    $products = Product::where('name', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%')
                ->get();

    // Trả về view kèm dữ liệu
    return view('search_results', compact('products'),[
     'title' => 'Kết quả tìm kiếm'
    ]);
}
     
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

}
