<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vinchangeconcept</title>

    <!-- Favicon -->
    <link rel="icon" href="public/images/favicon.ico">

    <!--  Css Files  -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/venobox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

</head>

<body>

<!--  Pre-Loader Start -->
<div id="preloader">
    <div class="pre_img">
        <img src="{{ asset('images/pre-loader.gif') }}" alt="">
    </div>
</div>
<!--  Pre-Loader End -->

<!--  Header Part Start  -->
<header id="header_part">
    <nav class="navbar navbar-default my_nav">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav_list"
                            aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="main_logo" href="#">
                        <img src="{{ asset('images/logo2.png') }}" alt="LOGO">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="nav_list">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#header_part">Trang chủ</a></li>
                        <li><a href="#about_part">Giới thiệu</a></li>
                        <li><a href="#service_part">Dịch vụ</a></li>
                        <li><a href="#work_part">Quy trình</a></li>
                        <li><a href="#blog_part">Blog</a></li>
                        <li><a href="#contact_part">Liên hệ</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </div>
        <!-- /.container -->
    </nav>
</header>
<!--  Header Part End  -->

<!--  Banner Part Start  -->
<section id="banner_part">
    <div class="slide_active">
        <div class="banner_item" data-bg-image="../images/banner-2.jpg">
            <div class="container text-center">
                <div class="row">
                    <div class="banner_text">
                        <h4><span>CÔNG TY THIẾT KẾ - THI CÔNG NỘI THẤT</span></h4>
                        <h4><span>DẪN ĐẦU XU HƯỚNG</span></h4>
                        <!-- <a href="#" class="multi_button">Know More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner_arrows">
        <i class="fa fa-angle-left banner_arrow_left"></i>
        <i class="fa fa-angle-right banner_arrow_right"></i>
    </div>
</section>
<!--  Banner Part End  -->

<!--  About Part Start  -->
<section id="service_part">
    <div class="container">
        <div class="row">
            <div class="section_head work_head text-center">
                <h2>Thi công nội thất</h2>
            </div>

            <div class="filer-3">
                <div class="col-xs-12 col-sm-6 col-md-4 filtr-item" data-category="1">
                    <div class="work_item">
                        <div class="work_img">
                            <img src="{{ asset('images/thietkenoithat.jpg') }}" alt="sample image">
                            <div class="work_img_inner">
                                <a href="/thicongnoithat/hado"><i class="fa fa-link"></i></a>
                                <a class="venobox" data-gall="myGallery"
                                   href="{{ asset('images/thietkenoithat.jpg') }}"><i
                                        class="fa fa-camera"></i></a>

                            </div>
                        </div>
                        <div class="item_des">
                            <a href="/thicongnoithat/hado"><h3>Hà Đô Centrosa</h3></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  About Part End  -->


<!--  footer Part Start  -->
<footer id="footer_part">
    <!--Footer Widgets start-->
    <div class="footer_widgets">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-3 col-sm-8">
                    <div class="widgets widg_1">
                        <a href="#">
                            <img src="{{ asset('images/logo2.png') }}" alt="">
                        </a>
                        {{--                        <p>LIÊN HỆ NGAY ĐỂ ĐƯỢC TƯ VẤN</p>--}}
                        {{--                        <div class="office_des">--}}
                        {{--                            <ul>--}}
                        {{--                                <li><i class="fa fa-map-marker"></i> 304 Bùi Đình Túy, phường 12, Quận Bình Thạnh,--}}
                        {{--                                    TP.HCM--}}
                        {{--                                </li>--}}
                        {{--                                <li><i class="fa fa-phone"></i>(+84) 939692951</li>--}}
                        {{--                                <li><i class="fa fa-envelope-o"></i>sg@vinchangeconcept.vn</li>--}}
                        {{--                            </ul>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-8">
                    <div class="widgets widg_2">
                        <p>LIÊN HỆ NGAY ĐỂ ĐƯỢC TƯ VẤN</p>
                        <div class="office_des">
                            <ul>
                                <li><i class="fa fa-map-marker"></i> 304 Bùi Đình Túy, phường 12, Quận Bình Thạnh,
                                    TP.HCM
                                </li>
                                <li><i class="fa fa-phone"></i>(+84) 939692951</li>
                                <li><i class="fa fa-envelope-o"></i>sg@vinchangeconcept.vn</li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix visible-sm"></div>
                </div>
                <!-- <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="widgets widg_3">
                        <h3>Our Twitter</h3>

                        <div class="tweets">
                            <ul>
                                <li>
                                    <a href="#" target="_blank">@Spirit</a> Cum soluta nobis eleifend option congue nihil imperdiet doming
                                    <span>3 mins ago</span>
                                </li>
                                <li>
                                    <a href="#" target="_blank">#envato</a> Mirum est notare quam littera gothica, quam nunc putamus parum
                                    <span>5 hours ago</span>
                                </li>
                                <li>
                                    <a href="#" target="_blank">@pirit</a> Soluta nobis option
                                    <span>7 days ago</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="widgets widg_4">
                        {{--                        <h3>Subcribe</h3>--}}
                        <p style="text-align: center">Tìm hiểu thêm về chúng tôi:</p>
                        <div class="bottom_social">
                            <ul class="text-center">
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer Bottom start-->
    <div id="footet_bottom">
        <div class="container">
            <div class="row">
                <div class="footer_main">
                    <div class="col-sm-5">
                        <div class="footer_left">
                            <ul>
                                <li style="color: #333">Copyright © 2019 | <a href="#" style="color: #333">SPIRIT</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="footer_right text-right">
                            <ul>
                                <li style="color: #333">Design by <a style="color: #333"
                                                                     href="https://themeforest.net/user/pollexe"
                                                                     target="_blank">Pollexe</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--  Footer Part End  -->

<!--  Bact to Top button start -->
<div id="backtotop">
    <i class="fa fa-arrow-up backtotop_btn"></i>
</div>
<!--  Bact to Top button End -->

<script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/imagesloaded.min.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/jquery.filterizr.min.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/venobox.min.js') }}"></script>
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>


<!-- Mirrored from techincent.com/demo/spirit/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Jun 2020 07:06:46 GMT -->
</html>
