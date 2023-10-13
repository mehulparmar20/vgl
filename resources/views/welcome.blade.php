<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div clas="row">
            <div class="col-2"></div>
            <div class="col-8">
    <form action="{{route('custom-login')}}" method="POST" >
        @csrf
        <div class="form-group">
            <h1>Login Form</h1>
        </div>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          {{-- @error('email')
         <div class="text-danger">{{ $message }}</div>
        @enderror --}}
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        {{-- @error('password')
         <div class="text-danger">{{ $message }}</div>
        @enderror --}}
        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember"> Remember Me
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <div class="col-12">
            <div class="text-center">
                <p class="mb-0">Don't have an account yet? 
                     <a class="nav-link" href="{{route('user.register')}}">Sign up here</a>
                </p>
            </div>
        </div>
      </form></div>
      <div class="col-2"></div>
    </div></div>
</body>
</html>