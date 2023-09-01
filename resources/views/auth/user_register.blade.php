<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main CSS -->
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
        <h1>Sign up</h1>
        <div class="container">
            <div class="sign-up-content">
                <form class="signup-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <h2 class="form-title">Sign-Up Here</h2>

                    <div class="form-textbox">
                        <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" Placeholder="Name">
                        @error('name')
                        <div class="error-message">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <br>

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
                        <input type="text" id="phonenumber" name="phonenumber" value="{{ old('phonenumber') }}" class="form-control @error('phonenumber') is-invalid @enderror" Placeholder="Phn_number">
                        @error('phonenumber')
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
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" Placeholder="Confirm_Password">
                    </div>
                    <br>

                    <div class="form-textbox">
                        <button type="submit" name="submit" id="submit" class="submit" value="Create account">Register</button>
                    </div>
                </form>

                <p class="loginhere">
                    Already have an account? <a href="{{ route('login') }}" class="loginhere-link">Log in</a>
                </p>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
