<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Log;
class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return "Hien thi danh sach bai viet";
        return view('product.detail');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        //
        // return "Tạo bài viết";
        // return redirect('post');
        // return redirect() -> route('post.index');

        return view('post.create'); 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = $request->all();
        // $post = new Post();
        // $post->title = $data['title'];
        // $post->content = $data['content'];
        // $post->user_id = 1; //Cái này sàu này sẽ thành id người đang đăng nhập
        // $post->save();
        // return $post; //anh để tạm vậy nhá. còn nếu e muốn redirect về trang nào thì e return nha.
        

        //Validate
        $request->validate(
            [
            'title' => 'required',
            'content' => 'required'
            ],
            [
                'required'=>':attribute không được để trống'
            ],
            [
                'title'=>'Tiêu đề',
                'content'=>'Nội dung'
            ]
       );
        // return $request->input(); 
        $input = $request->all();
        

        if($request->hasFile('file')){
            $file = $request->file;
            // Lấy tên file
             $filename = $file->getClientOriginalName();
             echo "<br>";
            // Lấy đuôi file
             $file->getClientOriginalExtension();
             echo "<br>";
            // Lấy kích thước File
             $file->getSize();
             echo "<br>";

            $path = $file->move('public/uploads/', $file->getClientOriginalName());
            $thumbnail = 'public/uploads/'.$filename;
            
            $input['thumbnail'] = $thumbnail;
            
        }
        $input['user_id'] = 1;

        Post::create($input);
        return redirect('post/show')->with('status', 'Thêm bài viết thành công');
        // return redirect()->route('post.show');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        // return "Hiển thị bài viết";
        
        //Phân trang Query Builder
        // $post = DB::table('post')->paginate(4);
        
        // $post = Post::paginate(4);
        
        //chuyển hướng sang trang fb
        // return redirect()->away('https://www.facebook.com/');
        
        // $posts = Post::all();
        $posts = Post::simplePaginate(5);
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return "chinh sua bai viet";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    function read(){
        // $posts = Post::all();
        // echo "<pre>";
        //    print_r($posts);
        // echo "</pre>";
        // return $posts;

        //  $posts = Post::where('id', 1)->get();
    //      $posts = Post::where('content', 'like', '%bài viết 2%')->get(); 
    //    echo "<pre>";
    //        print_r($posts);
    //     echo "</pre>";
    //     return $posts;


        //  $posts = Post::where('posts_id', 13)->first();
        //  echo "<pre>";
        //         print_r($posts);
        //      echo "</pre>";

        //Lấy bản ghi theo ID
        // $posts = Post::find($id);
        // return $posts;

        //Lấy danh sách bản ghi theo ID
        // $posts = Post::find([3,4]);
        // return $posts;

        //SẮP XẾP THEO DANH SÁCH THỐNG KÊ
         // $posts = Post::orderBy('posts_id')
        // ->get();

        // $posts = Post::orderBy('posts_id','desc')
        // ->get();

        //GroupBy tính toán dữ liệu theo nhóm
        // $posts = Post::selectRaw("count('id') as number_post, posts_id")
        // ->groupBy('posts_id')
        // ->get();
        // return $posts;
        
        //Limit, Offset lấy số bản ghi giới hạn
        // $posts = Post::limit(2)
        // ->offset(1)
        // ->get();

        //THêm dữ liệu vào bảng theo phương thức SAVE()
        // $posts = new Post;
        // $posts->title = 'Khóa học Laravel';
        // $posts->content = 'Học laravel pro tại unitop';
        // $posts->posts_id = 14;
        // $posts->save();
        

        //CẬP NHẬT DỮ LIỆU BẢNG THEO PHƯƠNG THỨC SAVE();
        // $posts = Post::find(5);
        // $posts->title = 'Khóa học Laravel new';
        // $posts->content = 'Học laravel pro tại unitop new';
        // $posts->posts_id = 15;
        // $posts->save();
        // return $posts;

        //THÊM DỮ LIỆU VÀO BẢNG QUA PHƯƠNG THỨC CREATE
        //  $posts = Post::create([
        //     'title' => 'Create',
        //     'content' => 'Content Create',
        //     'posts_id' => 16
        // ]);

        // return $posts;

        //CẬP NHẬT DỮ LIỆU QUA PHƯƠNG THỨC UPDATE
        // $posts = Post::where('id', 6)
        // ->update([
        //     'title' => 'Update ',
        //     'content' => 'Content Update',
        //     'posts_id' => 20
        // ]);

        // $posts = Post::where('id', $id)
        // ->update([
        //     'title' => 'Update 2 ',
        //     'content' => 'Content Update 2',
        //     'posts_id' => 22
        // ]);

        //XÓA DỮ LIỆU VỚI PHƯƠNG THỨC DELETE()
        // $posts = Post::find($id);
        // $posts->delete();

        //XÓA ID THEO ĐIỀU KIỆN BẤT KÌ
        // $posts = Post::where('posts_id', 11)->delete();
        
        //Xóa ID bằng phương thức DESTROY()
        //  Post::destroy($id);
        //Xóa nhiều ID bằng phương thức DESTROY()
        // Post::destroy([3,5]);

        //XUẤT DỮ LIỆU BẢN GHI VÀ BẢN GHI ĐÃ XÓA TẠM THỜI
        // $post = Post::withTrashed()
        // ->get();
        
        //XUẤT DỮ LIỆU BẢN GHI XÓA TẠM THỜI
        // $post = Post::onlyTrashed()
        // ->get();
      
        //  return $post;
        

        //ONE TO ONE
        // $post = Post::find(3)
        // ->FeaturedImages();

        // return $post;

        //ONE TO MANY
        
        // $post = Post::find(3);
        // $posts = Post::where('user_id', $post->user_id)->get();
    
        //    log::info($posts);
        // dd($users->user_id);

        // return $post->content;

        //ONE TO MANY
        $user = User::find(2)
        ->user;

        return $user;
    
    }
    
    //Khôi phục lại dữ liệu bị xóa
    function restore($id){
        $posts = Post::onlyTrashed()
        ->where('id', $id)
        ->restore();
    }

    //Xóa vĩnh viễn bản ghi
    function permanentlyDelete($id){
        Post::onlyTrashed()
        ->where('id',$id)
        ->forceDelete(); 
    }
}
