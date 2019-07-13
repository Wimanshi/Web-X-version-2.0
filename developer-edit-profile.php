
<?php
    require_once ('class.Database.php');
    session_start();
    $email=$_SESSION['email'];
    
    
    $username="";
    
    $errors=array();
    $type="";
    



    $query = "SELECT * FROM developer WHERE email= '{$email}' LIMIT 1";
    $db = Database::getInstance();
    $connection = $db->getConnection();
   
	$result_set = mysqli_query($connection,$query);
    $user = mysqli_fetch_assoc($result_set);
    $username = $user['username'];
   
   
    $email = $user['email'];
    
    $password=$user['password'];
    $phone=$user['phone'];













    if (isset($_POST['update'])){
        
        $username=mysqli_real_escape_string($connection,$_POST['username']);
        $email=mysqli_real_escape_string($connection,$_POST['email']);
        //$password_1=mysqli_real_escape_string($connection,$_POST['password_1']);
        //$password_2=mysqli_real_escape_string($connection,$_POST['password_2']);
        $phone=mysqli_real_escape_string($connection,$_POST['Phone']);
        $description=mysqli_real_escape_string($connection,$_POST['description']);

        //if($password_1==null){
           // $password_1=$password;
        
        //$type=mysqli_real_escape_string($db,$_POST['type']);
        
        $query1="UPDATE developer
        SET username = '{$username}', email = '{$email}', phone='{$phone}', description='{$description}'
        WHERE email='{$email}'";

        

        $result1=mysqli_query($connection,$query1);
        if (!$result1){
            echo "update fail";
        }
       header('location: developer-profile.php');
        
    }
    
    

?>



<?php include('server.php'); ?>

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
    <!--link rel="stylesheet" href="register.css"-->

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div>
    </div>

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
                                    <a href="./indexProfile.php" class="btn uza-btn">Profile </a>
                                </div>
    
                                <!-- Login / Register -->
                                <div class="login-register-btn mx-3">
                                    <a href="login.php">Login<i class="icon_lock-open_alt"></i></a>    
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
                        <h2 class="title">Update</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i> Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Update</li>
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

    <!-- ***** Update Area Start ***** -->
    <!--div class="headerReg">
            <h2>Register</h2>
            </div-->
    <section class="uza-contact-area section-padding-80">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Contact Form -->
                <div class="col-12 col-lg-8">
                    <div class="uza-contact-form mb-80">
                        <div class="contact-heading mb-50">
                            <h4>Update your profile</h4>
                        </div>
                        <form method="post" action="developer-edit-profile.php">
                            <?php include('errors.php'); ?>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label>
                                            <h6>Username</h6>
                                        </label><br>
                                        <input type="text" class="form-control mb-30" pattern="[a-zA-Z0-9-]+" name="username" value=<?php echo $username; ?>>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label>
                                            <h6>Email</h6>
                                        </label><br>
                                        <input type="email" class="form-control mb-30" name="email" value=<?php echo $email; ?> readonly>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="">
                                            <h6>Password</h6>
                                        </label><br>
                                        <span>*****</span> |<a href='change-developer-password.php?email=<?php echo $email ?>'>Change Password</a>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label>
                                            <h6>Phone</h6>
                                        </label><br>
                                        <input type="tel" class="form-control mb-30" pattern="[0]{1}[0-9]{9}" name="Phone" value=<?php echo $phone;?>>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label>
                                            <h6>Description</h6>
                                        </label><br>
                                        <input type="text" class="form-control mb-30" name="description"?>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn uza-btn btn-3 mt-15" type="submit" name="update" value="Update" >Update</button>
                                </div>

                                <br>
                                <p>Already a member? <a href="login.php">Login</a></p>

                            </div>
                        </form>
                    </div>
                </div>

                <!-- Single Contact Card -->
                <div class="col-12 col-lg-3">
                    <div class="contact-sidebar-area mb-80">
                        <!-- Single Sidebar Area -->
                        <!--div class="single-contact-card mb-50">
                            <h4>Contact Us</h4>
                            <h3>2 729 729</h3>
                            <h6>connectin@gmail.com</h6>
                            <h6>Mon - Fri: 9:00 - 19:00 <br>Closed on Weekends</h6>
                        </div-->

                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- ***** Register Area End *****-->

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
                        <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                class="fa fa-facebook"></i></a>
                        <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i
                                class="fa fa-twitter"></i></a>
                        <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i
                                class="fa fa-pinterest"></i></a>
                        <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i
                                class="fa fa-instagram"></i></a>
                        <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i
                                class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="row" style="margin-bottom: 30px;">

            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script> All rights reserved<i class="fa fa-heart-o"
                aria-hidden="true"></i> by <a href="https://Web-X.com" target="_blank">Web-X</a>
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