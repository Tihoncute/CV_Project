<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel='shortcut icon'
        href='https://th.bing.com/th/id/OIP.OpcjnteBxOhdJHOItogK0AHaG6?pid=ImgDet&rs=1'>
    <title>Đăng tin tuyển dụng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&display=swap"
        rel="stylesheet">

   <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">




    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">

 
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
                <button class="navbar-toggler tnavbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
    
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
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
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
                            <a class="nav-link" href="#"><i class="fa fa-search"
                                    aria-hidden="true"></i> <span class="hidden-text">Tìm
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
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
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


    <nav class="navbar navbar-expand-lg navbar-light nav-recuitment">
        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarNava" aria-controls="navbarNava" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse container" id="navbarNava">
            <ul class="navbar-nav nav-recuitment-li">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('infoVL\create')}}">Quản lý đăng tuyển</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Quản lý ứng viên</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Quản lý đăng tin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('infoNTD\create')}}">Tài khoản</a>
                </li>
            </ul>
            <ul class="rec-nav-right">
                <li class="nav-item">
                    <a class="nav-link" href="#">Tìm hồ sơ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Đăng tuyển</a>
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
                            <img src="{{url('img/hna2.jpg')}}">
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
                    <form class="recuitment-form" method="post" action="/infoVL/store" >
                        @csrf
                        <div class="accordion" id="accordionExample">
                        <div class="card recuitment-card">
                                <div class="card-header recuitment-card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <a class="btn btn-link btn-block text-left recuitment-header"
                                            type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Đăng tin tuyển dụng
                                            <span id="clickc1_advance2" class="clicksd">
                                                <i class="fa fa fa-angle-up"></i>
                                            </span>
                                        </a>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show"
                                    aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body recuitment-body">
                                        <div class="form-group row">
                                            <label
                                                class="col-sm-3 col-form-label text-right label">Tiêu
                                                đề<span style="color: red"
                                                    class="pl-2">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"
                                                    placeholder="Nhập tiêu đề" name="Tieude">
                                                    <input type="text" class="form-control"
                                                     name="MaCT" value="{{Auth::user()->id}}" hidden>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label
                                                class="col-sm-3 col-form-label text-right label">Số
                                                lượng cần tuyển</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control"
                                                    placeholder="1" name="SoLuongTuyen">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label
                                                class="col-sm-3 col-form-label text-right label">Giới
                                                tính<span style="color: red"
                                                    class="pl-2">*</span></label>
                                            <div class="col-sm-9">
                                                <select type="text" class="form-control"
                                                    id="jobGender" name="Gioitinh">
                                                    <option value="">Chọn giới tính</option>
                                                    <option value="Không yêu cầu">Không yêu cầu</option>
                                                    <option value="Nam">Nam</option>
                                                    <option value="Nữ">Nữ</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label
                                                class="col-sm-3 col-form-label text-right label">Mô
                                                tả công việc<span style="color: red"
                                                    class="pl-2">*</span></label>
                                            <div class="col-sm-9">
                                                <textarea type="text" class="form-control"
                                                    placeholder="Nhập mô tả công việc"
                                                    rows="5" name="Mota"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label
                                                class="col-sm-3 col-form-label text-right label">Yêu
                                                cầu công việc<span style="color: red"
                                                    class="pl-2">*</span></label>
                                            <div class="col-sm-9">
                                                <textarea type="text" class="form-control"
                                                    placeholder="Nhập yêu cầu công việc"
                                                    rows="5" name="Yeucau"></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label
                                                class="col-sm-3 col-form-label text-right label">Kinh
                                                nghiệm<span style="color: red"
                                                    class="pl-2">*</span></label>
                                            <div class="col-sm-9">
                                                <select type="text" class="form-control"
                                                    id="jobExperience" name="Kinhnghiem">
                                                    <option  value="">Chọn kinh
                                                        nghiệm</option>
                                                    <option value="Chưa có kinh nghiệm">Chưa có kinh nghiệm</option>
                                                    <option value="Dưới 1 năm">Dưới 1 năm</option>
                                                    <option value="1 năm">1 năm</option>
                                                    <option value="2 năm">2 năm</option>
                                                    <option value="3 năm">3 năm</option>
                                                    <option value="4 năm">4 năm</option>
                                                    <option value="5 năm">5 năm</option>
                                                    <option value="Trên 5 năm">Trên 5 năm</option>
                                                    <option value="Không yêu cầu kinh nghiệm">Không yêu cầu kinh nghiệm
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label
                                                class="col-sm-3 col-form-label text-right label">Mức
                                                lương<span style="color: red"
                                                    class="pl-2">*</span></label>
                                            <div class="col-sm-9">
                                                <select type="text" class="form-control"
                                                    id="jobSalary" name="Mucluong">
                                                    <option  value="">Chọn mức
                                                        lương</option>
                                                    <option value="Dưới 3 triệu">Dưới 3 triệu</option>
                                                    <option value="3-5 triệu">3-5 triệu</option>
                                                    <option value="5-7 triệu">5-7 triệu</option>
                                                    <option value="7-10 triệu">7-10 triệu</option>
                                                    <option value="10-12 triệu">10-12 triệu</option>
                                                    <option value="12-15 triệu">12-15 triệu</option>
                                                    <option value="15-20 triệu">15-20 triệu</option>
                                                    <option value="20-25 triệu">20-25 triệu</option>
                                                    <option value="25-30 triệu">25-30 triệu</option>
                                                    <option value="30-40 triệu">30-40 triệu</option>
                                                    <option value="40-50 triệu">40-50 triệu</option>
                                                    <option value="Trên 50 triệu">Trên 50 triệu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label
                                                class="col-sm-3 col-form-label text-right label">Ngành
                                                nghề</label>
                                            <div class="col-sm-9">
                                                <select type="text" class="form-control"
                                                    id="jobType" name="Nganhnghe">
                                                    <option value="Lập trình viên">Lập trình viên</option>
                                                    <option value="Nhân viên kiểm thử">Nhân viên kiểm thử</option>
                                                    <option value="Kỹ sư phần mềm">Kỹ sư phần mềm</option>
                                                    <option value="Designer">Designer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label
                                                class="col-sm-3 col-form-label text-right label">Nơi
                                                làm việc</label>
                                            <div class="col-sm-9">
                                                <select type="text" class="form-control"
                                                    id="jobProvince" name="Diachi">
                                                    <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                                                    <option value="Hà Nội">Hà Nội</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label
                                                class="col-sm-3 col-form-label text-right label">Hạn
                                                nộp hồ sơ<span style="color: red"
                                                    class="pl-2">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control"
                                                    placeholder="Nhập nơi làm việc" name="Hannop">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card recuitment-card">
                            </div>
                            <div class="card recuitment-card">
                                
                            </div>
                        </div>
                        <div class="rec-submit">
                            <button type="submit" class="btn-submit-recuitment" name="">
                                <i class="fa fa-floppy-o pr-2"></i>Lưu Tin
                            </button>
                        </div>
                    </form>

                </div>
   
                <div class="col-md-4 col-sm-12 col-12">
                    <div class="recuiter-info">
                        <div class="recuiter-info-avt">
                            <img src="{{url('img/icon_avatar.jpg')}}">
                        </div>
                        <div class="clearfix list-rec">
                            <h4>NESTLE Inc.</h4>
                            <ul>
                                <li><a href="#">Việc làm đang đăng <strong>(0)</strong></a></li>
                                <li><a href="#">Follower <strong>(450)</strong></a></li>
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
                                Quản lý tài khoản
                            </h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        Tài khoản
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Giấy phép kinh doanh
                                    </a>
                                </li>
                            </ul>
                            <h3 class="menu-ql-ntv">
                                Quản lý dịch vụ
                            </h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        Lịch sử dịch vụ
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        Báo giá
                                    </a>
                                </li>
                            </ul>
                            <h3 class="menu-ql-ntv">
                                Quản lý tin tuyển dụng
                            </h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        Đăng tin tuyển dụng
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Danh sách tin tuyển dụng
                                    </a>
                                </li>
                            </ul>
                            <h3 class="menu-ql-ntv">
                                Quản lý ứng viên
                            </h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        Tìm kiếm hồ sơ
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Hồ sơ đã lưu
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Hồ sơ đã ứng tuyển
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Thông báo hồ sơ phù hợp">
                                        Thông báo hồ sơ phù hợp
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
                            <ul>
                                <li class="logout">
                                    <a href="#" title="Đăng xuất">
                                        Đăng xuất
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
                                <input type="text" placeholder="Nhập email của bạn"
                                    class="newsletter-email form-control">
                                <a href="#" class="input-group-addon"><i
                                        class="fa fa-lg fa-envelope-o colorb"></i></a>
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
                        <li><a href="# ">Back-end</a></li>
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




</body>

</html>