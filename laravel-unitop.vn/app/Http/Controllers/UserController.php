<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function show(){
        $users = User::all();
    //    return "Hiển thị thông tin người dùng qua id: ".$id;
    return view('user.index', compact('users'));

       
    }
    function regit(){
        return view('user.regit');
    }

    function store(Request $request){
      // Validate
       $request->validate(
        [
           'username' => 'required',
           'psw' => 'required',
           'mail' => 'required',
           'city' => 'required',
           'gender' => 'required',
           'skills' => 'required',
           'birth' => 'required',
           'intro' => 'required'
        ],
        [
            'required' => ':attribute không được để trống'
        ],
        [
           'username' => 'Tên đăng nhập',
            'psw' => 'Mật khẩu',
            'mail' => 'Email',
            'city' => 'Thành phó',
            'gender' => 'Giới tính',
            'skills' => 'Ngôn ngữ',
            'birth' => 'Ngày sinh',
            'intro' => 'Giới thiệu'
        ]
       );
        //  return $request->input(); 
        $input = $request->all();
        return redirect('user/show');
    }

    
}
