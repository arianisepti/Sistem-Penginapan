<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
    
</head>
<body>

    <!----------------------- Main Container -------------------------->

     <div class="container d-flex justify-content-center align-items-center min-vh-100">

    <!----------------------- Login Container -------------------------->

       <div class="row border rounded-5 p-3 shadow box-area" style="background-color : white">

    <!--------------------------- Left Box ----------------------------->

       <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background-image: url('{{asset('Reservasi/img2/Photo/wp1846068.jpg')}}'); background-size: cover; height: 100vh;">
           <img src="{{asset('Reservasi/img2/Font Dan Symbol/p12.png')}}" alt="deskripsi" style="max-width:70%; max-height:60vh; display:block; margin:0 auto;">
           <img src="{{asset('Reservasi/img2/Font Dan Symbol/p1.png')}}" alt="deskripsi" style="max-width:70%; max-height:60vh; display:block; margin:0 auto;">
       </div> 

    <!-------------------- ------ Right Box ---------------------------->

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
        @endif
       <form class="col-md-6 right-box" id="myForm" action="" method="post">
        @csrf
          <div class="row align-items-center">
                <div class="header-text mb-4">
                     <p>Enjoy All Our Facility</p>
                </div>
                <div class="input-group mb-3">
                    <input type="email" value="{{ old('email') }}" class="form-control form-control-lg bg-light fs-6" id="email" name="email" placeholder="Email">
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" id="password" name="password" placeholder="Password">
                </div>
                <label class="mb-1">Position:
                <div>
                    <select class="form-control form-control-lg bg-light fs-6" id="role" name="role" >
                        <option value="client">Client</option>
                        <option value="company">Company</option>
                    </select>
                </div>
               </label>
                <div class="input-group mb-5 d-flex justify-content-between">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="formCheck">
                        <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                    </div>
                    <div class="forgot">
                        <small><a href="#">Forgot Password?</a></small>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <button class="btn btn-lg btn-primary w-100 fs-6"type="submit" name="login">Login</button>
                </div>
                <div class="input-group mb-3">
                    <button class="btn btn-lg btn-light w-100 fs-6"><img src="{{asset('Reservasi/img2/Logo/google.png')}}" style="width:20px" class="me-2"><small>Sign In with Google</small></button>
                </div>
                <div class="row">
                    <small>Don't have account? <a href="register.php">Sign Up</a></small>
                </div>
          </div>
       </form> 

      </div>
    </div>

</body>