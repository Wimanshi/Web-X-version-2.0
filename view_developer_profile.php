<?php
session_start();
$Islogged=false;
if (isset($_SESSION['email'])){
    $Islogged=true;
    $type=$_SESSION['userType'];
$username1=$_SESSION['username'];
} 
  require_once ('class.Database.php');
  require_once ('class.Request.php');
?>
<!--php require_once('project/inc/connection.php'); ?--->
<!--?php require_once('project/inc/functions.php'); ?-->
<?php
$d_email=$_GET['email'];
?>
<?php
$previous = "javascript:history.go(-1)";
if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
}
?>
<?php 
	//checking if a user is logged in
	if (!isset($_SESSION['username'])){
		header('Location: index.php');
    }
	$user_list = '';
    //getting the list of users
    $email=$d_email;
    $query = "SELECT * FROM developer WHERE email= '{$email}' LIMIT 1";
    $db = Database::getInstance();
    $connection = $db->getConnection();
    $result_set = mysqli_query($connection,$query);
    //$query1= "SELECT * FROM users WHERE email= '{$email}' LIMIT 1";
    //$result_set1 = mysqli_query($connection,$query1);
    //verify_query($result_set);
    $user= mysqli_fetch_assoc($result_set);
    $username = $user['username'];
    $email = $user['email'];
    $description = $user['description'];
    //$user = mysqli_fetch_assoc($result_set);
    $phone = $user['phone'];
    $proffesion = $user['developer_type'];
    //$linkedIn = $user['linkedin'];
    $ranking =(int) $user['ranking'];
    //$image = '<img src = "data:image/jpeg;base64,'.base64_encode($user['Profile_Photo']).'" height="200" width = "200"/>';
    $_SESSION['developer_name']=$username;
    $_SESSION['developer_email']=$email;
    $type=$user['developer_type'];
    if ($type=="AndroidDeveloper"){
        $_SESSION['project_type']="Android Application";
    }else if($type=="IOSDeveloper"){
        $_SESSION['project_type']="iOS Application";
    }else if($type=="WebsiteDeveloper"){
        $_SESSION['project_type']="Web Application/Web Site";
    }else if($type=="GraphicDesigner"){
        $_SESSION['project_type']="Graphic Design";
    }else if($type=="VedioEditor"){
        $_SESSION['project_type']="Video/Short Film";
    }

    $query12 = "SELECT * FROM objreq";    
    $result_set12 = mysqli_query($connection,$query12);
    $result123=array();
    $rate=0;
    $i=0;
    //echo $d_email;
    while($r=mysqli_fetch_array($result_set12,MYSQLI_ASSOC)){
        $req=$r['req'];
        $rq=unserialize($req);
        if($rq->getDevEmail()==$d_email){
            //echo $rate;
            if($rq->getDevRating()!="not yet"){
                $rate=$rate+(float)$rq->getDevRating();
                //echo $rate;
                $i=$i+1;
                if ((int)($rq->getDevRating())>=4){
                    array_push($result123,$rq);

                }
            }
        }
        //$resultLists123.="<tr>";
        //$description123=$r['description'];
        //$resultLists123.="{$description123}";
        //$resultLists123.="</tr>";
        //$resultLists123.="<br></br>";
    }
    if ($i !=0){
        $rate=round($rate/$i,1);
    }
    //echo $rate;
    $sss="";
    $i = 1;
    $rate=(int)$rate;
    while($i <= $rate){
        $i++;
        $sss.="<span style='font-size:40px;'>&#9733;</span>";
}

$sss.=" ";

?>


