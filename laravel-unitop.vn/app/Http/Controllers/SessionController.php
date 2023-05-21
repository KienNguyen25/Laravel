<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    function add(Request $request){
        $request->session()->put('name','Nguyễn Hữu Kiên');
        $request->session()->put('username','Nguyễn Hữu Đức');
        $request->session()->put('login', TRUE);

        session(['msv'=> 653335]);

        //phương thức put() được gọi để đặt một giá trị trong session. 
        //Ở đây, giá trị 'Nguyễn Hữu Kiên' được đặt trong session với khóa 'name'.
    }

    function show(Request $request){
        return $request->session()->all();
        // được sử dụng để lấy tất cả các giá trị trong session hiện tại

        // return $request->session()->get('name');
        //get('name') -> lấy dữ liệu 
        //là một phương thức trong Laravel được sử dụng để lấy giá trị của một khóa trong session.

        //Kiểm tra session
        // if($request->session()->has('name')){
        //       echo "Đã lưu name vào session";
        // }

        // return $request->session()->get('status');

        return session('msv');

    }

    function add_flash(Request $request){
         return $request->session()->flash('status', 'Bạn đã thêm sản phẩm thành công');
    }

    function delete(Request $request ){
        // $request->session()->forget('name');
        //xóa session với 1 trường

        $request->session()->flush();
        //xóa tất cả session



    }
}
