<!-- khai báo lấy nội dung từ cha -->
@extends('layouts.app')

@section('title', 'kien dep trai')

@section('content')
<!-- Truyền dữ liệu data qua định dạng html -->
   <p><strong>Học laravel tại: {!!$lop!!}</strong></p>
   <!-- truyền dữ liệu  data  -->
   <p>Họ và tên: {{$name}}</p>
     
  <!-- Câu điều kiện if -->
   @if ($number % 2 == 0)
        <p>{{$number}} là số chẵn</p>
    @else 
        <p>{{$number}} là số lẻ</p>
    @endif

      <!-- Câu lệnh kiểm tra isset -->
    @isset($post_title)
       <p>Tiêu đề: {!!$post_title!!}</p>
    @endisset

    <!-- empty để kiểm tra xem một biến hoặc một mảng có rỗng hay không. -->
    @empty($users)
       <p> Không có Users nào khi dùng lệnh empty</p>
    @endempty
@endsection

@section('sidebar')
    <!--@parent lấy nội dung từ layouts cha -->
    @parent
    <p>noi dung sidebar </p>

@endsection