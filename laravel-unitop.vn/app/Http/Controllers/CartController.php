<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    //
    function show(){
        return view('cart.show');
    }
    function add(Request $request, $id){
           
        $product = Product::find($id);
        // return $product;

        // Cart::destroy();
        //xóa toàn bộ trong giỏ hàng
        Cart::add([
            'id' => $product->id,
             'name' => $product->name, 
             'qty' => 1, 
             'price' => $product->price,
             'options' => ['thumbnail'=>$product->thumbnail] 
             //đính kèm thêm các thông tin phụ của sản phẩm
            ]);
        
        // echo "<pre>";
        // print_r(Cart::content());
             return redirect('cart/show');
      }
    
      function remove($rowId){
        Cart::remove($rowId);
        return redirect('cart/show');
      }
      function destroy(){
        Cart::destroy();
        return redirect('cart/show');
      }

      function update(Request $request){
        // dd($request->all());
        $data = $request->get('qty');
        // return $data;
        foreach($data as $k=>$v){
           Cart::update($k, $v);
        }
         return redirect('cart/show');
      }
}
