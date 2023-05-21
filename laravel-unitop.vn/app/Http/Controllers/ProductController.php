<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    function show(){
        // return "Hiển thị sản phẩm qua id: ".$id;
        //truyền tham số từ Controller -> view

        // $price = 20000;
        // return view('product.show', array('id' => $id, 'price' => $price));

        $products = Product::all();
        // return $product;
        return view('product.show',compact('products'));

    }

  

    function detail(){
        // return "xem chi tiết sản phẩm";
        // cấu trúc view('folder . file-name ')
        return view('product.detail');
    }

    function update($id){
        $name = "Nguyen Kien";
        $sanpham = ['iphone11-promax', 'iphone14', 'iphone13-pro'];
        return view('product.update', compact('id', 'name', 'sanpham'));
        //Cú pháp viết tắt compact()
        //Tự động truyền biến sang 1 mảng

    }
}
