<?php
require('db.php');
include("auth_session.php");

if (empty($_SESSION['username'])) {
 $_SESSION['username'] = "guest";
}

if(isset($_POST['submit']))
{

if(empty(isset($_POST['name']))){
          echo '<h5>Fill all fields, Please try again!</h5>';
}
if(empty(isset($_POST['phonenumber']))){
          echo '<h5>Fill all fields, Please try again!</h5>';
}
if(empty(isset($_POST['datapicker']))){
          echo '<h5>Fill all fields, Please try again!</h5>';
}
if(empty(isset($_POST['time']))){
          echo '<h5>Fill all fields, Please try again!</h5>';
}
if(empty(isset($_POST['numpeople']))){
          echo '<h5>Fill all fields, Please try again!</h5>';
}
if(empty(isset($_POST['numpeople']))){
          echo '<h5>Fill all fields, Please try again!</h5>';
}
else{
     echo '<h5>Your reservation was successfull!</h5>';
}
}


?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Рестораны</title>
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
                                            <li><a  href="index.php">Главная</a></li>
                                            <li><a href="news.php">Новости</a></li>
                                            <li><a class="active" href="menu.php">Рестораны</a></li>
                                            <li><a href="about.php">О нас</a></li>
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
    <!-- header-end -->

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Резервирование мест</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- Delicious area start  -->
   <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <?php
                                $query=mysqli_query($con,"select * from restaurants");
while ($row=mysqli_fetch_array($query)) {
?>      
                                 <a class="d-inline-block" href="#">
                                    <h2><?php echo htmlentities($row['name']);?></h2>
                                </a>
                                <img class="card-img rounded-0" src="<?php  echo htmlentities($row['img']); ?>" alt="">
                            
                            </div>
                          <div class="blog_details">
                                
                                <p><?php echo htmlentities($row['description']);?></p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><b>Адрес:  </b><?php echo htmlentities($row['address']);?></a></li>
                                 <li><a href="#"><b>Контакты: </b><?php echo htmlentities($row['contact']);?></a></li>

                                </ul>
                                  <ul class="blog-info-link">
                                    <li><a href="#"><b>Средний чек:  </b><?php echo htmlentities($row['middlecheck']);?></a></li>
                                 <li><a href="#"><b>Количество столов: </b><?php echo htmlentities($row['tables']);?></a></li>

                                </ul>
                            </div>
                        </article>
<?php } ?>
                      


                    </div>
                </div>
       
            </div>
        </div>
    </section>
    <!--/ Delicious area start  -->
  <div class="Reservation_area">
        <div class="rev_icon_1 d-none d-md-block">
            <img src="img/icon/4.png" alt="">
        </div>
        <div class="rev_icon_2 d-none d-md-block">
            <img src="img/icon/5.png" alt="">
        </div>
        <div class="rev_icon_3 d-none d-md-block">
            <img src="img/icon/6.png" alt="">
        </div>
        <div class="container p-0">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-75">
                        <h3>Резервирование</h3>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-xl-6 col-lg-6">
                    <div class="map_area">
                        <div id="map" style="height: 480px; position: relative; overflow: hidden;"> </div>
                        <script>
                            function initMap() {
                                var uluru = {
                                    lat: -25.363,
                                    lng: 131.044
                                };
                                var grayStyles = [{
                                        featureType: "all",
                                        stylers: [{
                                                saturation: -90
                                            },
                                            {
                                                lightness: 50
                                            }
                                        ]
                                    },
                                    {
                                        elementType: 'labels.text.fill',
                                        stylers: [{
                                            color: '#ccdee9'
                                        }]
                                    }
                                ];
                                var map = new google.maps.Map(document.getElementById('map'), {
                                    center: {
                                        lat: -31.197,
                                        lng: 150.744
                                    },
                                    zoom: 9,
                                    styles: grayStyles,
                                    scrollwheel: false
                                });
                            }
                        </script>
                        <script
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
                        </script>
                    </div>
                </div>
                <form action="reserv.inc.php" method="post">
          
                <div class="col-lg-6">
                    <div class="book_Form">
                        <h3>Забронируй стол прямо сейчас! </h3>
                        <div class="row ">
                            <div class="col-lg-6">
                                <div class="input_field mb_15">
                                    <input type="text" name="name" placeholder="Ваше имя">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input_field mb_15">
                                    <input type="text" name="phonenumber" placeholder="Номер телефона">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input_field">
                                    <input id="datepicker2" name="datapicker" placeholder="Дата">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input_field">
                                    <div class="input_field" >
                                        <select class="wide" name="eatingtime">
                                            <option value ="Dinner">Ужин</option>
                                            <option value="Lunch">Обед</option>
                                            <option value="Breakfast">Завтрак</option>
                                            <option value="Brunch">Бранч</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input_field">
                                 <input type="text" name="numpeople"placeholder="Количество людей">
                                </div>
                            </div>
                             <p> </p>
                             <div class="col-lg-6">
                                <div class="input_field">
                                    <div class="input_field" >
                                        <select class="wide" name="restaurant">
                                            <option value="default">Выберите ресторан</option>
                                            <option value="Venezia">Venezia</option>
                                            <option value="Aura">Aura</option>
                                            <option value="Turandot">Turandot</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <p> </p>
                            <div class="col-xl-12">
                                <button class="sumbit_btn" type="submit" name="submit">Резервировать</button>
                            </div>
                            <div class="col-lg-6">
                                <div class="single_add d-flex">
                                    <div class="icon">
                                        <img src="img/svg_icon/address.svg" alt="">
                                    </div>
                                    <div class="ifno">
                                        <h4>Наш адрес</h4>
                                        <p>20, Ул. Абай</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single_add d-flex">
                                    <div class="icon">
                                        <img src="img/svg_icon/head.svg" alt="">
                                    </div>
                                    <div class="ifno">
                                        <h4>Резервирование</h4>
                                        <p>+77051182122</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>

    <!-- testimonial_area  -->
      <div class="testimonial_area overlay ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <p>Tapishke.kz</p>
                        <h3>Отзывы наших клиентов</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="single_testmonial ">
                                <div class="author_opinion">
                                    <p>“Рахмет за классный вечер! Долго выбирали зал и ни разу не пожалели что выбрали ваше заведение. Придем теперь в караоке! Процветания вам!"</p>
                                </div>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="img/testimonial/author.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h3>Нурлан Абылаев</h3>
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
                                    <p>“Я влюбилась в это заведение, отлично обслужили и накормили Незабываемый отдых!!!"</p>
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
                                    <p>“Заведение с самым необычным интерьером в городе и отличными стейками. Для проведения деловых встреч и мероприятий с друзьями место подходит идеально. Хорошая фоновая музыка. Блюда подают очень быстро. Персонал превзошел все ожидания) Отлично провели время."</p>
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
                                    <p>“Все было вкусно и быстро, приветливые официанты, классное место где можно провести и день рождение и просто посидеть с семьёй. Больше вам спасибо, Процветания вам!!!"</p>
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
                                    <p>“Все очень понравилось, посидели с друзьями. Посоветовали этот бар друзья. Все было вкусно и быстро принесли. И ещё были акции. Пиво и креветки очень понравились. Советую всем попробовать стейки и бургеры. Посидели очень хорошо. Думаю ещё раз приедем."</p>
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