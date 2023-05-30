<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//
// Route::get('admin/{age}', function(){
//     return view('checkAge');
// })->middleware('CheckAge');

//
// Route::get('admin/{age}', 'AdminController@index');
// Route::get('admin/show/{age}', 'AdminController@show');

Route::get('admin/dashboard', 'AdminController@dashboard')->middleware('CheckRole');

//C1: auth
// Route::get('admin/dashboard', 'AdminController@dashboard')->middleware('auth','CheckRole');
//C2: 
Route::middleware('auth')->group(function (){
    Route::get('admin/dashboard', 'AdminController@dashboard');
    //danh sách các route 
});

