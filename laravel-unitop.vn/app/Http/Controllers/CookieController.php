<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class CookieController extends Controller
{
    //
    function set(){
      $response = new Response();
      return $response->cookie('unitop','Học web đi làm', 24*60);
    }
    function get(Request $request){
         return $request->cookie('unitop');
    }
}
