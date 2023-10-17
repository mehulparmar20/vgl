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
        <div class="row">
            <h1>Registration Form</h1>
            <div class="col-2"></div>
    <form class="row " action="{{ route('custom-register') }}"  method="POST">
        @csrf
        
        <div class="col-8">
           <br> <label for="inputUsername" class="form-label">First name</label>
            <input type="text" placeholder="first_name" class="form-control" name="first_name" required >
        </div>
        <div class="col-8">
           <br> <label for="inputUsername" class="form-label">Last name</label>
            <input type="text" placeholder="Last Name" class="form-control" name="last_name" required >
        </div><br><br>
        <div class="col-8">
           <br> <label class="form-label">Mobile</label>
            <input type="phone" placeholder="Mobile No." class="form-control" name="contact_no" minLength='10' maxLength='15' required >
        </div><br><br>
        <div class="col-8">
            <br><label for="inputEmailAddress" class="form-label">Email Address</label>
            <input type="text" placeholder="Email" class="form-control"  name="email" required >
        </div><br><br>
        <div class="col-8">
          <br> 
            <label for="password" class="form-label">Password</label>
            {{-- <div class="input-group" id="show_hide_password"> --}}
                <input type="password" placeholder="Password" id="admin_password2" class="form-control"  name="password" required>
            </div>
        {{-- </div> --}}
        <div class="col-8">
            <br><label for="user_type" class="form-label">User Type</label>
            <input type="text" placeholder="Email" class="form-control"  name="user_type" required >
        </div><br><br>
        <div class="col-8">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                <label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms & Conditions</label>
            </div>
        </div><br><br>
        <div class="col-8">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div><br>
        <div class="col-8">
            <div class="text-center ">
                <p class="mb-0">Already have an account? <a href="{{route('login')}}">
                    Sign in here</a></p>
            </div>
        </div>
        
    </form>
       
    </div><div class="col-2"></div>
</body>
</html>  