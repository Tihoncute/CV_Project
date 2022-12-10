<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel='shortcut icon' href='https://th.bing.com/th/id/OIP.cyMGFBE6PYrvrrFG-ThjWAHaGL?pid=ImgDet&rs=1'>
    <title>Jobking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">



 
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="css/select2.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  
    <link rel="stylesheet" href="css/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owlcarousel/owl.theme.default.min.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  
    <div class="container-fluid fluid-nav">
        <div class="container cnt-tnar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light tjnav-bar">
           
                <a href="{{url('/')}}" class="nav-logo">
                    <img src="{{url('img/job-logo.png')}}">
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
                        <li>
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Đăng xuất') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>

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

                            <a class="nav-link btn-employers" href="{{url('/infoNTD/create')}}" tabindex="-1" aria-disabled="true">
                                <p style="color:white">Nhà tuyển dụng</p>
                            </a>
                        </li>

                        @elseif (Auth::user()->MaVaiTro == 3)
                        <li class="nav-item">
                            <a class="nav-link btn-employers" href="{{url('/infoUV/create')}}" tabindex="-1" aria-disabled="true">
                                <p style="color:white">Ứng viên</p>
                            </a>

                        </li>
                        @endif
                    </ul>
                </div>
            </nav>
        </div>
    </div>
   

    <div class="clearfix"></div>

 
    <div class="container-fluid clear-left clear-right">
        <div class="main-banner">
            <div class="banner-image">
                <img src="{{url('img/ban.jpg')}}" alt="banner-image">
            </div>
        </div>
        <div class="banner-content">
            <h3>1000 jobs for IT students</h3>
            <div class="banner-tags">
                <ul>
                    <li><a href="#">Java</a></li>
                    <li><a href="#">Python</a></li>
                    <li><a href="#">Tester</a></li>
                    <li><a href="#">QA QC</a></li>
                    <li><a href="#">C/C++</a></li>
                    <li><a href="#">Javascript</a></li>
                    <li><a href="#">Business Analyst</a></li>
                    <li><a href="#">Designer</a></li>
                </ul>
            </div>
        </div>
    </div>
   

   
    <div class="container-fluid search-fluid">
        <div class="container">
            <div class="search-wrapper" style="margin-top: -11rem;">

                <ul class="nav nav-tabs search-nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item search-nav-item">
                        <a class="nav-link snav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tìm việc làm</a>
                    </li>
                    <li class="nav-item search-nav-item">
                        <a class="nav-link snav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tìm công ty</a>
                    </li>
                </ul>
                <div class="tab-content search-tab-content" id="myTabContent">
                  
                    <div class="tab-pane stab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <form class="bn-search-form">
                            <div class="row">
                                <div class="col-md-10 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="input-group s-input-group">
                                                <input type="text" class="form-control sinput" placeholder="Nhập kỹ năng, công việc,...">
                                                <span><i class="fa fa-search"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <select id="computer-languages">
                                                <option value="" selected hidden>Tất cả ngôn ngữ</option>
                                                <option>Java</option>
                                                <option>.NET</option>
                                                <option>Javascript</option>
                                                <option>Php</option>
                                                <option>Python</option>
                                                <option>QC QC</option>
                                                <option>Business Analyst</option>
                                                <option>Tester</option>
                                                <option>Ruby</option>
                                            </select>
                                            <i class="fa fa-code sfa" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-md-3">
                                            <select id="s-provinces">
                                                <option value="" selected hidden>Tất cả địa điểm</option>
                                                <option>Đà Nẵng</option>
                                                <option>Hà Nội</option>
                                                <option>Hồ Chí Minh</option>
                                                <option>Buôn Ma Thuột</option>
                                                <option>Quy Nhơn</option>
                                                <option>Nha Trang</option>
                                            </select>
                                            <i class="fa fa-map-marker sfa" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-search col-sm-12">Tìm kiếm</button>
                                </div>

                            </div>
                        </form>
                    </div>
           
                    <div class="tab-pane stab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form class="bn-search-form">
                            <div class="row">
                                <div class="col-md-10 col-sm-12">
                                    <div class="input-group s-input-group w-100">
                                        <input type="text" class="form-control sinput" placeholder="Nhập kỹ năng, công việc,...">
                                        <span><i class="fa fa-search"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-search col-sm-12">Tìm kiếm</button>
                                </div>
                            </div>
                        </form>
                    </div>
             
                </div>

            </div>
        </div>
    </div>
    <!-- (end) search section -->

    <!-- job board & sidebar section  -->
    <div class="container-fluid jb-wrapper">
        <div class="container">
            <div class="row">
                <!-- job board -->
                <div class="col-md-8 col-sm-12 col-12">
                    <div class="job-board-wrap">
                        <h2 class="widget-title">
                            <span>Tuyển gấp</span>
                        </h2>

                        <div class="job-group">
                            @foreach ($vieclam as $vl)
                            <div class="job pagi">
                                <div class="job-content">
                                    <div class="job-logo">
                                        <a href="/VLChitiet/{{$vl->MaVL}}">
                                            <img src="{{URL::to('/img/'.$vl->logo)}}" class="job-logo-ima" alt="job-logo">
                                        </a>
                                    </div>

                                    <div class="job-desc">
                                        <div class="job-title">
                                            <a href="/VLChitiet/{{$vl->MaVL}}">{{$vl->Tieude}}</a>
                                        </div>
                                        <div class="job-company">
                                            {{$vl->Nganhnghe}} | <a href="#" class="job-address"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                {{$vl->Diachi}}</a>
                                        </div>

                                        <div class="job-inf">
                                            <div class="job-main-skill">
                                                <i class="fa fa-code" aria-hidden="true"></i> <a href="#"> Java</a>
                                            </div>
                                            <div class="job-salary">
                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                <span class="salary-min">{{$vl->Mucluong}}</span>
                                            </div>
                                            <div class="job-deadline">
                                                <span><i class="fa fa-clock-o" aria-hidden="true"></i> Hạn nộp: <strong>{{$vl->Hannop}}</strong></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrap-btn-appl">
                                        @if(Auth::user()->MaVaiTro == 2 )
                                        @if(Auth::user()->id == $vl->MaCT)
                                        <a href="/infoVL/edit/{{$vl->MaVL}}" class="btn btn-appl">Edit</a>

                                        <form method="POST" action="/infoVL/delete/{{$vl->MaVL}}" onsubmit="return
                                        ConfirmDelete( this )">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        @endif
                                        @elseif(Auth::user()->MaVaiTro == 3)


                                        <form action="/infoTD/store" method="post">
                                            @csrf
                                            <input type="text" name="MaUV" value="{{Auth::user()->id}}" hidden>
                                            <input type="text" name="MaVL" value="{{$vl->MaVL}}" hidden>
                                            <button type="submit" class="btn btn-success">Apply Now</button>
                                        </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>

      
                <div class="col-md-4 col-sm-12 col-12 clear-left">
                    <div class="job-sidebar">
                        <h2 class="widget-title">
                            <span>Ngành Nghề</span>
                        </h2>
                        <div class="catelog-list">
                            <ul>
                                <li>
                                    <a href="#">
                                        <span class="cate-img">
                                            <em>Lập trình viên</em>
                                        </span>
                                        <span class="cate-count">(1100)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="cate-img">
                                            <em>Nhân viên kiểm thử</em>
                                        </span>
                                        <span class="cate-count">(230)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="cate-img">
                                            <em>Kỹ sư phần mềm</em>
                                        </span>
                                        <span class="cate-count">(110)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="cate-img">
                                            <em>Designer</em>
                                        </span>
                                        <span class="cate-count">(2300)</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="job-sidebar">
                        <div class="sb-banner">
                            <img src="{{url('img/ads1.jpg')}}" class="advertisement">
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>







    <div class="clearfix"></div>


    <div class="container-fluid">
        <div class="container top-employer">
            <div class="row">
                <div class="col-md-12 top-employer-contain">
                    <div class="header">
                        <h3>Nhà tuyển dùng hàng đầu</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-12 top-employer-wrap">
                            <div class="top-employer-item">
                                <a href="#">
                                    <div class="emp-img-thumb">
                                        <img src="{{url('img/fpt-logo.png')}}">
                                    </div>
                                    <h3 class="company">FPT Software</h3>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12 top-employer-wrap">
                            <div class="top-employer-item">
                                <a href="#">
                                    <div class="emp-img-thumb">
                                        <img src="{{url('img/nvg-logo.png')}}">
                                    </div>
                                    <h3 class="company">mgm technology</h3>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12 top-employer-wrap">
                            <div class="top-employer-item">
                                <a href="#">
                                    <div class="emp-img-thumb">
                                        <img src="{{url('img/alipay-logo.png')}}">
                                    </div>
                                    <h3 class="company">ALIPAY Software</h3>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12 top-employer-wrap">
                            <div class="top-employer-item">
                                <a href="#">
                                    <div class="emp-img-thumb">
                                        <img src="{{url('img/luxoft-vietnam-logo.png')}}">
                                    </div>
                                    <h3 class="company">Luxoft Software</h3>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12 top-employer-wrap">
                            <div class="top-employer-item">
                                <a href="#">
                                    <div class="emp-img-thumb">
                                        <img src="{{url('img/techcombank-logo.png')}}">
                                    </div>
                                    <h3 class="company">Techcombank</h3>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12 top-employer-wrap">
                            <div class="top-employer-item">
                                <a href="#">
                                    <div class="emp-img-thumb">
                                        <img src="{{url('img/home-credit.png')}}">
                                    </div>
                                    <h3 class="company">Home Credit</h3>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12 top-employer-wrap">
                            <div class="top-employer-item">
                                <a href="#">
                                    <div class="emp-img-thumb">
                                        <img src="{{url('img/grab-vietnam.png')}}">
                                    </div>
                                    <h3 class="company">Grab (Vietnam) Ltd.</h3>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12 top-employer-wrap">
                            <div class="top-employer-item">
                                <a href="#">
                                    <div class="emp-img-thumb">
                                        <img src="{{url('img/HINH.png')}}">
                                    </div>
                                    <h3 class="company">Techbase Vietnam</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="clearfix"></div>





    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="home-ads">
                        <a href="https://www.fb88big.com/vi-VN/Account/Register">
                            <img src="img/fb88.gif">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="home-ads">
                        <a href="#">
                            <img src="{{url('img/hna2.jpg')}}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="container-fluid">
        <div class="container news-wrapper">
            <div class="row">
                <div class="col-md-12 news-wrapper-head">
                    Tư vấn nghề nghiệp từ HR Insider
                </div>
                <div class="col-md-4 col-sm-12 col-12 news-item">
                    <div class="news-item-inner">
                        <a href="#wrap">
                            <div class="news-thumb" style="background-image: url(img/news1.jpg);"></div>
                        </a>
                        <div class="news-details">
                            <div class="tags">
                                <a href="#tag1">Quyền lợi nhân viên</a>
                            </div>
                            <div class="title">
                                <a href="#">
                                    5 thời điểm doanh nghiệp không được buộc người lao động thôi việc
                                </a>
                            </div>
                            <div class="meta">
                                Khi nào thì người sử dụng lao động được quyền đơn phương chấm dứt hợp đồng khi nào thì không? Cùng tham khảo bài viết sau đây để hiểu thêm về quyền lợi của người lao động Việt Nam nhé!
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-12 news-item">
                    <div class="news-item-inner">
                        <a href="#wrap">
                            <div class="news-thumb" style="background-image: url(img/news3.jpg);"></div>
                        </a>
                        <div class="news-details">
                            <div class="tags">
                                <a href="#tag1">Kỹ năng công sở</a>
                            </div>
                            <div class="title">
                                <a href="#">
                                    Cách chạy deadline hiệu quả để tránh "sập nguồn" cuối năm
                                </a>
                            </div>
                            <div class="meta">
                                Cuối năm được xem là “mùa deadline”, “mùa report” khi nhiều doanh nghiệp, công ty “chạy nước rút” các
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-12 news-item">
                    <div class="news-item-inner">
                        <a href="#wrap">
                            <div class="news-thumb" style="background-image: url(img/ok.jpg);"></div>
                        </a>
                        <div class="news-details">
                            <div class="tags">
                                <a href="#tag1">Huấn luyện nhân sự</a>
                            </div>
                            <div class="title">
                                <a href="#">
                                    Đánh giá: bước đệm cần thiết trong việc đào tạo huấn luyện nhân viên
                                </a>
                            </div>
                            <div class="meta">
                                Cú sốc lạm phát đình trệ năm 2022 thực sự mang tính toàn cầu, với hầu hết các quốc gia ghi nhận xu hướng tăng giá bất ngờ và hoạt động kinh tế suy giảm.
                            </div>

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
                                <a target="_blank">Giới thiệu</a>
                            </li>
                            <li>
                                <a target="_blank">Góc báo chí</a>
                            </li>
                            <li>
                                <a target="_blank">Hỏi đáp</a>
                            </li>
                            <li>
                                <a target="_blank">Chính sách bảo mật</a>
                            </li>
                            <li>
                                <a target="_blank">Điều khoản dịch vụ</a>
                            </li>

                        </p>
                        <ul class="footer-contact ">
                            <li>
                                <a href="# ">
                                    <i class="fa fa-phone fticn "></i> +123 456 7890
                                </a>
                            </li>
                            <li>
                                <a href="# ">
                                    <i class="fa fa-envelope fticn "></i>Jobking@gmail.com
                                </a>
                            </li>
                            <li>
                                <a href="# ">
                                    <i class="fa fa-map-marker fticn "></i> 175 Tây Sơn, Đống Đa, Hà Nội
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-4 col-12 ">
                        <h2 class="footer-heading ">
                            <span>Ngôn ngữ nổi bật</span>
                        </h2>
                        <ul class="footer-list ">
                            <li><a href="# ">Javascript</a></li>
                            <li><a href="# ">Java</a></li>
                            <li><a href="# ">Front-end</a></li>
                            <li><a href="# ">SQL Server</a></li>
                            <li><a href="# ">C/C++</a></li>
                            <li><a href="# ">Back-end</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-6 col-12 ">
                        <h2 class="footer-heading ">
                            <span>Ngành Nghề Nổi Bật</span>
                        </h2>
                        <ul class="footer-list ">
                            <li><a href="# ">Lập trình viên</a></li>
                            <li><a href="# ">Kiểm thử phần mềm</a></li>
                            <li><a href="# ">Kỹ sư cầu nối</a></li>
                            <li><a href="# ">Quản lý dự án</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-6 col-12 ">
                        <h2 class="footer-heading ">
                            <span>Tất cả hình thức</span>
                        </h2>
                        <ul class="footer-list ">
                            <li><a href="# ">Nhân viên chính thức</a></li>
                            <li><a href="# ">Nhân viên bán thời gian</a></li>
                            <li><a href="# ">Freelancer</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-12 col-12 ">
                        <h2 class="footer-heading ">
                            <span>Tất cả tỉnh thành</span>
                        </h2>
                        <ul class="footer-list ">
                            <li><a href="# ">Hồ Chính Minh</a></li>
                            <li><a href="# ">Hà Nội</a></li>
                            <li><a href="# ">Đà Nẵng</a></li>
                            <li><a href="# ">Buôn Ma Thuột</a></li>
                            <li><a href="# ">Hải Dương</a></li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>

        <footer class="container-fluid copyright-wrap ">
            <div class="container copyright ">
                <p class="copyright-content ">
                    Copyright © 2022 <a href="# "> King<b>Job</b></a>. All Right Reserved.
                </p>
            </div>
        </footer>




        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js "></script>
        <script type="text/javascript " src="{{url('js/readmore.js')}} "></script>


        <script src="{{url('js/jquery-3.4.1.slim.min.js')}} "></script>
        <script src="{{url('js/popper.min.js')}} "></script>
        <script src="{{url('js/bootstrap.min.js')}} "></script>
        <script src="{{url('js/select2.min.js')}} "></script>
        <script src="{{url('js/jobdata.js ')}}"></script>


        <script src="{{url('js/owlcarousel/owl.carousel.js')}} "></script>




</body>

</html>