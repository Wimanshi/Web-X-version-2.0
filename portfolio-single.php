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
                                    <li><a href="./index.php">Home</a></li>
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
                                            <li class="current-item"><a href="./portfolio-single.php">- Single Portfolio</a></li>
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
                                    <a href="./profile-master/index.php" class="btn uza-btn">Profile </a>
                                </div>
    
                                <!-- Login / Register -->
                                <div class="login-register-btn mx-3">
                                    <a href="login.php">Login<i class="icon_lock-open_alt"></i></a>    
                                </div>
                                <div class="login-register-btn mx-3">
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

    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">Portfolio</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Portfolio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">App Developement</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="./img/core-img/curve-5.png" alt="">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ***** Portfolio Single Area Start ***** -->
    <section class="uza-portfolio-single-area section-padding-80">
        <div class="container">
            <div class="row justify-content-between align-items-end">
                <div class="col-12 col-md-6">
                    <div class="portfolio-details-text">
                        <h2>Market Analysis</h2>
                        <h6>Analysis, Marketing</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="portfolio-meta">
                        <h6>Client: Clarence Ryan</h6>
                        <h6>Date: 07 DEC 2018</h6>
                        <h6>Location: United States</h6>
                        <h6>Author: Phillip Simon</h6>
                    </div>
                    <div class="portfolio-social-info d-flex align-items-center">
                        <p>Share:</p>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-feed" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="portfolio-thumbnail mt-80">
                        <img src="img/bg-img/13.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="portfolio-pager mt-80 d-flex align-items-center justify-content-between">
                        <a href="#"><i class="arrow_left"></i> Previous Post</a>
                        <a href="index.php">Back to home</a>
                        <a href="#">Next Post <i class="arrow_right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Portfolio Single Area End ***** -->

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