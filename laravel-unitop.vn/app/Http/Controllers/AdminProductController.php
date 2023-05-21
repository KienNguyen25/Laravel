<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminProductController extends Controller
{
    //
    function add(){
       DB::table('product')->insert(
        [ 
            'name' => 'Iphone 12',
            'content' => 'Nội dung mô tả iphone 12',
            'price'  => 10000,
            'user_id' => 1,
            'product_cat_id' => 1
        ]
       );
    }

    function show(){
      $show_prd = DB::table('product')
       ->select('name', 'price')
       ->get();

       echo "<pre>";
          print_r( $show_prd);
       echo "</pre>";

    }

    function update($id){
       DB::table('product')
       ->where('id', $id)
       ->update(
          [
            'price' => 200000
          ]
       );
    }

    function delete($id){
        DB::table('product')
        ->where('id', $id)
        ->delete();
    }
}
