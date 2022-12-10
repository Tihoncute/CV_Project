<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel='shortcut icon' href='https://th.bing.com/th/id/OIP.cyMGFBE6PYrvrrFG-ThjWAHaGL?pid=ImgDet&rs=1'>
    <title>Tạo Hồ Sơ Xin Việc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">




    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

 
    <link rel="stylesheet" href="{{url('css/select2.min.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


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
                            <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i> <span class="hidden-text">Tìm
                                    kiếm</span></a>
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
                        </li>
                        @if (Auth::user()->MaVaiTro == 2)
                        <li class="nav-item">
                            <a class="nav-link btn-employers" href="{{url('/infoNTD/create')}}" tabindex="-1" aria-disabled="true" ><p style="color: white;">Nhà tuyển dụng</p></a>
                        </li>

                        @elseif (Auth::user()->MaVaiTro == 3)
                        <li class="nav-item">
                            <a class="nav-link btn-employers" href="{{url('/infoUV/create')}}" tabindex="-1" aria-disabled="true"><p style="color: white;">Ứng viên</p></a>

                        </li>
                        @endif
                    </ul>
                </div>
            </nav>
        </div>
    </div>


    <div class="clearfix"></div>


    <nav class="navbar navbar-expand-lg navbar-light nav-recuitment">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNava" aria-controls="navbarNava" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse container" id="navbarNava">
            <ul class="navbar-nav nav-recuitment-li">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/infoNTD/create')}}">Quản lý Tài Khoản</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/infoVL/create')}}">Đăng tin tuyển dụng</a>
                </li>
            </ul>

        </div>
    </nav>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="home-ads">
                        <a href="#">
                            <img src="{{url('img/banner-qc1.jpg')}}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid published-recuitment-wrapper">
        <div class="container published-recuitment-content">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-12 recuitment-inner">
                    @if(Auth::user()->MaVaiTro==3)
                    <form class="employee-form" method="post" action="/infoUV/store">
                        <div class="accordion" id="accordionExample">
                            <div class="card recuitment-card">
                                <div class="card-header recuitment-card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <a class="btn btn-link btn-block text-left recuitment-header" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Thông tin tài khoản
                                            <span id="clickc1_advance2" class="clicksd">
                                                <i class="fa fa fa-angle-up"></i>
                                            </span>
                                        </a>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body recuitment-body row">
                                        <div class="col-md-3">
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                                    <label for="imageUpload"></label>
                                                </div>
                                                <div class="avatar-preview">
                                                    <div id="imagePreview" style="background-image: url(https://i.pravatar.cc/500?img=7);">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @csrf
                                        <div class="col-md-9">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-right label">Họ
                                                    tên<span style="color: red" class="pl-2">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="Nhập họ và tên" name="Hoten">
                                                    <input type="text" class="form-control" placeholder="Nhập họ và tên" name="MaUV" value="{{Auth::user()->id}}" hidden>
                                                    <input type="text" class="form-control" placeholder="Nhập họ và tên" name="email" value="{{Auth::user()->email}}" hidden>
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-right label">Số
                                                    điện thoại</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="SDT">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-right label">Giới
                                                    tính<span style="color: red" class="pl-2">*</span></label>
                                                <div class="col-sm-9">
                                                    <select type="text" class="form-control" id="jobGender" name="Gioitinh">
                                                        <option value="">Chọn giới tính</option>
                                                        <option value="Nam">Nam</option>
                                                        <option value="Nữ">Nữ</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-right label">Ngày
                                                    sinh<span style="color: red" class="pl-2">*</span></label>

                                                <div class="col-sm-9">
                                                    <input type="date" class="form-control" name="Ngaysinh">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-right label">Chỗ
                                                    ở hiện tại<span style="color: red" class="pl-2">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="Nhập địa chỉ" name="Diachi">
                                                </div>
                                            </div>
                                            <form action="{{route('image.store')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <label class="col-sm-3 col-form-label text-right label">Chọn
                                                hồ sơ<span style="color: red" class="pl-2">*</span></label>
                                  
                                                    <input type="file" name="file_cv" id="" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"> 
                                                    <button type="submit" style="margin-top: 50px;" class="btn-submit-recuitment mb-3 ml-3" name="">
                                                            <i class="fa fa-floppy-o pr-2"></i>Lưu Hồ Sơ
                                                        </button>
                                                </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card recuitment-card">
                                    
                            </div>

                        </div>


                    </form>
                    @elseif(Auth::user()->MaVaiTro==2)
                    <form class="employee-form" method="post" action="/infoNTD/store">
                        <div class="accordion" id="accordionExample">
                            <div class="card recuitment-card">
                                <div class="card-header recuitment-card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <a class="btn btn-link btn-block text-left recuitment-header" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Thông tin tài khoản
                                            <span id="clickc1_advance2" class="clicksd">
                                                <i class="fa fa fa-angle-up"></i>
                                            </span>
                                        </a>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body recuitment-body row">
                                        <div class="col-md-3">
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                                    <label for="imageUpload"></label>
                                                </div>
                                                <div class="avatar-preview">
                                                    <div id="imagePreview" style="background-image: url(https://i.pravatar.cc/500?img=7);">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @csrf
                                        <div class="col-md-9">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-right label">Tên công ty<span style="color: red" class="pl-2">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="Nhập tên công ty" name="TenCT">
                                                    <input type="text" class="form-control"  name="MaCT" value="{{Auth::user()->id}}" hidden>
                                                    <input type="text" class="form-control"  name="email" value="{{Auth::user()->email}}" hidden>
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-right label">Tên người liên hệ</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="TenNLH">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-right label">Địa chỉ<span style="color: red" class="pl-2">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="Diachi">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-right label">Số điện thoại<span style="color: red" class="pl-2">*</span></label>

                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="SDT">
                                                </div>
                                            </div>

                                            <form action="{{route('image.store')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <label class="col-sm-3 col-form-label text-right label">Chọn
                                                hồ sơ<span style="color: red" class="pl-2">*</span></label>
                                
                                                    <input type="file" name="logo" id="" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"> 
                                                    <button type="submit" style="margin-top: 50px;" class="btn-submit-recuitment mb-3 ml-3" name="">
                                                            <i class="fa fa-floppy-o pr-2"></i>Lưu Hồ Sơ
                                                        </button>
                                                </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card recuitment-card">
                                    
                            </div>

                        </div>


                    </form>
                    @endif
                </div>
     
                <div class="col-md-4 col-sm-12 col-12">
                    <div class="recuiter-info">
                        <div class="recuiter-info-avt">
                            <h3>
                                <a href="https://www.facebook.com/profile.php?id=100015744930749&sk=about">
                                    <img src="{{url('img/avtar.jpg')}}">
                                </a>
                            </h3>
                        </div>
                        <div class="clearfix list-rec">
                            <h4>Đinh Hoàng Quang</h4>
                            <ul>
                                <li><a href="#">Nhà tuyển dụng của tôi <strong>(0)</strong></a></li>
                                <li><a href="#">Việc làm đã lưu <strong>(450)</strong></a></li>
                                <li><a href="#">Việc làm đã nộp <strong>(1150)</strong></a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="block-sidebar" style="margin-bottom: 20px;">
                        <header>
                            <h3 class="title-sidebar font-roboto bg-primary">
                                Trung tâm quản lý
                            </h3>
                        </header>
                        <div class="content-sidebar menu-trung-tam-ql menu-ql-employer">
                            <h3 class="menu-ql-ntv">
                                Hồ sơ của bạn
                            </h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        Quản lý Tài khoản
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Quản lý hồ sơ
                                    </a>
                                </li>
                            </ul>
                            <h3 class="menu-ql-ntv">
                                Việc làm của bạn
                            </h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        Việc làm đã lưu
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        Việc làm dã ứng tuyển
                                    </a>
                                </li>
                            </ul>
                            <h3 class="menu-ql-ntv">
                                Hỗ trợ và thông báo
                            </h3>
                            <ul>
                                <li>
                                    <a href="#" title="Gửi yêu cầu đến ban quản trị">
                                        Gửi yêu cầu đến ban quản trị
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Ban quản trị thông báo">
                                        Ban quản trị thông báo
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Hướng dẫn thao tác">
                                        Hướng dẫn thao tác
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <span>Thông tin thanh toán</span>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="#">
                                        <span>Cổng tra cứu lương</span>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="#">
                                        <span> Cẩm nang tuyển dụng</span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="clearfix"></div>





    <div class="container-fluid job-support-wrapper">
        <div class="container-fluid job-support-wrap">
            <div class="container job-support">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-12">
                        <ul class="spp-list">
                            <li>
                                <span><i class="fa fa-question-circle pr-2 icsp"></i>Hỗ trợ nhà
                                    tuyển dụng:</span>
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
                        <li><a href="#">.NET</a></li>
                        <li><a href="# ">C/C++</a></li>
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


    <script src="{{url('js/jquery-3.4.1.slim.min.js')}}"></script>
    <script src="{{url('js/popper.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/select2.min.js')}}"></script>
    <script src="{{url('js/jobdata.js')}}"></script>

    <script type="text/javascript" src="{{url('js/main.js')}}"></script>

    <script src="{{url('js/owlcarousel/owl.carousel.js')}}"></script>

    <!-- <script type="text/javascript">

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
 
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function() {
            readURL(this);
        });
    </script> -->


</body>

</html>