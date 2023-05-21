<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Facades\URL;

use Illuminate\Support\Str;


class HelperController extends Controller
{
    //
    function url(){
        //1.  Tạo 1 url cơ bản
        // $url = url('login');

        //2.  Tạo url từ route
        //   $url = route('post.show');

        //3. Tạo url qua action
        // $url = action("PostController@store");
        
        //4. Lấy đường dẫn truy cập hiện tại
        //  $url = url()->current();
        // echo $url;
    }

    function string(){
        //1. Lấy độ dài của chuỗi
        //  $str_1 = "Học laravel";
        //  echo Str::length($str_1);

        //2. In thường, in hoa một chuỗi
        // $str = "Nguyễn Hữu Kiên";
        //in thường
        // echo Str::lower($str);

        //in Hoa
        //  echo Str::upper($str);

        //3. random string
        // echo Str::random(10);

        //4. Loại bỏ kí tự dư thừa
        //  $str = Str::of('     unitop.vn    khóa học laravel   ')->trim();
        //   echo $str;  
        
        //5. Tạo link thân thiện slug
        // $str = Str::slug('Học khóa laravel để đi làm sớm');
        // echo $str;

        //6. Lấy chuỗi con
        // $str = "Laravel Pro";
        // echo Str::of($str)->substr(8);
        //lấy chữ Pro

        // echo Str::of($str)->substr(0,7);
        //lấy chữ Laravel

        //7. Nối chuỗi vào đuôi
        // echo Str::of("Nguyễn Hữu ")->append("Kiên");

        //8. Tìm kiếm, thay thế chuỗi
        // $str = "Laravel 7x";
        // echo Str::of($str)->replace('7x','9x');

        //9. Cắt chuỗi với sô ký tự cho trươc
        // abcdef => abc...

        // $str = "Huỳnh Như, Tuyết Dung quyết giành HCV để tạo động lực cho U22 Việt Nam";
        // echo Str::of($str)->limit(62);

        //10. Kiểm tra chuỗi cha chứa chuỗi con
        $str = "Học lập trình laravel cơ bản đến nâng cao";
        echo Str::contains($str, 'laravel');
     } 
}
