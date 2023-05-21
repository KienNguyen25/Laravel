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
    <!-- <h1>Đăng kí</h1>
    {!! Form::open(['url' => 'user/store', 'method' => 'POST']) !!}
    <div class="form-group">
        {!! Form::label('username', 'Tên đăng nhập') !!}
        {!! Form::text( 'username', '',['class' => 'form-control', 'placeholder' => 'Điền tên đăng nhập']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Mật khẩu') !!}
        {!! Form::password( 'password', ['class' => 'form-control', 'placeholder' => 'Điền mật khẩu']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}l 
        {!! Form::email( 'email', '' , ['class' => 'form-control', 'placeholder' => 'Điền email']) !!}
    </div>

        <div class="form-group">
        {!! Form::label('city', 'Thành phố') !!}
        {!! Form::select('city', [0 => 'Chọn thành phố bạn đang sống', 1 => 'Hà Nội', 2=> 'TP.HCM', 3 => 'Đà Nẵng'] ,'0', ['class' => 'form-control']) !!}
    </div>
       
    <div class="form-group">
        {!!Form::label('gender', 'Giới tính')!!}
        <div class="form-check">
            {!!Form::radio('gender', 'male', '', ['class'=>'form-check-input', 'id'=>'male'])!!}
            {!!Form::label('male', 'Nam', ['class'=>'form-check-label'])!!}
        </div>
          <div class="form-check">
            {!!Form::radio('gender', 'female', '', ['class'=>'form-check-input', 'id'=>'female'])!!}
            {!!Form::label('female', 'Nữ', ['class'=>'form-check-label'])!!}
        </div>
            <div class="form-check">
            {!!Form::radio('gender', 'khac', '', ['class'=>'form-check-input', 'id'=>'khac'])!!}
            {!!Form::label('khac', 'Khác', ['class'=>'form-check-label'])!!}
        </div>
    </div>

    <div class="form-group">
        {!!Form::label('skills', 'Kỹ năng')!!}
        <div class="form-check">
            {!!Form::checkbox('skills', 'php', '', ['class'=>'form-check-input', 'id' => 'php'])!!}
            {!!Form::label('php', 'PHP', ['class'=>'form-check-label'])!!}
        </div>
           <div class="form-check">
            {!!Form::checkbox('skills', 'py', '', ['class'=>'form-check-input', 'id' => 'py'])!!}
            {!!Form::label('py', 'Python', ['class'=>'form-check-label'])!!}
        </div>
           <div class="form-check">
            {!!Form::checkbox('skills', 'jav', '', ['class'=>'form-check-input', 'id' => 'jav'])!!}
            {!!Form::label('jav', 'JaVa', ['class'=>'form-check-label'])!!}
        </div>
    </div>

    <div class="form-group">
        {!!Form::label('birth', 'Ngày sinh')!!}
        {!!Form::date('birth', '', ['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
    {!!Form::label('intro', 'Giới thiệu bản thân')!!}
    {!!Form::textarea('intro','',['class'=>'form-control', 'id'=>'intro'])!!}

    </div>
   
    <div class="form-group">
        {!! Form::submit('Đăng kí', ['name' => 'sm-regit', 'class' => 'btn btn-success']) !!}
    </div>

    {!! Form::close() !!} -->

    <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
    @csrf    
    <h1>Đăng kí</h1>
    <!-- Hiển thị danh sách thông báo lỗi -->
            @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
        <div class="form-group">
            <label for="urn">Tên đăng nhập</label>
            <input type="text" name="username" class="form-control" id="urn">
            @error('username')
              <small class='form-text text-danger'>{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="psw">Mật khẩu</label>
            <input type="password" name="psw" class="form-control" id="psw">
            @error('psw')
              <small class='form-text text-danger'>{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="mail">Email</label>
            <input type="email" name="mail" class="form-control" id="mail">
            @error('mail')
              <small class='form-text text-danger'>{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="city">Thành Phố</label>
            <select name="city" id="city" class="form-control">
                <option value="">Chọn Thành Phố</option>
                <option value="hanoi">Hà Nội</option>
                <option value="hcm">TP.HCM</option>
                <option value="da_nang">Đà Nẵng</option>
                <option value="hai_phong">Hải Phòng</option>
                </select>
                @error('city')
              <small class='form-text text-danger'>{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <h3>Giới tính</h3>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="male">
                <label class="form-check-label" for="male">Nam</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="female">
                <label class="form-check-label" for="female">Nữ</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="khac">
                <label class="form-check-label" for="khac">Khác</label>
            </div>
            @error('gender')
              <small class='form-text text-danger'>{{$message}}</small>
            @enderror
        </div>

        <div class="form-group">
            <h3>Ngôn ngữ bạn đã học</h3>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="skills" id="php" >
                <label class="form-check-label" for="php">PHP</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="skills" id="jvs" >
                <label class="form-check-label" for="jvs">Javascript</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="skills" id="py" >
                <label class="form-check-label" for="py">Python</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="skills" id="c" >
                <label class="form-check-label" for="c">C++</label>
            </div>
            @error('skills')
              <small class='form-text text-danger'>{{$message}}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="birth"><b>Ngày sinh</b></label>
            <input type="date" class="form-control" name="birth" id="birth">
            @error('birth')
              <small class='form-text text-danger'>{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="intro">Giới thiệu bản thân</label>
            <textarea class="form-control" name="intro" id="intro" cols="30" rows="10"></textarea>
            @error('intro')
              <small class='form-text text-danger'>{{$message}}</small>
            @enderror
        </div>

        <div class="form-group">
            <button name="submit" class="btn btn-success">Đăng kí</button>
        </div>

    </form>

   
    </div>

</body>
</html>
