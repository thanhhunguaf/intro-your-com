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
                        <li><a href="/">Giới thiệu</a></li>
                        <li><a href="/">Dịch vụ</a></li>
                        <li><a href="/">Quy trình</a></li>
                        <li><a href="/">Blog</a></li>
                        <li><a href="/">Liên hệ</a></li>
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
                <h2>Thiết kế Fideco Thảo Điền</h2>
            </div>
        </div>
        <div class="row" style="margin-top: 10px">
            <div class="col-12 col-md-12">
                <div>
                    <p style="padding-left:5em"><strong style="padding-left:5em">
                            - Khi nhắc đến phong cách Tân cổ điển là nhắc đến một sự kết hợp khéo léo đến tài tình giữa
                            những nét nghệ thuật cổ điển và sự phóng khoáng, giản đơn của phong cách hiện đại. Các đường
                            phào chỉ trên tường, trần hay chỉ nổi trên các cánh tủ gỗ là những chi tiết nhận diện đặc
                            trưng của phong cách này. Quy luật đối xứng cũng là một đặc điểm nổi bật trong phong cách
                            Tân cổ điển, khi mà các chi tiết luôn được sắp xếp theo bố cục đối xứng nhau để tạo nên một
                            tổng thể cân đối
                        </strong>
                    </p>
                    <p style="padding-left:5em"><strong style="padding-left:5em">
                            - Phong cách Tân cổ điển chuộng gam màu sáng, trung tính như trắng, be, xám, … nhằm tôn lên
                            sự nổi bật của đồ nội thất
                        </strong>
                    </p>
                    <p style="padding-left:5em"><strong style="padding-left:5em">
                            - Đồ decor là chiếc sofa mềm mại, sang trọng pha trộn chút đường cong thanh thoát. Một chiếc
                            đèn chùm thủy tinh điệu đà màu cổ điển tô điểm cho không gian phòng khách thêm đẳng cấp,
                            thời thượng. Bộ bàn ghế ăn bọc da với thiết kế độc đáo đi kèm với bàn ăn được làm thủ công
                            bằng chất liệu đá cao cấp cộng điểm thêm cho sự sang trọng.
                        </strong>
                    </p>
                    @for($i = 0; $i < 14; $i++)
                        <p style="text-align: center; margin-top: 10px">
                            <img src="{{ asset('images/fidecothaodien/' . $i . '.jpg') }}" alt="sample image" width="1000px"
                                 height="626px">
                        </p>
                    @endfor
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
</html>
