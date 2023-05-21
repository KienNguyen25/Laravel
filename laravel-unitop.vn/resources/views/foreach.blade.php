<!-- Vòng lặp foreach -->
@foreach($users as $user)
     <p>{{$user['name']}}</p>
@endforeach


<!-- chèn câu lệnh php -->
<!-- @php
  foreach($users as $user){
     echo $user['name'], '<br>';
  }
@endphp -->

<!-- include gọi thêm view vào 1 view sẵn có -->
@include('inc.comment', ['title' => 'Comment bài viết'])
