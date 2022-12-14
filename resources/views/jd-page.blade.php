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
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('????ng xu???t') }}
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

                            <a class="nav-link btn-employers" href="{{url('/infoNTD/create')}}" tabindex="-1" aria-disabled="true"><p style="color:white">Nh?? tuy???n d???ng</p></a>
                        </li>

                        @elseif (Auth::user()->MaVaiTro == 3)
                        <li class="nav-item">
                            <a class="nav-link btn-employers" href="{{url('/infoUV/create')}}" tabindex="-1" aria-disabled="true"><p style="color:white">???ng vi??n</p></a>

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
                            <span>M?? t??? c??ng vi???c</span>
                        </h2>
                        <div class="jd-content">
                            {{$vieclam->Mota}}
                        </div>
                        <h2 class="widget-title">
                            <span>Y??u c???u c??ng vi???c</span>
                        </h2>
                        <div class="jd-content">
                            {{$vieclam->Yeucau}}
                        </div>

                    </div>




                </div>



                <div class="col-md-4 col-sm-12 col-12 clear-right">
                    <div class="side-bar mb-3">
                        <h2 class="widget-title">
                            <span>Th??ng tin</span>
                        </h2>

                        <div class="job-info-wrap">
                            <div class="job-info-list">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <span class="ji-title">N??i l??m vi???c:</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <span class="ji-main">{{$vieclam->Diachi}}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="job-info-list">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <span class="ji-title">L????ng:</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <span class="ji-main">{{$vieclam->Mucluong}}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="job-info-list">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <span class="ji-title">H???n n???p:</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <span class="ji-main">{{$vieclam->Hannop}}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="job-info-list">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <span class="ji-title">Ng??nh ngh???:</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <span class="ji-main">{{$vieclam->Nganhnghe}}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="job-info-list">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <span class="ji-title">Kinh nghi???m:</span>
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
                            <span>Gi???i thi???u c??ng ty</span>
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
                            <a target="_blank ">Gi???i thi???u</a>
                        </li>
                        <li>
                            <a target="_blank ">G??c b??o ch??</a>
                        </li>
                        <li>
                            <a target="_blank ">H???i ????p</a>
                        </li>
                        <li>
                            <a target="_blank ">Ch??nh s??ch b???o m???t</a>
                        </li>
                        <li>
                            <a target="_blank ">??i???u kho???n d???ch v???</a>
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
                                <i class="fa fa-map-marker fticn"></i> 175 T??y S??n, ?????ng ??a, H?? N???i
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-4 col-12">
                    <h2 class="footer-heading">
                        <span>Ng??n ng??? n???i b???t</span>
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
                        <span>Ng??nh Ngh??? N???i B???t</span>
                    </h2>
                    <ul class="footer-list">
                        <li><a href="#">L???p tr??nh vi??n</a></li>
                        <li><a href="#">Ki???m th??? ph???n m???m</a></li>
                        <li><a href="#">K??? s?? c???u n???i</a></li>

                        <li><a href="#">Qu???n l?? d??? ??n</a></li>

                    </ul>
                </div>
                <div class="col-md-2 col-sm-6 col-12">
                    <h2 class="footer-heading">
                        <span>T???t c??? h??nh th???c</span>
                    </h2>
                    <ul class="footer-list">
                        <li><a href="#">Nh??n vi??n ch??nh th???c</a></li>
                        <li><a href="#">Nh??n vi??n b??n th???i gian</a></li>
                        <li><a href="#">Freelancer</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-12 col-12">
                    <h2 class="footer-heading">
                        <span>T???t c??? t???nh th??nh</span>
                    </h2>
                    <ul class="footer-list">
                        <li><a href="#">H??? Ch??nh Minh</a></li>
                        <li><a href="#">H?? N???i</a></li>
                        <li><a href="#">???? N???ng</a></li>
                        <li><a href="#">Bu??n Ma Thu???t</a></li>
                        <li><a href="# ">H???i D????ng</a></li>
                    </ul>
                </div>


            </div>
        </div>
    </div>

    <footer class="container-fluid copyright-wrap">
        <div class="container copyright">
            <p class="copyright-content">
                Copyright ?? 2022 <a href="#"> Job<b>King</b></a>. All Right Reserved.
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