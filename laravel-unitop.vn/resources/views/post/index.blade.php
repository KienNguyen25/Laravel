<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>

</head>
<body>
  <form action="{{route('post.show')}}" method="POST" enctype="multipart/form-data">
  <div class="container">
   <h1>Trang bài viết</h1>
   @if(session('status'))
           <div class="alert alert-success">
                 {{session('status')}}
           </div>
    @endif
 <ul>
        @foreach($posts as $post)
            <li>
                <a href="">{{$post->title}}</a><br>
               <img style="width: 400px " src="{{url($post->thumbnail)}}" alt=""><br> 
                <img style="width: 400px " src="#" alt=""><br>
                <p>{{$post->content}}</p>
            </li>
        @endforeach
 </ul>
   {{$posts->links()}}

   </div>
  </form>
 

</body>
</html>