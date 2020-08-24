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
        <div class="banner_item" data-bg-image="images/banner-2.jpg">
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
        <!-- <div class="banner_item" data-bg-image="images/banner-1.jpg">
            <div class="container text-center">
                <div class="row">
                    <div class="banner_text">
                        <h3>WELCOME on <span>spirit</span></h3>
                        <h4><span>SPIRIT</span> UNIQUE DESIGN WE LOVE IT.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet porro eaque assumenda consequatur asperiores laboriosam debitis, explicabo.</p>
                        <a href="#" class="multi_button">Know More</a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class="banner_item" data-bg-image="images/banner-3.jpg">
            <div class="container text-center">
                <div class="row">
                    <div class="banner_text">
                        <h3>WELCOME on <span>spirit</span></h3>
                        <h4><span>SPIRIT</span> UNIQUE DESIGN WE LOVE IT.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet porro eaque assumenda consequatur asperiores laboriosam debitis, explicabo.</p>
                        <a href="#" class="multi_button">Know More</a>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <div class="banner_arrows">
        <i class="fa fa-angle-left banner_arrow_left"></i>
        <i class="fa fa-angle-right banner_arrow_right"></i>
    </div>
</section>
<!--  Banner Part End  -->

<!--  About Part Start  -->
<section id="about_part">
    <div class="container">
        <div class="row">
            <!-- <div class="col-sm-6 visible-xs">
                <div class="about_right section_head">
                    <h2><span>Some words</span> about us</h2>
                    <p>We love building and rebuilding brands through our specific skills. Using colour, fonts, and illustration, we brand companies in a way they will never forget.We love building and rebuilding brands through our specific skills. Using colour, fonts, and illustration, we brand companies in a way they will never forget...</p>
                    <a href="#" class="multi_button">Read More</a>
                    <ul>
                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> <span>Mission -</span> We deliver uniqueness and quality</li>
                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> Skills -</span> Delivering fast and excellent results</li>
                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> Clients -</span> Satisfied clients thanks to our experience</li>
                    </ul>
                </div>
            </div> -->
            <div class="col-sm-6">
                <div class="about_left text-center">
                    <div class="about_left_inner">
                        <a class="venoboxvideo" data-vbtype="video" href="https://youtu.be/J0oADtwDtNw"><i
                                class="fa fa-youtube-play"></i></a>
                        <h3>Vinchange Concept</h3>
                        <p>Thiết kế, thi công nội thất dẫn đầu xu hướng</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 hidden-xs">
                <div class="about_right section_head">
                    <h2>Giới thiệu</h2>
                    <p>Vinchange Concept là cái tên còn khá mới trong lĩnh vực Nội thất. Tuy nhiên, chúng tôi đã và đang
                        dần khẳng định được chỗ đứng và vị trí của mình trên thị trường và trong lòng khách hàng. Bằng
                        những kinh nghiệm tích lũy được ở các dự án đã thưc hiện trong những năm qua, cùng với đó là sự
                        nỗ lực học hỏi và không ngừng tiếp thu các ứng dụng, công nghệ mới áp dụng vào thực tế.</p>
                    <!-- <a href="#" class="multi_button">Read More</a> -->
                    <ul>
                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> <span>Với tiêu chí: </span> "Thiết kế
                            ấn tượng, Thi công chất lượng, Dịch vụ tận tâm"
                        </li>
                    </ul>
                    <p>Từng thành viên của Vinchange Concept luôn cố gắng bằng tất cả sự nỗ lực, đam mê và nhiệt huyết
                        để mang đến cho khách hàng những dịch vụ tốt nhất và chất lượng tối ưu nhất. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  About Part End  -->

