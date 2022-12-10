
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel='shortcut icon' href='https://th.bing.com/th/id/OIP.NZEwAhbO8GFL8OzBJYkmuQHaHa?pid=ImgDet&rs=1'>
    <title>Đăng Nhập/UV - JobKing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">


  
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

 
    <link rel="stylesheet" type="text/css" href="css/style.css">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha256-NuCn4IvuZXdBaFKJOAcsU2Q3ZpwbdFisd5dux4jkQ5w=" crossorigin="anonymous" />

</head>

<body>
    <div class="container-fluid login-fluid clear-left clear-right">
        <div class="login-container">
   
            <div class="login-header">
                <div class="w-login m-auto">
                    <div class="login-logo">
                        <h3>

                            <a href="#">
                                <img src="img/job1-logo.png" alt="JobKing">
                            </a>
                        </h3>
                        <span class="login-breadcrumb"><em>/</em> Đăng Nhập</span>
                    </div>

                </div>
            </div>
        

            <div class="clearfix"></div>

            <div class="padding-top-90"></div>

            
            <div class="login-main">
                <div class="w-login m-auto">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-12 login-main-left">
                            <img src="img/banner-login.png">
                        </div>
                  
                        <div class="col-md-6 col-sm-12 col-12 login-main-right">

                            <form class="login-form" method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="login-main-header">
                                    <h3>Đăng Nhập</h3>
                                </div>
                                <div class="input-div one">
                                    <div class="div lg-lable">
                                        <h5>{{ __('Email') }}</h5>
                                        <input id="email" type="email" class="input form-control-lgin  @error('email') is-invalid @enderror" name="email" value="" required>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="input-div pass">
                                    <div class="div lg-lable">
                                        <h5 for="password">{{ __('Password') }}</h5>


                                        <input id="password" type="password" class="input form-control-lgin  @error('password') is-invalid @enderror" name="password" required>

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="form-group d-block frm-text">

                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link fg-login d-inline-block" href="{{ route('password.request') }}">
                                        {{ __('Quên mật khẩu?') }}
                                    </a>
                                    @endif
                                    @if (Route::has('register'))

                                    <a class="btn btn-link fg-login float-right d-inline-block" href="{{ route('register') }}">{{ __('Bạn chưa có tài khoản? Đăng ký') }}</a>

                            @endif

                                </div>

                                <button type="submit" class="btn btn-primary float-right btn-login d-block w-100">
                                    {{ __('Đăng nhập') }}
                                </button>
                                

                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
   
        </div>
    </div>
    <footer class="login-footer">
        <div class="w-login m-auto">
            <div class="row">
               
                <div class="col-md-6 col-sm-12 col-12 login-footer-left">
                    <div class="login-copyright">
                        <p>Copyright © 2022 <a href="#"> JobKing</a>. All Rights Reserved.</p>
                    </div>
                </div>
         
                <div class="col-md-6 col-sm-12 col-12 login-footer-right">
                    <ul>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>