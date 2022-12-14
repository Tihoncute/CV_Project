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
                            <a class="nav-link" href="#">Vi???c L??m IT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tin T???c</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                T???i sao n??n l??m ??? JobKing
                            </a>
                            <div class="dropdown-menu tdropdown" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">C??u chuy???n th??nh c??ng</a>
                                <a class="dropdown-item" href="#">T??m ki???m t??i n??ng</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">????nh gi??</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav mr-auto my-2 my-lg-0 tnav-right tn-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i> <span class="hidden-text">T??m ki???m</span></a>
                        <li>
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('????ng xu???t') }}
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
                                <p style="color:white">Nh?? tuy???n d???ng</p>
                            </a>
                        </li>

                        @elseif (Auth::user()->MaVaiTro == 3)
                        <li class="nav-item">
                            <a class="nav-link btn-employers" href="{{url('/infoUV/create')}}" tabindex="-1" aria-disabled="true">
                                <p style="color:white">???ng vi??n</p>
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
                        <a class="nav-link snav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">T??m vi???c l??m</a>
                    </li>
                    <li class="nav-item search-nav-item">
                        <a class="nav-link snav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">T??m c??ng ty</a>
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
                                                <input type="text" class="form-control sinput" placeholder="Nh???p k??? n??ng, c??ng vi???c,...">
                                                <span><i class="fa fa-search"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <select id="computer-languages">
                                                <option value="" selected hidden>T???t c??? ng??n ng???</option>
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
                                                <option value="" selected hidden>T???t c??? ?????a ??i???m</option>
                                                <option>???? N???ng</option>
                                                <option>H?? N???i</option>
                                                <option>H??? Ch?? Minh</option>
                                                <option>Bu??n Ma Thu???t</option>
                                                <option>Quy Nh??n</option>
                                                <option>Nha Trang</option>
                                            </select>
                                            <i class="fa fa-map-marker sfa" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-search col-sm-12">T??m ki???m</button>
                                </div>

                            </div>
                        </form>
                    </div>
           
                    <div class="tab-pane stab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form class="bn-search-form">
                            <div class="row">
                                <div class="col-md-10 col-sm-12">
                                    <div class="input-group s-input-group w-100">
                                        <input type="text" class="form-control sinput" placeholder="Nh???p k??? n??ng, c??ng vi???c,...">
                                        <span><i class="fa fa-search"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-search col-sm-12">T??m ki???m</button>
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
                            <span>Tuy???n g???p</span>
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
                                                <span><i class="fa fa-clock-o" aria-hidden="true"></i> H???n n???p: <strong>{{$vl->Hannop}}</strong></span>
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
                            <span>Ng??nh Ngh???</span>
                        </h2>
                        <div class="catelog-list">
                            <ul>
                                <li>
                                    <a href="#">
                                        <span class="cate-img">
                                            <em>L???p tr??nh vi??n</em>
                                        </span>
                                        <span class="cate-count">(1100)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="cate-img">
                                            <em>Nh??n vi??n ki???m th???</em>
                                        </span>
                                        <span class="cate-count">(230)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="cate-img">
                                            <em>K??? s?? ph???n m???m</em>
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
                        <h3>Nh?? tuy???n d??ng h??ng ?????u</h3>
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
                    T?? v???n ngh??? nghi???p t??? HR Insider
                </div>
                <div class="col-md-4 col-sm-12 col-12 news-item">
                    <div class="news-item-inner">
                        <a href="#wrap">
                            <div class="news-thumb" style="background-image: url(img/news1.jpg);"></div>
                        </a>
                        <div class="news-details">
                            <div class="tags">
                                <a href="#tag1">Quy???n l???i nh??n vi??n</a>
                            </div>
                            <div class="title">
                                <a href="#">
                                    5 th???i ??i???m doanh nghi???p kh??ng ???????c bu???c ng?????i lao ?????ng th??i vi???c
                                </a>
                            </div>
                            <div class="meta">
                                Khi n??o th?? ng?????i s??? d???ng lao ?????ng ???????c quy???n ????n ph????ng ch???m d???t h???p ?????ng khi n??o th?? kh??ng? C??ng tham kh???o b??i vi???t sau ????y ????? hi???u th??m v??? quy???n l???i c???a ng?????i lao ?????ng Vi???t Nam nh??!
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
                                <a href="#tag1">K??? n??ng c??ng s???</a>
                            </div>
                            <div class="title">
                                <a href="#">
                                    C??ch ch???y deadline hi???u qu??? ????? tr??nh "s???p ngu???n" cu???i n??m
                                </a>
                            </div>
                            <div class="meta">
                                Cu???i n??m ???????c xem l?? ???m??a deadline???, ???m??a report??? khi nhi???u doanh nghi???p, c??ng ty ???ch???y n?????c r??t??? c??c
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
                                <a href="#tag1">Hu???n luy???n nh??n s???</a>
                            </div>
                            <div class="title">
                                <a href="#">
                                    ????nh gi??: b?????c ?????m c???n thi???t trong vi???c ????o t???o hu???n luy???n nh??n vi??n
                                </a>
                            </div>
                            <div class="meta">
                                C?? s???c l???m ph??t ????nh tr??? n??m 2022 th???c s??? mang t??nh to??n c???u, v???i h???u h???t c??c qu???c gia ghi nh???n xu h?????ng t??ng gi?? b???t ng??? v?? ho???t ?????ng kinh t??? suy gi???m.
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
                                    <span><i class="fa fa-question-circle pr-2 icsp"></i>H??? tr??? nh?? tuy???n d???ng:</span>
                                </li>
                                <li>
                                    <span><i class="fa fa-phone pr-2 icsp"></i>0123.456.789</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-12 col-12">
                            <div class="newsletter">
                                <span class="txt6">????ng k?? nh???n b???n tin vi???c l??m</span>
                                <div class="input-group frm1">
                                    <input type="text" placeholder="Nh???p email c???a b???n" class="newsletter-email form-control">
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
                                <a target="_blank">Gi???i thi???u</a>
                            </li>
                            <li>
                                <a target="_blank">G??c b??o ch??</a>
                            </li>
                            <li>
                                <a target="_blank">H???i ????p</a>
                            </li>
                            <li>
                                <a target="_blank">Ch??nh s??ch b???o m???t</a>
                            </li>
                            <li>
                                <a target="_blank">??i???u kho???n d???ch v???</a>
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
                                    <i class="fa fa-map-marker fticn "></i> 175 T??y S??n, ?????ng ??a, H?? N???i
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-4 col-12 ">
                        <h2 class="footer-heading ">
                            <span>Ng??n ng??? n???i b???t</span>
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
                            <span>Ng??nh Ngh??? N???i B???t</span>
                        </h2>
                        <ul class="footer-list ">
                            <li><a href="# ">L???p tr??nh vi??n</a></li>
                            <li><a href="# ">Ki???m th??? ph???n m???m</a></li>
                            <li><a href="# ">K??? s?? c???u n???i</a></li>
                            <li><a href="# ">Qu???n l?? d??? ??n</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-6 col-12 ">
                        <h2 class="footer-heading ">
                            <span>T???t c??? h??nh th???c</span>
                        </h2>
                        <ul class="footer-list ">
                            <li><a href="# ">Nh??n vi??n ch??nh th???c</a></li>
                            <li><a href="# ">Nh??n vi??n b??n th???i gian</a></li>
                            <li><a href="# ">Freelancer</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-12 col-12 ">
                        <h2 class="footer-heading ">
                            <span>T???t c??? t???nh th??nh</span>
                        </h2>
                        <ul class="footer-list ">
                            <li><a href="# ">H??? Ch??nh Minh</a></li>
                            <li><a href="# ">H?? N???i</a></li>
                            <li><a href="# ">???? N???ng</a></li>
                            <li><a href="# ">Bu??n Ma Thu???t</a></li>
                            <li><a href="# ">H???i D????ng</a></li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>

        <footer class="container-fluid copyright-wrap ">
            <div class="container copyright ">
                <p class="copyright-content ">
                    Copyright ?? 2022 <a href="# "> King<b>Job</b></a>. All Right Reserved.
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