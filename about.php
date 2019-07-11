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
                        <h2 class="title">About</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About</li>
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

    <!-- ***** About Us Area Start ***** -->
    <section class="uza-about-us-area section-padding-80">
        <div class="container">
            <div class="row align-items-center">
                <!-- About Thumbnail -->
                <div class="col-12 col-lg-6">
                    <div class="about-us-thumbnail mb-80">
                        <img src="./img/bg-img/2.jpg" alt="">
                        <!-- Video Area -->
                        <div class="uza-video-area hi-icon-effect-8">
                            <a href="https://www.youtube.com/watch?v=sSakBz_eYzQ" class="hi-icon video-play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- About Us Content -->
                <div class="col-12 col-lg-6">
                    <div class="section-heading mb-5">
                        <h2>Our Mission</h2>
                    </div>

                    <div class="about-us-content mb-80">
                        <div class="about-tab-area">
                            <ul class="nav nav-tabs mb-50" id="mona_modelTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">CREATION</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"> ANALYSIS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">STRATEGY</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Mona Tab Content -->
                        <div class="about-tab-content">
                            <div class="tab-content" id="mona_modelTabContent">
                                <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
                                        <p>Our mission is to enhancing the business growth of our customers with creative Design and Development to deliver market-defining high-quality solutions that create value and reliable competitive advantage for our clients around the world.</p>
                                        <p>Our mission is to deliver optimal solutions with quality and services at reasonable prices. For us customer satisfaction is given top place. We are very friendly in our dealings to the customers and it helps us retain existing clients and expand customer circle. We always try to improve the quality of our products by exploring innovative ideas.</p>
                                        <a href="contact.php" class="btn uza-btn mt-30">Get In Touch</a>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
                                        <p>We create solutions for real life problems or a business problems, makes a business out of it, and create an enterprise which runs a business by providing a software solution for a business problem.</p>
                                        <a href="contact.php" class="btn uza-btn mt-30">Get In Touch</a>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab3">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
                                            <p>Our ultimate goal as a team is to make a positive contribution in the lives of others by helping them achieve their goals through the software we create.Our mission represents the steps involved in achieving this goal</p>
                                        <a href="contact.php" class="btn uza-btn mt-30">Get In Touch</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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

    <!-- ***** Why Choose Us Area Start ***** -->
    <section class="uza-why-choose-us-area">
        <div class="container">
            <div class="row align-items-center">
                <!-- Choose Us Content -->
                <div class="col-12 col-lg-6">
                    <div class="choose-us-content mb-80">
                        <div class="section-heading mb-4">
                            <h2>Why Choose Us</h2>
                            <p>We’re Your Partner in Your Success</p>
                        </div>
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Distinctive Experts That Provide Effortless Expertise</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Enriched Outcomes Enabled By Experienced Professionals</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Wide-Ranging Thoughts Bread Exceptional Ideas</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Generating Best Results Through Open Communication</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Extensive Marketing Research Generates Valuable Insights</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> We are Results-Driven, Oriented, We deliver results</li>
                        </ul>
                    </div>
                </div>
                <!-- Choose Us Thumbnail -->
                <div class="col-12 col-lg-6">
                    <div class="choose-us-thumbnail mb-80">
                        <img class="w-100" src="img/bg-img/22.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Why Choose Us Area End ***** -->

    <!-- ***** Team Member Area Start ***** -->
    <section class="uza-portfolio-area section-padding-80">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Team of Experts</h2>
                        <p>We stay on top of our industry by being experts in yours.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <!-- Team Member Slides -->
                <div class="team-sildes owl-carousel">

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/Prabhanu.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>DESIGNER</h6>
                            <h4>Prabhanu Gunaweera</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est.</p>
                        </div>
                        <!-- Social Info -->
                        <div class="team-social-info">
                            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="linkedin" data-toggle="tooltip" data-placement="top" title="linkedIn"><i class="fa fa-linkedin"></i></a>
                            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/Nadeesha.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>DESIGNER</h6>
                            <h4>Nadeesha Garusinghe</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est.</p>
                        </div>
                        <!-- Social Info -->
                        <div class="team-social-info">
                            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="linkedin" data-toggle="tooltip" data-placement="top" title="linkedIn"><i class="fa fa-linkedin"></i></a>
                            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/Shashini.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>DESIGNER</h6>
                            <h4>Shashini Abeywickrama</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est.</p>
                        </div>
                        <!-- Social Info -->
                        <div class="team-social-info">
                            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="linkedin" data-toggle="tooltip" data-placement="top" title="linkedIn"><i class="fa fa-linkedin"></i></a>
                            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/Prabhanu.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>DESIGNER</h6>
                            <h4>Prabhanu Gunaweera</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est.</p>
                        </div>
                        <!-- Social Info -->
                        <div class="team-social-info">
                            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="linkedin" data-toggle="tooltip" data-placement="top" title="linkedIn"><i class="fa fa-linkedin"></i></a>
                            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/Nadeesha.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>DESIGNER</h6>
                            <h4>Nadeesha Garusinghe</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est.</p>
                        </div>
                        <!-- Social Info -->
                        <div class="team-social-info">
                            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="linkedin" data-toggle="tooltip" data-placement="top" title="linkedIn"><i class="fa fa-linkedin"></i></a>
                            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/Shashini.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>DESIGNER</h6>
                            <h4>Shashini Abeywickrama</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est.</p>
                        </div>
                        <!-- Social Info -->
                        <div class="team-social-info">
                            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="linkedin" data-toggle="tooltip" data-placement="top" title="linkedIn"><i class="fa fa-linkedin"></i></a>
                            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Border -->
        <div class="container">
            <div class="border-line mt-80"></div>
        </div>
    </section>
    <!-- ***** Team Member Area End ***** -->

    <!-- ***** CTA Area Start ***** -->
    <div class="uza-cta-area">
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
    <!-- ***** CTA Area End ***** -->

    <!-- ***** Client Feedback Area Start ***** -->
    <div class="clients-feedback-area section-padding-0-80 clearfix">
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
                                    <h5>Darrell Goodman <span>- CEO Connect in</span></h5>
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
                                    <h5>Darrell Goodman <span>- CEO Connect in</span></h5>
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
                                <h4>“Connect in Ltd’s ranking has gone up so much from the great work that your team has done and our brand get organic sales consistently from your efforts. We are happy that the results of your efforts were lasting and profitable.”</h4>
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
                                    <h5>Darrell Goodman <span>- CEO Connect in</span></h5>
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
    <!-- ***** Client Feedback Area End ***** -->

    <!-- ***** Cool Facts Area Start ***** -->
    <div class="uza-cf-area section-padding-80-0">
        <div class="container">
            <div class="row">

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cf-area d-flex align-items-center mb-80">
                        <h2><span class="counter">90</span></h2>
                        <div class="cf-text">
                            <h6>Projects<br>Completed</h6>
                        </div>
                        <div class="bg-icon"><i class="icon_piechart"></i></div>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cf-area d-flex align-items-center mb-80">
                        <h2><span class="counter">120</span></h2>
                        <div class="cf-text">
                            <h6>Happy<br>clients</h6>
                        </div>
                        <div class="bg-icon"><i class="icon_heart_alt"></i></div>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cf-area d-flex align-items-center mb-80">
                        <h2><span class="counter">50</span></h2>
                        <div class="cf-text">
                            <h6>WEB<br>awards</h6>
                        </div>
                        <div class="bg-icon"><i class="icon_book_alt"></i></div>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cf-area d-flex align-items-center mb-80">
                        <h2><span class="counter">20</span></h2>
                        <div class="cf-text">
                            <h6>Our<br>experts</h6>
                        </div>
                        <div class="bg-icon"><i class="icon_profile"></i></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ***** Cool Facts Area End ***** -->

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