<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel='shortcut icon' href='https://bangkeomiennam.com/icon-01.png'>
    <title>Đăng Kí-Ứng Viên</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
    <div class="container-fluid login-fluid clear-left clear-right">
        <div class="login-container">

            <div class="login-header">
                <div class="w-login m-auto">
                    <div class="login-logo">
                        <h3>

                            <a href="#">
                                <img src="img/job1-logo.png">
                            </a>
                        </h3>
                        <span class="login-breadcrumb"><em>/</em> Đăng Ký</span>
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

                            <form class="login-form reg-form" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="login-main-header">
                                    <h3>Đăng Ký</h3>
                                </div>
                                <div class="input-div one">
                                    <div class="div lg-lable">
                                        <h5>{{ __('Name') }}<span class="req">*</span></h5>

                                        <input id="name" type="text" class="input form-control-lgin  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="input-div one">
                                    <div class="div lg-lable">
                                        <h5>{{ __('Email Address') }}<span class="req">*</span></h5>
                                        <input id="email" type="email" class="input form-control-lgin @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="input-div one">
                                    <div class="div lg-lable">
                                        <h5>{{ __('Password') }}<span class="req">*</span></h5>
                                        <input id="password" type="password" class="input form-control-lgin @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        
                                    </div>
                                    <div class="div lg-lable">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="input-div one">
                                    <div class="div lg-lable">
                                        <h5>{{ __('Confirm Password') }}<span class="req">*</span></h5>

                                        <input id="password-confirm" type="password" class="input form-control-lgin" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="input-div one">
                                    <select style="width: 100%; height: 50px; border-radius: 5px; border: 1px solid #bdbcbc;" class="input form-control-lgin " id="Mavaitro" name="Mavaitro">
                                        <option hidden style="color: #444;">{{ __('Bạn là') }}</option>
                                        <option value="2">Nhà tuyển dụng</option>
                                        <option value="3">Ứng viên</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group d-block frm-text">
                                    @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="fg-login d-inline-block" href="{{ route('login') }}">{{ __('Bạn đã có tài khoản? Đăng Nhập') }}</a>
                                    </li>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary float-right btn-login d-block w-100">
                                    {{ __('Đăng Ký') }}
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