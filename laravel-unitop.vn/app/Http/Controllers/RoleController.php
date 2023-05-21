<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
class RoleController extends Controller
{
    //MANY TO MANY
    function show(){
        // $users = Role::find(4)
        // ->users;
        
        //Lấy ra tất cả các quyền có role_id bằng 3
        $roles = Role::find(3)
        ->users;

        // $roles = User::find(1)
        // ->roles;

        return $roles;
    }
}
