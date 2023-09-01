<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login</title>
   
        <!-- Font Icon -->
        <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">
<style>


.error-message {
    color: red;
    font-size: 14px;
}
    </style>
</head>


<body>
<div class="main">

<div class="container">
    <div class="sign-in-content ">
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                        <br>
                                <form method="POST" action="{{ route('login') }}" class="signup-form">
                                    
                                    @csrf

                                    <h2 class="form-title">Sign-In Here</h2>
       
                                     <div class="form-textbox">
              
                <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" Placeholder="Email">
                @error('email')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                @enderror
            </div>

<br>
                                     <div class="form-textbox">
               
                <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" Placeholder="Password">
                @error('password')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <br>


            <div class="form-textbox">
                <button type="submit"name="submit" id="submit" class="submit" value="login" >Login</button>
            </div>
<br>
                                    
                                </form>

                                <p class="loginhere">
                    Don't have an account?<a href="{{ route('register') }} "class="loginhere-link"> Register</a>
                </p>
                                </div>
        </div>

    </div>

  <!-- JS -->
  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
