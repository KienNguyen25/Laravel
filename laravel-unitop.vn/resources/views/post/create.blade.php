<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
      <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
         @csrf 
         <h1>Thêm bài viết</h1>
    
         @if($errors->any())
            <!-- Đang gặp lỗi -->
            <div class="alert alert-danger">
               <ul>
                  @foreach($errors->all() as $error)
                      <li>{{$error}}</li>
                  @endforeach
               </ul>
            </div>
         @endif
          <div class="form-group">
            <input name= 'title' type="text" class="form-control" placeholder="Tiêu đề">
            @error('title')
              <small class='form-text text-danger'>{{$message}}</small>
            @enderror
          </div>
          <div class="form-group">
            <textarea name="content" class="form-control" id="" cols="30" rows="10" placeholder="Nhập content"></textarea>
            @error('content')
               <small class="form-text text-danger">{{$message}}</small>
            @enderror
          </div>
          <div class="form-group">
           <input class="form-control-file" type="file" name="file">
          </div>
          <div class="form-group">
            <button class="btn btn-success" type = 'submit'>Tạo</button>
          </div>
      </form>
     
    <!-- <h1>Thêm bài viết</h1>
    {!! Form::open(['url' => 'post/store', 'method' => 'GET'])!!}
    <div class="form-group">
        {!! Form::text( 'title', '',['class' => 'form-control', 'placeholder' => 'Tiêu đề']) !!}
    </div>
    <div class="form-group">
        {!! Form::textarea('content', '', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Thêm mới', ['name' => 'sm-add', 'class' => 'btn btn-success']) !!}
    </div>

    {!! Form::close() !!} -->
   
    </div>

</body>
</html>
