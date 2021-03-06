<?php
require('db.php');
include("auth_session.php");
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tapishke.kz</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/slicknav.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="header_bottom_border">
                        <div class="row align-items-center no-gutters">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="img/framelogo.png" alt="" style="width:100px; height:100px;">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="index.php">??????????????</a></li>
                                            <li><a href="news.php">??????????????</a></li>
                                            <li><a href="menu.php">??????????????????</a></li>
                                            <li><a href="about.php">?? ??????</a></li>
                                            <li><a href="contact.php">????????????????</a></li>

                                             <li><a href="profile.php"><?php echo $_SESSION['username']; ?></a></li>
                                                </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="say_hello">
                                    <a href="logout.php">??????????</a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>?????????? ???????????? ??????????????????, ???????? ?? ????????????????????</h3>
                                <a href="menu.php" class="boxed-btn3">??????????????????????????</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>?????? ?????? ???? ???????????????????????? ????????????? ???????????? ?????????? ???????????? ?? ????????????????????!</h3>
                                <a href="menu.html" class="boxed-btn3">??????????????????????????</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>?????????????? ??????????, ?????????????? ?????????????????????? ?????? ?????????? ?? ?????????????????? ??????????. ?????????? ???????????? ???????????????????? ???????????? ?? ?????????????? ??????????????????</h3>
                                <a href="menu.html" class="boxed-btn3">??????????????????????????</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
        <div class="icon_1 d-none d-md-block">
            <img src="img/icon/1.png" alt="">
        </div>
        <div class="icon_2 d-none d-md-block">
            <img src="img/icon/2.png" alt="">
        </div>
        <div class="icon_3 d-none d-md-block">
            <img src="img/icon/3.png" alt="">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about_info_wrap">
                            <h3>?????? ???????? ???????????????????????? ?????????????????????? ???????????? ?? ???????????????? ?????????? ?????????? ???????????? ?????????? ?????? ???????????????????? ??????????????????????</h3>
                            <span class="long_dash"></span>
                        <p>?????????? ???????????????? ?? ???????????????????????? ????????????? ?????? ?????????????????? ???????????????????? ???? ???????????????? ?? ?? ???????????????? ???? ????????????. ???????????? ???????????????????? ?????????? ?? ????????, ?? ????????????????????, ?????????????? ?????????? ????????????????????, ????????????, ????????, ????????????????, ???????????????????????????? ?? ???????????????????? ???????????????????? ???????????? ???????????????????? ?????????? ??????????.</p>
                        <ul class="food_list">
                            <li>
                                <img src="img/svg_icon/salad.svg" alt="">
                                <span>???????????? ??????????????????????</span>
                            </li>
                            <li>
                                <img src="img/svg_icon/tray.svg" alt="">
                                <span>?????????????? ??????-????????????</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_img">
                        <div class="img_1">
                            <img src="img/about/big.png" alt="">
                        </div>
                        <div class="small_img">
                            <img src="img/about/small.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    <!-- Delicious area start  -->
    <div class="Delicious_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <h3>?????????????? ?????????? ????????????</h3>
                    </div>
                </div>
            </div>
            <div class="tablist_menu">
                    <div class="row">
                            <div class="col-xl-12">
                                    <ul class="nav justify-content-center" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                                                  <div class="single_menu text-center">
                                                      <div class="icon">
                                                          <i class="flaticon-lunch"></i>
                                                      </div>
                                                        <h4>????????</h4>
                                                  </div>
                                              </a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                                    <div class="single_menu text-center">
                                                            <div class="icon">
                                                                <i class="flaticon-food"></i>
                                                            </div>
                                                            <h4>??????????????</h4>
                                                        </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                                                    <div class="single_menu text-center">
                                                            <div class="icon">
                                                                <i class="flaticon-kitchen"></i>
                                                            </div>
                                                            <h4>????????</h4>
                                                        </div>
                                                </a>
                                            </li>
                                    </ul>
                            </div>
                        </div>
            </div>

            <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row">
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/delicious/1.png" alt="">
                        </div>
                        <div class="info">
                            <h3>#1. ???????????? ????????????????</h3>
                            <p>???????????? ???????????????? ?? ????????????????, ?????????? ?????? ?????????? ??????.</p>
                            <span>1200????</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                        <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/3.png" alt="">
                                </div>
                                <div class="info">
                                    <h3>#2. ?????? ???? ??????????????</h3>
                                    <p>?????? ?? ?????????????? ???????????????? ?? ?????????????????????? ??????????????????????.</p>
                                    <span>1000????</span>
                                </div>
                            </div>
                            
                </div>
                <div class="col-lg-6 col-md-6">
                        <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/5.png" alt="">
                                </div>
                                <div class="info">
                                    <h3>#3. ?????????? ????????????????</h3>
                                    <p>???????????? ???????????? ???? ???????????? ?????? ????????????.</p>
                                    <span>900????</span>
                                </div>
                            </div>
                </div>
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/delicious/2.png" alt="">
                        </div>
                        <div class="info">
                            <h3>#4. ???????????? ?? ????????????????</h3>
                            <p>?????????? ???????????? ??????????, ?? ?????????? ???????????????????? ?????????????????????????? ??????????.</p>
                            <span>800????</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                        <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/4.png" alt="">
                                </div>
                                <div class="info">
                                    <h3>#5. ???????????? ???? ??????????????????????</h3>
                                    <p>???????????? ?????????? ?? ???????????????????????? ????????????????.</p>
                                    <span>1200????</span>
                                </div>
                            </div>
                           
                </div>
                <div class="col-lg-6 col-md-6">
                        <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/6.png" alt="">
                                </div>
                                <div class="info">
                                    <h3>#6. ?????? ????????????</h3>
                                    <p>?????????????? ?????????????? ???????????? ?? ?????????????????????? ???????????? ??????.</p>
                                    <span>1500tg</span>
                                </div>
                            </div>
                </div>
            </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row">
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/delicious/1.png" alt="">
                        </div>
                        <div class="info">
                            <h3>#1. ???????????? ????????????????</h3>
                            <p>???????????? ???????????????? ?? ????????????????, ?????????? ?????? ?????????? ??????.</p>
                            <span>1200????</span>
                        </div>
                    </div>
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/delicious/3.png" alt="">
                        </div>
                         <div class="info">
                                    <h3>#2. ?????? ???? ??????????????</h3>
                                    <p>?????? ?? ?????????????? ???????????????? ?? ?????????????????????? ??????????????????????.</p>
                                    <span>1000????</span>
                                </div>
                    </div>
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/delicious/5.png" alt="">
                        </div>
                         <div class="info">
                                    <h3>#3. ?????????? ????????????????</h3>
                                    <p>???????????? ???????????? ???? ???????????? ?????? ????????????.</p>
                                    <span>900????</span>
                                </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/delicious/2.png" alt="">
                        </div>
                         <div class="info">
                            <h3>#4. ???????????? ?? ????????????????</h3>
                            <p>?????????? ???????????? ??????????, ?? ?????????? ???????????????????? ?????????????????????????? ??????????.</p>
                            <span>800????</span>
                        </div>
                    </div>
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/delicious/4.png" alt="">
                        </div>
                          <div class="info">
                                    <h3>#5. ???????????? ???? ??????????????????????</h3>
                                    <p>???????????? ?????????? ?? ???????????????????????? ????????????????.</p>
                                    <span>1200????</span>
                                </div>
                    </div>
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/delicious/6.png" alt="">
                        </div>
                         <div class="info">
                                    <h3>#6. ?????? ????????????</h3>
                                    <p>?????????????? ?????????????? ???????????? ?? ?????????????????????? ???????????? ??????.</p>
                                    <span>1500tg</span>
                                </div>
                    </div>
                </div>
            </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="row">
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/delicious/1.png" alt="">
                        </div>
                        <div class="info">
                            <h3>#1. ???????????? ????????????????</h3>
                            <p>???????????? ???????????????? ?? ????????????????, ?????????? ?????? ?????????? ??????.</p>
                            <span>1200????</span>
                        </div>
                    </div>
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/delicious/3.png" alt="">
                        </div>
                        <div class="info">
                                    <h3>#2. ?????? ???? ??????????????</h3>
                                    <p>?????? ?? ?????????????? ???????????????? ?? ?????????????????????? ??????????????????????.</p>
                                    <span>1000????</span>
                                </div>
                    </div>
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/delicious/5.png" alt="">
                        </div>
                        <div class="info">
                                    <h3>#3. ?????????? ????????????????</h3>
                                    <p>???????????? ???????????? ???? ???????????? ?????? ????????????.</p>
                                    <span>900????</span>
                                </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/delicious/2.png" alt="">
                        </div>
                         <div class="info">
                            <h3>#4. ???????????? ?? ????????????????</h3>
                            <p>?????????? ???????????? ??????????, ?? ?????????? ???????????????????? ?????????????????????????? ??????????.</p>
                            <span>800????</span>
                        </div>
                    </div>
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/delicious/4.png" alt="">
                        </div>
                          <div class="info">
                                    <h3>#5. ???????????? ???? ??????????????????????</h3>
                                    <p>???????????? ?????????? ?? ???????????????????????? ????????????????.</p>
                                    <span>1200????</span>
                                </div>
                    </div>
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/delicious/6.png" alt="">
                        </div>
                        <div class="info">
                                    <h3>#6. ?????? ????????????</h3>
                                    <p>?????????????? ?????????????? ???????????? ?? ?????????????????????? ???????????? ??????.</p>
                                    <span>1500tg</span>
                                </div>
                    </div>
                </div>
            </div>
                    </div>
                  </div>
            
        </div>
    </div>
    <!--/ Delicious area start  -->
    <!-- testimonial_area  -->
    <div class="testimonial_area overlay ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <p>Tapishke.kz</p>
                        <h3>???????????? ?????????? ????????????????</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="single_testmonial ">
                                <div class="author_opinion">
                                    <p>??????????????? ???? ???????????????? ??????????! ?????????? ???????????????? ?????? ?? ???? ???????? ???? ???????????????? ?????? ?????????????? ???????? ??????????????????. ???????????? ???????????? ?? ??????????????! ?????????????????????? ??????!"</p>
                                </div>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="img/testimonial/author.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h3>???????????? ??????????????</h3>
                                        <div class="icon">
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial ">
                                <div class="author_opinion">
                                    <p>????? ?????????????????? ?? ?????? ??????????????????, ?????????????? ?????????????????? ?? ?????????????????? ???????????????????????? ??????????!!!"</p>
                                </div>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="img/testimonial/author2.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h3>Aisha Nabieva</h3>
                                        <div class="icon">
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial ">
                                <div class="author_opinion">
                                    <p>????????????????????? ?? ?????????? ?????????????????? ???????????????????? ?? ???????????? ?? ?????????????????? ????????????????. ?????? ???????????????????? ?????????????? ???????????? ?? ?????????????????????? ?? ???????????????? ?????????? ???????????????? ????????????????. ?????????????? ?????????????? ????????????. ?????????? ???????????? ?????????? ????????????. ???????????????? ?????????????????? ?????? ????????????????) ?????????????? ?????????????? ??????????."</p>
                                </div>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="img/testimonial/author2.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h3>Sholpan Sembayeva</h3>
                                        <div class="icon">
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial ">
                                <div class="author_opinion">
                                    <p>????????? ???????? ???????????? ?? ????????????, ?????????????????????? ??????????????????, ???????????????? ?????????? ?????? ?????????? ???????????????? ?? ???????? ???????????????? ?? ???????????? ???????????????? ?? ????????????. ???????????? ?????? ??????????????, ?????????????????????? ??????!!!"</p>
                                </div>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="img/testimonial/author.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h3>Almat Kanyzov</h3>
                                        <div class="icon">
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial ">
                                <div class="author_opinion">
                                    <p>????????? ?????????? ??????????????????????, ???????????????? ?? ????????????????. ???????????????????????? ???????? ?????? ????????????. ?????? ???????? ???????????? ?? ???????????? ????????????????. ?? ?????? ???????? ??????????. ???????? ?? ???????????????? ?????????? ??????????????????????. ?????????????? ???????? ?????????????????????? ???????????? ?? ??????????????. ???????????????? ?????????? ????????????. ?????????? ?????? ?????? ??????????????."</p>
                                </div>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="img/testimonial/author2.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h3>Aizhan Bayzakova</h3>
                                        <div class="icon">
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->

    <!-- gallery_start -->
    <div class="gallery_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-75">
                        <h3>??????????????????????</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_gallery big_img">
            <a class="popup-image" href="img/gallery/1.png"></a>
            <img src="img/gallery/1.png" alt="">
        </div>
        <div class="single_gallery small_img">
            <a class="popup-image" href="img/gallery/2.png"></a>
            <img src="img/gallery/2.png" alt="">
        </div>
        <div class="single_gallery small_img">
            <a class="popup-image" href="img/gallery/3.png"></a>
            <img src="img/gallery/3.png" alt="">
        </div>

        <div class="single_gallery small_img">
            <a class="popup-image" href="img/gallery/4.png"></a>
            <img src="img/gallery/4.png" alt="">
        </div>
        <div class="single_gallery small_img">
            <a class="popup-image" href="img/gallery/5.png"></a>
            <img src="img/gallery/5.png" alt="">
        </div>
        <div class="single_gallery big_img">
            <a class="popup-image" href="img/gallery/6.png"></a>
            <img src="img/gallery/6.png" alt="">
        </div>
    </div>
    
    <!-- gallery end -->
    

      <!-- footer_start  -->
      <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/footer_logo.png" alt="">
                                </a>
                            </div>
                            <p>??????????????????<br> ??????-???????????? <br>
                                <a href="#">+77051182122</a> <br>
                                <a href="#">admin@gmail.com</a>
                            </p>
                            <p>



                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4 offset-xl-1">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                ???????????????? ????????????
                            </h3>
                            <ul>
                                   <li><a href="index.php">??????????????</a></li>
                                            <li><a href="news.php">??????????????</a></li>
                                            <li><a href="menu.php">??????????????????</a></li>
                                            <li><a href="about.php">?? ??????</a></li>
                                            <li><a href="contact.php">????????????????</a></li>
                            </ul>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>



    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>

    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-calendar-o"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-calendar-o"></span>'
            }

        });
    </script>
</body>

</html>