<!--  Service Part Start  -->
<section id="service_part">
    <div class="container">
        <div class="row">
            <div class="section_head work_head text-center">
                <h2>Dịch vụ</h2>
            </div>

            <div class="filer-3">
                <div class="col-xs-12 col-sm-6 col-md-4 filtr-item" data-category="1">
                    <div class="work_item">
                        <div class="work_img">
                            <img src="{{ asset('images/thietkenoithat.jpg') }}" alt="sample image">
                            <div class="work_img_inner">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a class="venobox" data-gall="myGallery" href="public/images/work-2.jpg"><i
                                        class="fa fa-camera"></i></a>
                            </div>
                        </div>
                        <div class="item_des">
                            <a href="#"><h3>Thiết kế nội thất</h3></a>
                            {{--                            <p>Phong cách hiện đại</p>--}}
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 filtr-item" data-category="2">
                    <div class="work_item">
                        <div class="work_img">
                            <img src="{{ asset('images/thicongnoithat.jpg') }}" alt="sample image">
                            <div class="work_img_inner">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a class="venobox" data-gall="myGallery" href="public/images/work-1.jpg"><i
                                        class="fa fa-camera"></i></a>
                            </div>
                        </div>
                        <div class="item_des">
                            <a href="#"><h3>Thi công nội thất</h3></a>
                            {{--                            <p>Phong cách hiện đại</p>--}}
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 filtr-item" data-category="2">
                    <div class="work_item">
                        <div class="work_img">
                            <img src="{{ asset('images/decor.jpg') }}">
                            <div class="work_img_inner">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a class="venobox" data-gall="myGallery" href="{{ asset('images/work-3.jpg') }}"><i
                                        class="fa fa-camera"></i></a>

                            </div>
                        </div>
                        <div class="item_des">
                            <a href="#"><h3>Decor</h3></a>
                            {{--                            <p>Phong cách Tân cổ điển Hà Đô Centrosa Garden - 80m2 </p>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Service Part End-->

<!--  Achievement Part Start  -->
{{--<section id="achivement_part" data-bg-image="images/counter-bg.jpg">--}}
{{--    <div class="container">--}}
{{--        <div class="row text-center">--}}
{{--            <div class="counter_content">--}}
{{--                <div class="col-xs-12 col-sm-3">--}}
{{--                    <div class="counter_item">--}}
{{--                        <i class="fa fa-compress"></i>--}}
{{--                        <h3 class="counting">2400</h3>--}}
{{--                        <p>Project Complated</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xs-12 col-sm-3">--}}
{{--                    <div class="counter_item">--}}
{{--                        <i class="fa fa-handshake-o"></i>--}}
{{--                        <h3 class="counting">1600</h3>--}}
{{--                        <p>Clients Satisfaction</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xs-12 col-sm-3">--}}
{{--                    <div class="counter_item">--}}
{{--                        <i class="fa fa-trophy"></i>--}}
{{--                        <h3 class="counting">200</h3>--}}
{{--                        <p>Awards Wins</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xs-12 col-sm-3">--}}
{{--                    <div class="counter_item connter_last">--}}
{{--                        <i class="fa fa-users"></i>--}}
{{--                        <h3 class="counting">1000</h3>--}}
{{--                        <p>Users</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="clearfix"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!--  Achivement Part End  -->

<!--  Work Part Start  -->
<section id="work_part">
    <div class="container">
        <div class="row">
            <div class="section_head work_head text-center">
                <h2>Quy trình</h2>
            </div>
            <div>
                <ul class="work_list filters-filer-1" id="filer-1">
                    <div class="text-center" style="color: #fcac45; margin-bottom: 30px">
                        <h5><strong style="font-size: 21px">QUY TRÌNH THIẾT KẾ</strong></h5>
                    </div>

                    <li class="filtr active" data-fltr="1">
                        <span>Tiếp
                        xúc
                        <br>khách hàng</span>
                    </li>
                    <li class="filtr" data-fltr="2">Thống nhất sơ
                        đồ bố trí
                        nội thất
                    </li>
                    <li class="filtr" data-fltr="3"><span>Báo giá và <br>ký
                        Hợp đồng</span>
                    </li>
                    <li class="filtr" data-fltr="4">Tiến hành
                        Thiết kế 3D
                    </li>
                    <li class="filtr" data-fltr="5">Triển khai
                        Bản vẽ 2D
                    </li>
                </ul>
            </div>
            <div class="filer-1">
                <div class="col-xs-12 col-sm-6 col-md-12 filtr-item" data-category="1">
                    <div class="work_item">
                        <div class="item_des">
                            <p style="font-size: 16px">Khảo sát hiện trạng, tìm hiểu nhu cầu và sở thích khách hàng, tư
                                vấn thiết kế</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-12 filtr-item" data-category="2">
                    <div class="work_item">
                        <div class="work_item">
                            <div class="item_des">
                                <p style="font-size: 16px">KTS nội thất đưa ra phương án bố trí sơ đồ công năng, tổng
                                    hợp và lên concepts những ý tưởng thiết kế ban đầu để khách hàng xác nhận</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-12 filtr-item" data-category="3">
                    <div class="work_item">
                        <div class="work_item">
                            <div class="item_des">
                                <p style="font-size: 16px">Báo giá sẽ dựa trên diện tích và đơn giá thiết kế. Sau khi
                                    khách hàng đồng ý báo giá, tiến tới thỏa thuận và ký kết hợp đồng</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-12 filtr-item" data-category="4">
                    <div class="work_item">
                        <div class="work_item">
                            <div class="item_des">
                                <p style="font-size: 16px">Dựa trên layout và concepts đã thống nhất, KTS nội thất sẽ
                                    dựng phối cảnh 3D, chỉnh sửa theo ý kiến của khách hàng và tư vấn cho phù hợp</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-12 filtr-item" data-category="5">
                    <div class="work_item">
                        <div class="work_item">
                            <div class="item_des">
                                <p style="font-size: 16px">Dựa vào phối cảnh 3D đã chốt, tiến hành khai triền hồ sơ kỹ
                                    thuật chi tiết trước khi thi công</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="padding-top: 30px">
                <ul class="work_list filters-filer-2" id="filer-2">
                    <div class="text-center" style="color: #fcac45; margin-bottom: 30px">
                        <h5><strong style="font-size: 21px">QUY TRÌNH THI CÔNG</strong></h5>
                    </div>

                    <li class="filtr active" data-fltr="1">Báo
                        giá và<br> ký hơp đồng
                    </li>
                    <li class="filtr" data-fltr="2">Xác nhận và
                        ký duyệt vật liệu mẫu
                    </li>
                    <li class="filtr" data-fltr="3">Tiến hành <br> thi công
                    </li>
                    <li class="filtr" data-fltr="4">Tiến hành <br>bàn giao
                    </li>
                    <li class="filtr" data-fltr="5">Bảo hành và <br>bảo trì
                    </li>
                </ul>
            </div>
            <div class="filer-2">
                <div class="col-xs-12 col-sm-6 col-md-12 filtr-item" data-category="1">
                    <div class="work_item">
                        <div class="item_des">
                            <p style="font-size: 16px">Lên bảng dự toán chi tiết hạng mục thi công, thỏa thuận và tiến
                                hành ký HĐ</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-12 filtr-item" data-category="2">
                    <div class="work_item">
                        <div class="work_item">
                            <div class="item_des">
                                <p style="font-size: 16px">Xác nhận và ký duyệt vật liệu mẫu: Trình mẫu vật liệu thực
                                    tế để khách hàng xác nhận trước khi thi công và sản xuất</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-12 filtr-item" data-category="3">
                    <div class="work_item">
                        <div class="work_item">
                            <div class="item_des">
                                <p style="font-size: 16px">Thi công hoàn thiện phần Thô, sản xuất và tiến hành lắp ráp
                                    đồ nội thất tại công trình</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-12 filtr-item" data-category="4">
                    <div class="work_item">
                        <div class="work_item">
                            <div class="item_des">
                                <p style="font-size: 16px">Kiểm tra và rà soát lỗi nếu có, dọn vệ sinh công nghiệp và
                                    bàn giao công trình</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-12 filtr-item" data-category="5">
                    <div class="work_item">
                        <div class="work_item">
                            <div class="item_des">
                                <p style="font-size: 16px">Bảo hành phần Thô trong vòng 06 tháng và đồ Nội thất gỗ trong
                                    vòng 01 năm. Sau giai đoạn bảo hành tiến hành giai đoạn bảo trì, kiểm tra, sữa chữa
                                    có tính phí (chi phí hợp lý) khi có yêu cầu của khách hàng</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Work Part End  -->

<!--  Skill Part Start  -->
<section id="skill_part" data-bg-image="images/skill-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section_head skill_head text-center">
                    <h2>KĨ NĂNG <span>VÀ KINH NGHIỆM</span></h2>
                    <p style="text-align: left;">Đội ngũ thiết kế trẻ luôn bắt kịp xu hướng, lối thiết kế tinh tế, đa
                        dạng phong cách, gu thiết kế ấn tượng và độc đáo luôn đem đến cho khách hàng sự hài lòng. "Thấu
                        hiểu khách hàng" là điều được chúng tôi đặc biệt quan tâm và đặt lên hàng đầu<br><br>
                        Thi công chỉnh chu, tiến độ chính xác, bàn giao gọn gàng. Giám sát thi công của Vinchange là
                        những thành viên có nhiều kinh nghiệm quản lý thi công, đam mê kiến trúc-nội thất và tỉ mỉ trong
                        công việc. Tiêu chuẩn thẩm mỹ cao là điều chúng tôi luôn áp dụng cho từng giai đoạn hoàn thiện
                        công trình.</p>
                </div>
            </div>
            <div class="col-sm-12 plr">
                <div class="section_head skill_head text-center">
                    <h2 style="color: white">TẠI SAO CHỌN VINCHANGE CONCEPT?</h2>
                </div>

                <div class="col-sm-6" style="padding-left: 170px">
                    <div class="skill_left">
                        <ul>
                            <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                Thiết kế sáng tạo, phong cách đa dạng
                            </li>
                            <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                Thi công chất lượng, nghiệm thu kỹ lưỡng
                            </li>
                            <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                Chi phí thi công hợp lý, giá cả cạnh tranh
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6" style="padding-left: 80px">
                    <div class="skill_left">
                        <ul>
                            <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                Tiến độ thi công chính xác
                            </li>
                            <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                Tư vấn thiết kế/thi công phù hợp ngân sách đầu tư
                            </li>
                            <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                Dịch vụ khách hàng chuyên nghiệp, tận tâm
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Skill Part End  -->


<!--  Blog Part Start  -->
<section id="blog_part">
    <div class="container">
        <div class="row text-center">
            <div class="section_head blog_head">
                <h2>Blog</h2>
                {{--                <p>Content</p>--}}
            </div>
        </div>
        <div class="row">
            <div class="blog_content_part">
                <!-- slick slider -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="blog_content">
                        <div class="blog_img_part">
                            <!-- slick slide inner -->
                            <div class="img_slide">
                                <div class="blog_img">
                                    <img src="{{ asset('images/blog2.jpg') }}" alt="img">
                                </div>
                            </div>
                            <div class="blog_img_inner">
                                <div class="blog_date">
                                    <h4>30</h4>
                                    <p>Sep.</p>
                                </div>
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>

                        <div class="blog_des">
                            <h3>Căn hộ cho thuê 2 PN</h3>
                            <p>The Sun Avenue – Phong cách hiện đại</p>
                            <a href="#" class="blog_Read">Xem thêm<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="blog_content">
                        <div class="blog_img_part">
                            <!-- slick slide inner -->
                            <div class="img_slide">
                                <div class="blog_img">
                                    <img src="{{ asset('images/blog1.jpg') }}" alt="img">
                                </div>
                            </div>
                            <div class="blog_img_inner">
                                <div class="blog_date">
                                    <h4>31</h4>
                                    <p>sep.</p>
                                </div>
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>

                        <div class="blog_des">
                            <h3>Văn phòng Offical</h3>
                            <p>The Sun Avenue – Phong cách hiện đại</p>
                            <a href="#" class="blog_Read">Xem thêm<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="blog_content">
                        <div class="blog_img_part">
                            <!-- slick slide inner -->
                            <div class="img_slide">
                                <div class="blog_img">
                                    <img src="{{ asset('images/blog3.jpg') }}" alt="img">
                                </div>
                            </div>
                            <div class="blog_img_inner">
                                <div class="blog_date">
                                    <h4>13</h4>
                                    <p>Oct.</p>
                                </div>
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>

                        <div class="blog_des">
                            <h3>Căn hộ 2 phòng ngủ</h3>
                            <p>Cách Tân cổ điển Hà Đô Centrosa Garden</p>
                            <a href="#" class="blog_Read">Read More<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Blog Part End  -->

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
                                <li style="color: #333">Copyright © 2019 | <a href="#" style="color: #333">SPIRIT</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="footer_right text-right">
                            <ul>
                                <li style="color: #333">Design by <a style="color: #333" href="https://themeforest.net/user/pollexe" target="_blank">Pollexe</a>
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
