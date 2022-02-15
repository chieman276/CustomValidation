<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index()
    {
        //   echo __METHOD__;
        $products = Product::all();
        // dd($products);


        return view('index',compact('products'));
    }
    public function show($id)
    {
        $productKey = 'product_' . $id;

        // Kiểm tra Session của sản phẩm có tồn tại hay không.
        // Nếu không tồn tại, sẽ tự động tăng trường view_count lên 1 đồng thời tạo session lưu trữ key sản phẩm.
        if (!Session::has($productKey)) {
            Product::where('id', $id)->increment('view_count');
            Session::put($productKey, 1);
        }

        // Sử dụng Eloquent để lấy ra sản phẩm theo id
        $product = Product::find($id);
        $product->view_count = $product->view_count + 1;
        $product->save();

        // Trả về view
        return view('show', compact('product'));
    }
}
