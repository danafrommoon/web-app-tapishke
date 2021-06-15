<?php
require('db.php');
include("auth_session.php");
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>О нас</title>
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

</head>

<body>
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
                                            <li><a href="index.php">Главная</a></li>
                                            <li><a href="news.php">Новости</a></li>
                                            <li><a href="menu.php">Рестораны</a></li>
                                            <li><a class="active" href="about.php">О нас</a></li>
                                            <li><a href="contact.php">Контакты</a></li>

                                             <li><a href="profile.php"><?php echo $_SESSION['username']; ?></a></li>
                                                </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="say_hello">
                                    <a href="logout.php">Выйти</a>
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
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>О нас</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="main_about_wrap">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h3>Наш сайт поддерживает ресторанный бизнес и помогает людям найти лучшее место для проведения мероприятий</h3>
                        <p>Рестораны, кафе и пабы- сердце и душа города. В нынешнее время, сложно пойти и забранировать стол. Поэтому, используя новые технологий бахнули такой классный сайт, прям вау. </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="about_thumb">
                                <img src="img/about/about_1.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="about_thumb">
                                <img src="img/about/about_2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                            <h3>Наш сайт поддерживает ресторанный бизнес и помогает людям найти лучшее место для проведения мероприятий</h3>
                            <span class="long_dash"></span>
                        <p>Ищете ресторан в определенном городе? Все рестораны Казахстана со оценками и с отзывами от гостей. Тысяча ресторанов рядом с вами, В Казахстане, найдите общую информацию, купоны, меню, рейтинги, характеристики и контактную информацию лучших ресторанов нашей станы.</p>
                        <ul class="food_list">
                            <li>
                                <img src="img/svg_icon/salad.svg" alt="">
                                <span>Свежие ингредиенты</span>
                            </li>
                            <li>
                                <img src="img/svg_icon/tray.svg" alt="">
                                <span>Опытные шеф-повары</span>
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
                            <p>Казахстан<br> Нур-Султан <br>
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
                                Полезные ссылки
                            </h3>
                            <ul>
                                   <li><a href="index.php">Главная</a></li>
                                            <li><a href="news.php">Новости</a></li>
                                            <li><a href="menu.php">Рестораны</a></li>
                                            <li><a href="about.php">О нас</a></li>
                                            <li><a href="contact.php">Контакты</a></li>
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