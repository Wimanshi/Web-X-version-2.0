<?php
session_start();
if (isset($_GET['type'])){
$type= $_GET['type'];}
$Islogged=false;

if (isset($_SESSION['email'])){
    $Islogged=true;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="uza - Model Agency HTML5 Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Web-X project</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div>
    </div>

    <!-- ***** Top Search Area Start ***** -->
    <div class="top-search-area">
        <!-- Search Modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        <!-- Form -->
                        <form action="index.php" method="post">
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Top Search Area End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="uzaNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.php"><img src="./img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="current-item"><a href="./index.php">Home</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="./index.php">- Home</a></li>
                                        <li><a href="./start exploring.php">- Start Exploring</a></li>
                                        <li><a href="./about.php">- About</a></li>
                                        <li><a href="./services.php">- Services</a></li>
                                        <li><a href="#">- Developer List</a>
                                            <ul class="dropdown">
                                                <li><a href="./allDevelopers.php">- All Developers</a>
                                                    <ul class="dropdown">
                                                        <li><a href="./android.php">- Android Developing</a></li>
                                                        <li><a href="./graphic.php">- Graphic Designing</a></li>
                                                        <li><a href="./ios.php">- iOS Developing</a></li>
                                                        <li><a href="./website.php">- Website Developing</a></li>
                                                        <li><a href="./video.php">- Video Editing</a></li>
                                                    </ul>
                                                </li>
                                                <!--li><a href="#">- Dropdown Item</a></li>
                                                <li><a href="#">- Dropdown Item</a></li-->
                                            </ul>
                                        </li>
                                        <li><a href="./portfolio.php">- Portfolio</a></li>
                                        <li><a href="./portfolio-single.php">- Single Portfolio</a></li>
                                        <li><a href="./blog.php">- Blog</a></li>
                                        <li><a href="./single-blog.php">- Blog Details</a></li>
                                        <li><a href="./contact.php">- Contact</a></li>
                                    </ul>
                                </li>
                                <!--li><a href="./portfolio.php">Portfolio</a></li-->
                                <li><a href="./about.php">About</a></li>
                                <li><a href="#">DeveloperList</a>
                                    <ul class="dropdown">
                                        <li><a href="./allDevelopers.php">- All Developers</a></li>
                                        <li><a href="./android.php">- Android Developing</a></li>
                                        <li><a href="./graphic.php">- Graphic Designing</a></li>
                                        <li><a href="./ios.php">- iOS Developing</a></li>
                                        <li><a href="./website.php">- Website Developing</a></li>
                                        <li><a href="./video.php">- Video Editing</a></li>
                                    </ul>
                                </li>
                                <li><a href="./contact.php">Contact</a></li>
                            </ul>

                            <!-- Profile -->
                            <div class="get-a-quote"margin-right: 0px;margin-left: 0px;>
                                <a href="./<?php echo $type?>-profile.php" class="btn uza-btn">Profile </a>
                            </div>

                            <!-- Login / Register -->

                            <div class="login-register-btn mx-3" <?php if($Islogged){
                                echo "style='display:none'";
                            }?>>
                                <a href="login.php">Login<i class="icon_lock-open_alt"></i></a>    
                            </div>
                            <div class="login-register-btn mx-3" <?php if($Islogged){
                                echo"style='display:none'";
                            }?>>
                                <a href="register.php">Register<i class="icon_gift_alt"></i></a>
                            </div>

                            <!-- Search Icon -->
                            <div class="search-icon" data-toggle="modal" data-target="#searchModal">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                        <!-- Nav End -->

                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide">
                <!-- Background Curve -->
                <div class="background-curve">
                    <img src="./img/core-img/curve-1.png" alt="">
                </div>

                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-text">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">Connect-in connects your <br> needs <span>greater</span></h2>
                                    <h5 data-animation="fadeInUp" data-delay="400ms">We love to create "cool" things on Digital Platforms</h5>
                                    <a href="start exploring.php" class="btn uza-btn btn-2" data-animation="fadeInUp" data-delay="700ms">Start Exploring</a>
                                </div>
                            </div>
                            <!-- Welcome Thumbnail -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-thumbnail">
                                    <img src="./img/bg-img/myfirst.png" alt="" data-animation="slideInRight" data-delay="400ms">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide">
                <!-- Background Curve -->
                <div class="background-curve">
                    <img src="./img/core-img/curve-1.png" alt="">
                </div>

                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-text">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">Connect-in<br> looking for <span>valuable developers</span></h2>
                                    <h5 data-animation="fadeInUp" data-delay="400ms">We love to create "cool" things on Digital Platforms</h5>
                                    <a href="start exploring.php" class="btn uza-btn btn-2" data-animation="fadeInUp" data-delay="700ms">Start Exploring</a>
                                </div>
                            </div>
                            <!-- Welcome Thumbnail -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-thumbnail">
                                    <img src="./img/bg-img/mysecond.png" alt="" data-animation="slideInRight" data-delay="400ms">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide">
                <!-- Background Curve -->
                <div class="background-curve">
                    <img src="./img/core-img/curve-1.png" alt="">
                </div>

                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-text">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">Connect-in<br> help to <span>clients intentionally</span></h2>
                                    <h5 data-animation="fadeInUp" data-delay="400ms">We love to create "cool" things on Digital Platforms</h5>
                                    <a href="start exploring.php" class="btn uza-btn btn-2" data-animation="fadeInUp" data-delay="700ms">Start Exploring</a>
                                </div>
                            </div>
                            <!-- Welcome Thumbnail -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-thumbnail">
                                    <img src="./img/bg-img/mythird.png" alt="" data-animation="slideInRight" data-delay="400ms">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** About Us Area Start ***** -->
    <section class="uza-about-us-area">
        <div class="container">
            <div class="row align-items-center">

                <!-- About Thumbnail -->
                <div class="col-12 col-md-6">
                    <div class="about-us-thumbnail mb-80">
                        <img src="./img/bg-img/2.jpg" alt="">
                        <!-- Video Area -->
                        <div class="uza-video-area hi-icon-effect-8">
                            <a href="https://www.youtube.com/watch?v=sSakBz_eYzQ" class="hi-icon video-play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- About Us Content -->
                <div class="col-12 col-md-6">
                    <div class="about-us-content mb-80">
                        <h2>We provide you an interface for connection &amp; Digital Marketing</h2>
                        <p>Are you finding someone for create your needs or finding someone for market your service for them.</p>
                        <p>Then this is the right place for your requirement at digital marketing.</p>
                        <a href="start exploring.php" class="btn uza-btn btn-2 mt-4">Start Exploring</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Background Pattern -->
        <div class="about-bg-pattern">
            <img src="./img/core-img/curve-2.png" alt="">
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->

    <!-- ***** Services Area Start ***** -->
    <section class="uza-services-area section-padding-80-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Service Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-service-area mb-80">
                        <!-- Service Icon -->
                        <div class="service-icon">
                            <i class="icon_desktop"></i>
                        </div>
                        <h5>Digital Marketing</h5>
                        <p>We provide you an interface for the place where you can transact.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-service-area mb-80">
                        <!-- Service Icon -->
                        <div class="service-icon">
                            <i class="icon_mail_alt"></i>
                        </div>
                        <h5>Job Market Place</h5>
                        <p>We are looking for skilfull developers who can build amazing things.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-service-area mb-80">
                        <!-- Service Icon -->
                        <div class="service-icon">
                            <i class="icon_easel"></i>
                        </div>
                        <h5>Resource Handling</h5>
                        <p>We provide resources for clients who want to hire developers.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ***** Services Area End ***** -->

    <!-- ***** Portfolio Area Start ***** -->
    <section class="uza-portfolio-area section-padding-80">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Our Portfolio</h2>
                        <p>We like to give our service for your benefit</p>
                        <!--p>We stay on top of our industry by being experts in yours.</p-->
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <!-- Portfolio Slides -->
                <div class="portfolio-sildes owl-carousel">

                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/Android.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>Android Developing</h4>
                            <p>We are finding for best of the Android Developers to market their ability.</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="android.php" data-toggle="tooltip" data-placement="top" title="view more"><i class="arrow_right"></i></a>
                        </div>
                    </div>

                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/Graphic_design.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>Graphic Designing</h4>
                            <p>We are finding for best of the Graphic Designers to market their ability.</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="graphic.php" data-toggle="tooltip" data-placement="top" title="view more"><i class="arrow_right"></i></a>
                        </div>
                    </div>

                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/iOS.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>iOS Developing</h4>
                            <p>We are finding for best of the iOS Developers to market their ability.</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="ios.php" data-toggle="tooltip" data-placement="top" title="view more"><i class="arrow_right"></i></a>
                        </div>
                    </div>

                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/Website_developing.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>Website Developing</h4>
                            <p>We are finding for best of the Website Developers to market their ability.</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="website.php" data-toggle="tooltip" data-placement="top" title="view more"><i class="arrow_right"></i></a>
                        </div>
                    </div>

                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/Video_editing.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>Video Editing</h4>
                            <p>We are finding for best of the Video Editors to market their ability.</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="video.php" data-toggle="tooltip" data-placement="top" title="view more"><i class="arrow_right"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Client Feedback Area Start -->
        <div class="clients-feedback-area mt-80 section-padding-80 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Testimonial Slides -->
                        <div class="testimonial-slides owl-carousel">

                            <!-- Single Testimonial Slide -->
                            <div class="single-testimonial-slide d-flex align-items-center">
                                <!-- Testimonial Thumbnail -->
                                <div class="testimonial-thumbnail">
                                    <img src="./img/bg-img/7.jpg" alt="">
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-content">
                                    <h4>“Connect in’s ranking has gone up so much from the great work that your team has done and our brand get organic sales consistently from your efforts. We are happy that the results of your efforts were lasting and profitable.”</h4>
                                    <!-- Ratings -->
                                    <div class="ratings">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <!-- Author Info -->
                                    <div class="author-info">
                                        <h5>Darrell Goodman <span>- CEO Connect-in</span></h5>
                                    </div>
                                    <!-- Quote Icon -->
                                    <div class="quote-icon"><img src="img/core-img/quote.png" alt=""></div>
                                </div>
                            </div>

                            <!-- Single Testimonial Slide -->
                            <div class="single-testimonial-slide d-flex align-items-center">
                                <!-- Testimonial Thumbnail -->
                                <div class="testimonial-thumbnail">
                                    <img src="./img/bg-img/23.jpg" alt="">
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-content">
                                    <h4>“Connect in’s ranking has gone up so much from the great work that your team has done and our brand get organic sales consistently from your efforts. We are happy that the results of your efforts were lasting and profitable.”</h4>
                                    <!-- Ratings -->
                                    <div class="ratings">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <!-- Author Info -->
                                    <div class="author-info">
                                        <h5>Darrell Goodman <span>- CEO Connect-in</span></h5>
                                    </div>
                                    <!-- Quote Icon -->
                                    <div class="quote-icon"><img src="img/core-img/quote.png" alt=""></div>
                                </div>
                            </div>

                            <!-- Single Testimonial Slide -->
                            <div class="single-testimonial-slide d-flex align-items-center">
                                <!-- Testimonial Thumbnail -->
                                <div class="testimonial-thumbnail">
                                    <img src="./img/bg-img/24.jpg" alt="">
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-content">
                                    <h4>“Connect in’s ranking has gone up so much from the great work that your team has done and our brand get organic sales consistently from your efforts. We are happy that the results of your efforts were lasting and profitable.”</h4>
                                    <!-- Ratings -->
                                    <div class="ratings">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <!-- Author Info -->
                                    <div class="author-info">
                                        <h5>Darrell Goodman <span>- CEO Connect-in</span></h5>
                                    </div>
                                    <!-- Quote Icon -->
                                    <div class="quote-icon"><img src="img/core-img/quote.png" alt=""></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Client Feedback Area End -->

        <!-- Border -->
        <div class="container">
            <div class="border-line"></div>
        </div>

        <!-- Background Curve -->
        <div class="portfolio-bg-curve">
            <img src="./img/core-img/curve-3.png" alt="">
        </div>
    </section>
    <!-- ***** Portfolio Area End ***** -->

    <!-- ***** Blog Area Start ***** -->
    <section class="uza-blog-area">
        <!-- Background Curve -->
        <div class="blog-bg-curve">
            <img src="./img/core-img/curve-4.png" alt="">
        </div>

        <!-- CTA Area Start -->
        <div class="uza-cta-area section-padding-0-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-8">
                        <div class="cta-content mb-80">
                            <h2>Interested in working with us?</h2>
                            <!--h6>Hit the button below or give us a call!</h6-->
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="cta-content mb-80">
                            <div class="call-now-btn">
                                <a href="#"><span>Call us now:</span> 2 729 729</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CTA Area End -->

        <!--div class="container">
            <div class="row"-->
                <!-- Section Heading -->
                <!--div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Our Latest Blogs</h2-->
                        <!--p>Hit the button below or give us a call!</p-->
                    <!--/div>
                </div>
            </div>

            <div class="row"-->

                <!-- Single Blog Post -->
                <!--div class="col-12 col-lg-4">
                    <div class="single-blog-post bg-img mb-80" style="background-image: url(./img/bg-img/8.jpg);"-->
                        <!-- Post Content -->
                        <!--div class="post-content">
                            <span class="post-date"><span>23</span> August, 2018</span>
                            <a href="#" class="post-title">SEO: The Movie By Ignite Visibility</a>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut</p>
                            <a href="#" class="read-more-btn">Read More <i class="arrow_carrot-2right"></i></a>
                        </div>
                    </div>
                </div-->

                <!-- Single Blog Post -->
                <!--div class="col-12 col-lg-4">
                    <div class="single-blog-post bg-img mb-80" style="background-image: url(./img/bg-img/9.jpg);"-->
                        <!-- Post Content -->
                        <!--div class="post-content">
                            <span class="post-date"><span>13</span> December, 2018</span>
                            <a href="#" class="post-title">What Curling Irons Are The Best Ones</a>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut</p>
                            <a href="#" class="read-more-btn">Read More <i class="arrow_carrot-2right"></i></a>
                        </div>
                    </div>
                </div-->

                <!-- Single Blog Post -->
                <!--div class="col-12 col-lg-4">
                    <div class="single-blog-post bg-img mb-80" style="background-image: url(./img/bg-img/10.jpg);"-->
                        <!-- Post Content -->
                        <!--div class="post-content">
                            <span class="post-date"><span>08</span> July, 2018</span>
                            <a href="#" class="post-title">Amazon REV Workshop: Road to Seattle</a>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut</p>
                            <a href="#" class="read-more-btn">Read More <i class="arrow_carrot-2right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section-->
    <!-- ***** Blog Area End ***** -->

    <!-- ***** Newsletter Area Start ***** -->
    <!--section class="uza-newsletter-area">
        <div class="container">
            <div class="row align-items-center justify-content-between"-->
                <!-- Newsletter Content -->
                <!--div class="col-12 col-md-6 col-lg-6">
                    <div class="nl-content mb-80">
                        <h2>Subscribe to our Newsletter</h2>
                        <p>Subscribe our newsletter gor get notification about new updates, etc...</p>
                    </div>
                </div-->
                <!-- Newsletter Form -->
                <!--div class="col-12 col-md-6 col-lg-5">
                    <div class="nl-form mb-80">
                        <form action="#" method="post">
                            <input type="email" name="nl-email" value="" placeholder="Your Email">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div-->
            <!-- Border Bottom -->
            <!--div class="border-line"></div>
        </div>
    </section-->
    <!-- ***** Newsletter Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area section-padding-80-0">
        <div class="container">
            <div class="row justify-content-between">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Contact Us</h4>

                        <!-- Footer Content -->
                        <div class="footer-content mb-15">
                            <h3>2 729 729</h3>
                            <p>University of Moratuwa <br> connectin@gmail.com</p>
                        </div>
                        <p class="mb-0">Mon - Fri: 9:00 - 19:00 <br>
                            Closed on Weekends</p>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Quick Link</h4>

                        <!-- Nav -->
                        <nav>
                            <ul class="our-link">
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="register.php">Forum Registeration</a></li>
                                <li><a href="login.php">Forum Sign In</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Resources</h4>

                        <!-- Nav -->
                        <nav>
                            <ul class="our-link">
                                <li><a href="#">Customer Support</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Media &amp; Press</a></li>
                                <li><a href="#">Our Team</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">About Us</h4>
                        <p>We are a resourcefull team who interested to working with teams.</p>

                        <!-- Copywrite Text -->
                        <div class="copywrite-text mb-30">
                            <p>&copy; Copyright 2019 <a href="#">Web-X team</a>.</p>
                        </div>

                        <!-- Social Info -->
                        <div class="footer-social-info">
                            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>

            </div>

 <div class="row" style="margin-bottom: 30px;">
                
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://Web-X.com" target="_blank">Web-X</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>

        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- ******* All JS Files ******* -->
    <!-- jQuery js -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js -->
    <script src="js/uza.bundle.js"></script>
    <!-- Active js -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>