<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    function __construct(){
        $this->middleware('CheckAge')->only('index','show');
        // $this->middleware('CheckAge')->except('index');
    }

    function index(){
        return view('checkAge');
    }

    function show(){
        return view('checkAge');
    }
    function dashboard(){
        $users = Auth::user();
        return $users->role->name;
        dd($users);
        // return $users;
        // return "ok";
    }
}
