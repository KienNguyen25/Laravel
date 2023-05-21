<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    function add(){
        DB::table('category')->insert(
            ['title' => 'Danh mục bài viết 7', 'content' => 'Nội dung bài viết 7', 'post_id' => 1, 'user_id' => 1]
        );
    }

    function show(){
        // $cate = DB::table('category')->select('title', 'content')->get();
         
        // foreach($cate as $cat){
        //    echo $cat->title;
        //    echo $cat->content;
        //    echo "<br>";
        // }
        // return $cate;

        // $cate = DB::table('category')->select('title', 'content')->first();
        // $cate = DB::table('category')->where('id', 2)->first();
        // $cate = DB::table('category')->find(3);

        // $number_cate = DB::table('category')->where('post_id', 2)->count();
        // echo $number_cate;

        // $max = DB::table('category')->max('post_id');
        // $min = DB::table('category')->min('post_id');
        // $avg = DB::table('category')->avg('post_id');

        // echo $avg;

        // echo $cate->title;
        // echo "<br>";
        // echo $cate->content;

        // $categories =  DB::table('category')
        // ->join('post', 'post.id','=','category.post_id')
        // ->select('category.title', 'post.content')
        // ->get();
        
        // print_r($categories);
        // return $categories;

        // $category = DB::table('category')
        // ->where('content', 'LIKE', '%nội dung danh mục%' )
        // ->get();

        // echo "<pre>";
        // print_r($category);
        // echo "</pre>";

        // $category = DB::table('category')
        // ->where([
        //     ['content', 'like', '%nội dung bài viết%'],
        //     ['vote', '>', 30 ]
        // ])
        // ->get();
        // echo "<pre>";
        //   print_r($category);
        // echo "</pre>";

        // $category = DB::table('category')
        // ->where('post_id', '=', 1)
        // ->orwhere('vote', '<>', 0)
        // ->get();

        // echo "<pre>";
        //     print_r($category);
        // echo "</pre>";

        // $category = DB::table('category')
        // ->selectRaw("count('id') as number_cate, post_id")
        // ->groupBy('post_id')
        // ->get();

        //  echo "<pre>";
        //     print_r($category);
        // echo "</pre>";
        

        // $category = DB::table('category')
        // ->selectRaw("count('id') as number_cate, 'post_id'")
        // ->groupBy('post_id')
        // ->orderBy('vote', 'desc')
        // ->get();

        //  echo "<pre>";
        //     print_r($category);
        // echo "</pre>";

        // $category = DB::table('category')
        // ->offset(3)
        // ->limit(4)
        // ->get();

        // echo "<pre>";
        //     print_r($category);
        // echo "</pre>";

      
   }
function update($id){
    DB::table('category')
    ->where('id', $id)
    ->update([
      'title' => 'Update danh mục 1',
      'content' => 'Update nội dung 1'
    ]);
}

   function delete($id){
    DB::table('category')
    ->where('id', $id)
    ->delete();
   }
}
