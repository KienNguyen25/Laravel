<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/post', function() {
//     return "Daay la trang bai viet";
// });

// Route::get('/Admin/products', function(){
//     return "Trang quan ly san pham";
// });

// Route::get('/Admin/products/add', function(){
//     return "Trang thêm ly san pham";
// });

// //Định tuyến 1 tham số

// Route::get('/post/{id}', function($id){
//     return $id;
// });

// //Định tuyến 2 tham số
// Route::get('/category/{cat_id}/page/{page}', function($cat_id, $page){
//     return $cat_id."-".$page;
// });

// //Đặt tên định tuyến
// Route::get('/admin/profile', function(){
    
//     //route();
//     //trả về đường dẫn của tham số ở trong
//     return route('profile');
// }) -> name('profile');

// Route::get('/Admin/products/add', function(){
//     //route();
//     //trả về đường dẫn của tham số ở trong
//     return route('products.add');
// }) -> name('products.add');


// //Định tuyến có tham số tùy chọn
// // {id?} => được hiểu là có thể truyền vào tham số id hoặc có thể không truyền tham số id
// // Domain.com/users => nếu không truyền tham số sẽ mặc định trả về 0
// // Domain.com/users/1234 => nếu truyền tham số sẽ trả về tham số đó
// Route::get('users/{id?}', function($id = 0){
//     return $id;
// });

// //Biểu thức chính quy
// //Với điều kiện chuẩn TV từ A->Za->z+
// Route::get('/user/{name}', function (string $name) {

//     return 'định dạng thành công';
//     // ...
// })->where('name', '[A-Za-z]+');

// // //Với điều kiện chỉ đc truyền tham số từ 0->9+
// Route::get('/user/{id}', function (string $id) {
//     // ...
//     return 'định dạng chuẩn number';
// })->where('id', '[0-9]+');

// //Kết hợp cả 2 định dạng chuẩn TV và chuẩn number
// Route::get('/user/{id}/{name}', function (string $id, string $name) {

//     return "OK";
//     // ...
// })->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);



// //whereNumber + whereAlpha
// //truyền 2 tham số đúng định dạng 
// Route::get('/user/{id}/{name}', function (string $id, string $name) {
//     return 'okkk';
//     // ...
// })->whereNumber('id')->whereAlpha('name');


// //Truyền string + number 
// Route::get('/user/{name}', function (string $name) {
//     return "test1";
//     // ...

// })->whereAlphaNumeric('name');

// //
// Route::get('/user/{id}', function (string $id) {
//     // ...
//     return "test2";
// })->whereUuid('id');


// //Định tuyến qua view
// Route::view('/welcom', 'welcome');

// Route::view('/postt', 'postt', ['id' => 20]);

// //Định tuyến qua Controller
// //mã lệnh khởi tạo: php artisan make:controller + ( tên controller muốn tạo)

// Route::get('/postt/{id}', 'PostController@detail');

//Bai tap Routing

// Route::get('/admin/post/add', 'AdminPostController@add');

// Route::get('/admin/post/update/{id}', 'AdminPostController@update');

// Route::get('/admin/post/show', 'AdminPostController@show');

// Route::get('/admin/post/delete/{id}', 'AdminPostController@delete');

// //Định tuyến qua Controller
// Route::get('/admin/user/show/{id}' ,'UserController@show');

Route::get('/', 'ProductController@show');
Route::get('cart/show', 'CartController@show');
Route::get('cart/add/{id}', 'CartController@add')->name('cart.add');
Route::get('cart/remove/{rowId}', 'CartController@remove')->name('cart.remove');
Route::get('cart/destroy', 'CartController@destroy')->name('cart.destroy');
Route::post('cart/update', 'CartController@update')->name('cart.update');

// Route::get('/product/detail', 'ProductController@detail');
// Route::get('/product/update/{id}', 'ProductController@update');


// //tạo định tuyến theo resource
// // sau đó chạy terminal: php artisan route:list
// Route::resource('post', 'PostController');
// Route::get('/post/index','PostController@index');

// //view layouts

// //Route cấu trúc điều khiển else, if
// Route::get('/child', function(){
//     return view('child', ['name' => 'Nguyễn Hữu Kiên',
//                           'lop' => '<strong>Unitop</strong>',
//                           'number' => 5,
//                           'post_title' => '<strong>Khóa học laravel tại untiop</strong>'
//                 ]);
// });

// //Route vòng lặp for 
// Route::get('for', function(){
//     return view('for', ['n' => 20]);
// });

// //Route vòng lặp foreach
// Route::get('foreach', function(){
//     $users = array(
//         1 => array(
//             'name' => 'Nguyen Huu Kien'
//         ),
//         2 => array(
//             'name' => 'Nguyen Huu Duc'
//         ),
//         3 => array(
//             'name' => 'Nguyen Huu Hieu'
//         ),
//     );

//     return view('foreach', compact('users'));
// });


//Insert dữ liệu qua Route

// Route::get('/user/insert', function(){
//     DB::table('users')->insert(
//         ['name' => 'Nguyễn Hữu Hieu', 'email' => 'hieungueyn@gmail.com', 'password' => bcrypt('213awer')]
//     );
// });

// //Insert dữ liệu qua Controller -> CategoryController

// Route::get('/category/add', 'CategoryController@add');
// Route::get('/category/show', 'CategoryController@show');


// Route::get('/category/update/{id}', 'CategoryController@update');
// Route::get('/category/delete/{id}', 'CategoryController@delete');


// //Bài tập Database: Query Builder
// Route::get('admin/product/add', 'AdminProductController@add');
// Route::get('admin/product/update/{id}', 'AdminProductController@update');
// Route::get('admin/product/show', 'AdminProductController@show');
// Route::get('admin/product/delete/{id}', 'AdminProductController@delete');


//ELOQUENT ORM
// Route::get('posts/read', function(){
//     $posts = Post::all();
//     return $posts;
// });

// Route::get('posts/read', 'PostController@read');
// Route::get('posts/read/restore/{id}', 'PostController@restore');

// Route::get('posts/read/permanentlyDelete/{id}', 'PostController@permanentlyDelete');

// Route::get('role/show', 'RoleController@show');

//FORM
Route::get('post/add', 'PostController@add')->name('post.add');
Route::post('post/store', 'PostController@store')->name('post.store');   
Route::get('post/show', 'PostController@show')->name('post.show');

Route::get('user/regit','UserController@regit')->name('user.regit');
Route::post('user/store', 'UserController@store')->name('user.store');
Route::get('user/show', 'UserController@show')->name('user.show');


//Helper URL
Route::get('helper/url', 'HelperController@url');

//Helper string
Route::get('helper/string', 'HelperController@string');

//Session
Route::get('session/add', 'SessionController@add');
Route::get('session/show', 'SessionController@show');

//Flash Session
Route::get('session/flash', 'SessionController@add_flash');

//Delete Session
Route::get('session/delete', 'SessionController@delete');

//Cookie
Route::get('cookie/set', 'CookieController@set');
Route::get('cookie/get', 'CookieController@get');