<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Web-X project</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animateProfile.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/styleProfile.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

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
    <link rel="stylesheet" href="style.css">
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
                                            <li><a href="./start-exploring.php">- Start Exploring</a></li>
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
                                <!-- Login / Register -->
                                <div class="login-register-btn mx-3">
                                    <a href="logout.php">Logout<i class="icon_lock_alt"></i></a>    
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
                <?php
            if($Islogged){
                echo "<p style='text-align:right'>";
                echo "<font size='4' color='#6666ff'>";
                echo "you logged in as :  ";
                echo "<b>";
                echo $username1;
                echo "</b></p>";
            }
            ?>
            </div>
        </header>
        <!-- ***** Header Area End ***** -->

    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">Profile of <?php echo $username;?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profile of <?php echo $username;?></li>
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

	<!-- ***** Profile Area Start ***** -->
	
	<div id="page">	
	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image:url(images/cover_bg_3.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<div class="profile-thumb" style="background: url(profilePic.jpg);"></div>
							<!--<p><a href="./request.php" class="btn btn-default btn-lg">Send Request</a></p>-->
							
							<h1><span><?php echo $username;?></span></h1>
							<h3><span><?php echo  $proffesion ?> </span></h3>
							<p>
								<ul class="fh5co-social-icons">
									<li><a href="#"><i class="icon-twitter2"></i></a></li>
									<li><a href="#"><i class="icon-facebook2"></i></a></li>
									<li><a href="#"><i class="icon-linkedin2"></i></a></li>
									<li><a href="#"><i class="icon-dribbble2"></i></a></li>
								</ul>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-about" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>About Me</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<ul class="info">
						<li><span class="first-block">username:</span><span class="second-block"><?php echo  $username ?></span></li>
						<li><span class="first-block">Phone:</span><span class="second-block"><?php echo $phone ?></span></li>
						<li><span class="first-block">Email:</span><span class="second-block"><?php echo $email ?></span></li>
						<li><span class="first-block">profession:</span><span class="second-block"><?php echo $proffesion ?></span></li>
						<!--<li><span class="first-block">linkedIn:</span><span class="second-block"><?php echo $linkedIn ?></span></li>-->
					</ul>
				</div>
				<div class="col-md-8">
					<h2>Hello There!</h2>
					<p>There live the blind texts far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in bookmarksgrove there live the blind texts far from the countries.</p>
					
					
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-skills" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Skills</h2>
				</div>
			</div>
			<div class="row row-pb-md">
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="95"><span><strong>HTML5</strong>95%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="93"><span><strong>CSS3</strong>93%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="90"><span><strong>jQuery</strong>90%</span></div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="89"><span><strong>PHP</strong>89%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="85"><span><strong>MySQL</strong>85%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="90"><span><strong>AngularJS</strong>90%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="85"><span><strong>Ruby</strong>85%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="90"><span><strong>Java</strong>90%</span></div>
				</div>
			</div>
			
		</div>
	</div>

	<div id="fh5co-work" class="fh5co-bg-dark">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Projects</h2>
				</div>
			</div>
			<div class="row">
				
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(images/portfolio-2.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Brading</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(images/portfolio-3.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Illustration</span>
						</div>
					</a>
				</div>
				
			
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(images/portfolio-6.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Illustration</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(images/portfolio-7.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Brading</span>
						</div>
					</a>
				</div>
				
			</div>
		</div>
	</div>

	
	
	<div id="fh5co-started" class="fh5co-bg-dark">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Hire Me!</h2>
					<?php
						if($_SESSION['userType']=='client'){
							echo("<p><a href='./request.php' class='btn btn-default btn-lg'>Send Request</a></p>");
						}
					?>
				</div>
			</div>
		</div>
	</div>

	</div>
	


	<!-- ***** Profile Area End ***** -->

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
                            <h3>(+65) 1234 5678</h3>
                            <p>40 Baria Sreet 13/2 NY City, US <br> hello.colorlib@gmail.com</p>
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
                                <li <?php if($Islogged){
                                echo "style='display:none'";
                            }?>><a href="register.php">Forum Registeration</a></li>
                                <li <?php if($Islogged){
                                echo "style='display:none'";
                            }?>><a href="login.php">Forum LogIn</a></li>
                            <li <?php if(!$Islogged){
                                echo"style='display:none'";
                            }?>><a href="logout.php">LogOut</a></li>
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
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">About Us</h4>
                        <p>Integer vehicula mauris libero, at molestie eros imperdiet sit amet.</p>

                        <!-- Copywrite Text -->
                        <div class="copywrite-text mb-30">
                            <p>&copy; Copyright 2018 <a href="#">Colorlib</a>.</p>
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
<!--/////////////////////////////////////////////////-->
<!-- jQuery -->
<script src=".profile-master/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src=".profile-master/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src=".profile-master/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src=".profile-master/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src=".profile-master/js/jquery.stellar.min.js"></script>
	<!-- Easy PieChart -->
	<script src=".profile-master/js/jquery.easypiechart.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src=".profile-master/js/google_map.js"></script>
	
	<!-- Main -->
	<script src=".profile-master/js/main.js"></script>
<!--//////////////////////////////////////////////-->
    
    <!-- jQuery -->
	<script src="jsProfile/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="jsProfile/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="jsProfile/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="jsProfile/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="jsProfile/jquery.stellar.min.js"></script>
	<!-- Easy PieChart -->
	<script src="jsProfile/jquery.easypiechart.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="jsProfile/google_map.js"></script>
	
	<!-- Main -->
	<script src="jsProfile/main.js"></script>

	</body>
</html>