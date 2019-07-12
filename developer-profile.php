<?php  session_start();
    require_once ('class.hashlist.php');
    require_once ('class.Request.php');


require_once ('class.Database.php');?>
<!--php require_once('project/inc/connection.php'); ?--->
<!--?php require_once('project/inc/functions.php'); ?-->
<?php 
	//checking if a user is logged in
	if (!isset($_SESSION['username'])){
		header('Location: index.php');
	}

	$user_list = '';
    //getting the list of users
    $email=$_SESSION['email'];
    //$userr=hashlist::getUser($email);

    $query = "SELECT * FROM developer WHERE email= '{$email}' LIMIT 1";
   
    //$connection=mysqli_connect('localhost','root','','registration');
    $db = Database::getInstance();
    $connection = $db->getConnection();
    $result_set = mysqli_query($connection,$query);
   

    if(mysqli_num_rows($result_set)==1){
        $user = mysqli_fetch_assoc($result_set);
        $username = $user['username'];
        $email = $user['email'];
        $phone = $user['phone'];
        $proffesion = $user['developer_type'];
        $linkedIn = $user['linkedIn'];
        $ranking = (int)$user['ranking'];
        $description = $user['description'];


        $query12 = "SELECT * FROM objreq";    
        $result_set12 = mysqli_query($connection,$query12);
        $resultLists123="";
        $rate=0;
        $i=0;
        //echo $d_email;
        while($r=mysqli_fetch_array($result_set12,MYSQLI_ASSOC)){
            $req=$r['req'];
            $rq=unserialize($req);
            if($rq->getDevEmail()==$email){
                //echo $rate;
                if($rq->getDevRating()!="not yet"){
                    $rate=$rate+(float)$rq->getDevRating();
                    //echo $rate;
                    $i=$i+1;
                }
            }
            //$resultLists123.="<tr>";
            //$description123=$r['description'];
            //$resultLists123.="{$description123}";
            //$resultLists123.="</tr>";
            //$resultLists123.="<br></br>";
        }
        if ($i !=0){
            $rate=round($rate/$i,0);
        }

        $sss="";
        $i = 1;
        $rate=(int)$rate;
        while($i <= $rate){
            $i++;
            $sss.="<span style='font-size:40px;'>&#9733;</span>";
}
    
$sss.=" ";
        $image = '<img src = "data:image/jpeg;base64,'.base64_encode($user['profile_photo']).'" height="200" width = "200"/>';
    }
    //verify_query($result_set);
    

	
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Profile &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
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
		
	<div class="fh5co-loader"></div>
	
	<div id="page">	
	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image:url(images/cover_bg_3.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<div class="profile-thumb" style="background: url(profilePic.jpg);"></div>
							<p><a href="./developer-edit-profile.php" class="btn btn-default btn-lg">edit profile</a></p>
							<p><a href="./view_request.php" class="btn btn-default btn-lg">View Requests</a></p>
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
						<li><span class="first-block">linkedIn:</span><span class="second-block"><?php echo $linkedIn ?></span></li>
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
					<p><a href="#" class="btn btn-default btn-lg">Send Request</a></p>
				</div>
			</div>
		</div>
	</div>

	</div>
	


	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
    </div>
    
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