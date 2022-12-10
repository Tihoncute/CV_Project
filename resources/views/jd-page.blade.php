<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel='shortcut icon' href='https://th.bing.com/th/id/OIP.Rrva5io_UsU9Oggz_3YYHwHaHa?pid=ImgDet&rs=1'>
    <title>{{$vieclam->Tieude}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">




    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <link rel="stylesheet" href="{{url('css/select2.min.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" href="{{url('css/owlcarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('css/owlcarousel/owl.theme.default.min.css')}}">
   
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
</head>

<body>

    <div class="container-fluid fluid-nav another-page">
        <div class="container cnt-tnar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light tjnav-bar">
             
                <a href="{{url('/')}}" class="nav-logo">
                    <img src="{{url('img/job1-logo.png')}}">
                </a>
                <button class="navbar-toggler tnavbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   
                    <i class="fa fa-bars icn-res" aria-hidden="true"></i>

                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto tnav-left tn-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Việc Làm IT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tin Tức</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tại sao nên làm ở JobKing
                            </a>
                            <div class="dropdown-menu tdropdown" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Câu chuyện thành công</a>
                                <a class="dropdown-item" href="#">Tìm kiếm tài năng</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Đánh giá</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav mr-auto my-2 my-lg-0 tnav-right tn-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i> <span class="hidden-text">Tìm kiếm</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Đăng xuất') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                VI
                            </a>
                            <div class="dropdown-menu tdropdown" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">English</a>
                            </div>
                        </li>
                        @if (Auth::user()->MaVaiTro == 2)
                        <li class="nav-item">

                            <a class="nav-link btn-employers" href="{{url('/infoNTD/create')}}" tabindex="-1" aria-disabled="true"><p style="color:white">Nhà tuyển dụng</p></a>
                        </li>

                        @elseif (Auth::user()->MaVaiTro == 3)
                        <li class="nav-item">
                            <a class="nav-link btn-employers" href="{{url('/infoUV/create')}}" tabindex="-1" aria-disabled="true"><p style="color:white">Ứng viên</p></a>

                        </li>
                        @endif
                    </ul>
                </div>
            </nav>
        </div>
    </div>


    <div class="clearfix"></div>



    <div class="container-fluid job-detail-wrap">
        <div class="container job-detail">
            <div class="job-detail-header">
                <div class="row">
                    <div class="col-md-2 col-sm-12 col-12">
                        <div class="job-detail-header-logo">
                            <a href="#">
                                <img src="{{URL::to('/img/'.$vieclam->logo)}}" class="job-logo-ima" alt="job-logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-12">
                        <div class="job-detail-header-desc">
                            <div class="job-detail-header-title">
                                <a href="#">{{$vieclam->Tieude}}</a>
                            </div>
                            <div class="job-detail-header-company">
                                <a href="#">{{$vieclam->TenCT}}</a>
                            </div>
                            <div class="job-detail-header-de">
                                <ul>
                                    <li><i class="fa fa-map-marker icn-jd"></i><span>{{$vieclam->Diachi}}</span></li>
                                    <li><i class="fa fa-usd icn-jd"></i><span>{{$vieclam->Mucluong}}</span></li>
                                    <li><i class="fa fa-calendar icn-jd"></i><span>{{$vieclam->Hannop}}</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-12">
                        <div class="jd-header-wrap-right">

                            @if(Auth::user()->MaVaiTro == 2 )
                            @if(Auth::user()->id == $vieclam->MaCT)
                            <div class="jd-center">
                                <a href="/infoVL/edit/{{$vieclam->MaVL}}" class="btn btn-primary btn-apply">Edit</a>
                                <form method="POST" action="/infoVL/delete/{{$vieclam->MaVL}}" onsubmit="return
                                        ConfirmDelete( this )">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                            @endif
                            @elseif(Auth::user()->MaVaiTro == 3)

                            <div class="jd-center">
                                <form action="/infoTD/store" method="post">
                                    @csrf
                                    <input type="text" name="MaUV" value="{{Auth::user()->id}}" hidden>
                                    <input type="text" name="MaVL" value="{{$vieclam->MaVL}}" hidden>
                                    <button type="submit" class="btn btn-success">Apply Now</button>
                                </form>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 

    <div class="clearfix"></div>

 
    <div class="wrapper">
        <div class="container">
            <div class="row">
   
                <div class="col-md-8 col-sm-12 col-12 clear-left">
                    <div class="main-wrapper">

           

                        <h2 class="widget-title">
                            <span>Mô tả công việc</span>
                        </h2>
                        <div class="jd-content">
                            {{$vieclam->Mota}}
                        </div>
                        <h2 class="widget-title">
                            <span>Yêu cầu công việc</span>
                        </h2>
                        <div class="jd-content">
                            {{$vieclam->Yeucau}}
                        </div>

                    </div>




                </div>



                <div class="col-md-4 col-sm-12 col-12 clear-right">
                    <div class="side-bar mb-3">
                        <h2 class="widget-title">
                            <span>Thông tin</span>
                        </h2>

                        <div class="job-info-wrap">
                            <div class="job-info-list">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <span class="ji-title">Nơi làm việc:</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <span class="ji-main">{{$vieclam->Diachi}}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="job-info-list">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <span class="ji-title">Lương:</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <span class="ji-main">{{$vieclam->Mucluong}}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="job-info-list">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <span class="ji-title">Hạn nộp:</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <span class="ji-main">{{$vieclam->Hannop}}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="job-info-list">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <span class="ji-title">Ngành nghề:</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <span class="ji-main">{{$vieclam->Nganhnghe}}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="job-info-list">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <span class="ji-title">Kinh nghiệm:</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <span class="ji-main">{{$vieclam->Kinhnghiem}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="side-bar mb-3">
                        <h2 class="widget-title">
                            <span>Giới thiệu công ty</span>
                        </h2>
                        <div class="company-intro">
                            <a href="#">
                                <img src="{{URL::to('/img/'.$vieclam->logo)}}" class="job-logo-ima" alt="job-logo">
                            </a>
                        </div>
                        <h2 class="company-intro-name">{{$vieclam->TenCT}}</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid job-support-wrapper">
        <div class="container-fluid job-support-wrap">
            <div class="container job-support">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-12">
                        <ul class="spp-list">
                            <li>
                                <span><i class="fa fa-question-circle pr-2 icsp"></i>Hỗ trợ nhà tuyển dụng:</span>
                            </li>
                            <li>
                                <span><i class="fa fa-phone pr-2 icsp"></i>0123.456.789</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-12 col-12">
                        <div class="newsletter">
                            <span class="txt6">Đăng ký nhận bản tin việc làm</span>
                            <div class="input-group frm1">
                                <input type="text" placeholder="Nhập email của bạn" class="newsletter-email form-control">
                                <a href="#" class="input-group-addon"><i class="fa fa-lg fa-envelope-o colorb"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid footer-wrap  clear-left clear-right">
        <div class="container footer">
            <div class="row">
                <div class="col-md-4 col-sm-8 col-12">
                    <h2 class="footer-heading">
                        <span>About</span>
                    </h2>
                    <p class="footer-content">
                        <li>
                            <a target="_blank ">Giới thiệu</a>
                        </li>
                        <li>
                            <a target="_blank ">Góc báo chí</a>
                        </li>
                        <li>
                            <a target="_blank ">Hỏi đáp</a>
                        </li>
                        <li>
                            <a target="_blank ">Chính sách bảo mật</a>
                        </li>
                        <li>
                            <a target="_blank ">Điều khoản dịch vụ</a>
                        </li>
                    </p>
                    <ul class="footer-contact">
                        <li>
                            <a href="#">
                                <i class="fa fa-phone fticn"></i> +123 456 7890
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-envelope fticn"></i> Jobking@gmail.com
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-map-marker fticn"></i> 175 Tây Sơn, Đống Đa, Hà Nội
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-4 col-12">
                    <h2 class="footer-heading">
                        <span>Ngôn ngữ nổi bật</span>
                    </h2>
                    <ul class="footer-list">
                        <li><a href="#">Javascript</a></li>
                        <li><a href="#">Java</a></li>
                        <li><a href="#">Frontend</a></li>
                        <li><a href="#">SQL Server</a></li>
                        <li><a href="# ">C/C++</a></li>
                        <li><a href="#">.NET</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-6 col-12">
                    <h2 class="footer-heading">
                        <span>Ngành Nghề Nổi Bật</span>
                    </h2>
                    <ul class="footer-list">
                        <li><a href="#">Lập trình viên</a></li>
                        <li><a href="#">Kiểm thử phần mềm</a></li>
                        <li><a href="#">Kỹ sư cầu nối</a></li>

                        <li><a href="#">Quản lý dự án</a></li>

                    </ul>
                </div>
                <div class="col-md-2 col-sm-6 col-12">
                    <h2 class="footer-heading">
                        <span>Tất cả hình thức</span>
                    </h2>
                    <ul class="footer-list">
                        <li><a href="#">Nhân viên chính thức</a></li>
                        <li><a href="#">Nhân viên bán thời gian</a></li>
                        <li><a href="#">Freelancer</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-12 col-12">
                    <h2 class="footer-heading">
                        <span>Tất cả tỉnh thành</span>
                    </h2>
                    <ul class="footer-list">
                        <li><a href="#">Hồ Chính Minh</a></li>
                        <li><a href="#">Hà Nội</a></li>
                        <li><a href="#">Đà Nẵng</a></li>
                        <li><a href="#">Buôn Ma Thuột</a></li>
                        <li><a href="# ">Hải Dương</a></li>
                    </ul>
                </div>


            </div>
        </div>
    </div>

    <footer class="container-fluid copyright-wrap">
        <div class="container copyright">
            <p class="copyright-content">
                Copyright © 2022 <a href="#"> Job<b>King</b></a>. All Right Reserved.
            </p>
        </div>
    </footer>


    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{url('js/readmore.js')}}"></script>

    <script src="{{url('js/jquery-3.4.1.slim.min.js')}}"></script>
    <script src="{{url('js/popper.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/select2.min.js')}}"></script>
    <script src="{{url('js/jobdata.js')}}"></script>


    <script src="{{url('js/owlcarousel/owl.carousel.js')}}"></script>



</body>

</html>