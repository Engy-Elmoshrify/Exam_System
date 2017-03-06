<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Exams system</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- start slider -->
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="js/jquery.cslider.js"></script>
	<script type="text/javascript">
			$(function() {

				$('#da-slider').cslider({
					autoplay : true,
					bgincrement : 450
				});

			});
		</script>
<!-- Owl Carousel Assets -->
<link href="css/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
		<script>
			$(document).ready(function() {

				$("#owl-demo").owlCarousel({
					items : 4,
					lazyLoad : true,
					autoPlay : true,
					navigation : true,
					navigationText : ["", ""],
					rewindNav : false,
					scrollPerPage : false,
					pagination : false,
					paginationNumbers : false,
				});

			});
		</script>
		<!-- //Owl Carousel Assets -->
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
</head>
<body>
<div class="header_bg">
<div class="container">
	<div class="row header">
		<div class="logo navbar-left">
			<h1><a href="">Examy</a></h1>
		</div>
		<div class="h_search navbar-right">
			<form action="User/verify" method ="post">
				<input name="User_Code" type="text" class="text" value="Enter your code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter text here';}">
				<input type="submit" value="Verify">
			</form>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="container">
	<div class="row h_menu">
		<nav class="navbar navbar-default navbar-left" role="navigation">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="#">Home</a></li>
		        <li><a href="technology.html">Exams</a></li>
		        <li><a href="about.html">About</a></li>
		        <li><a href="user.html">Users</a></li>
		        <li><a href="login.html">Login</a></li>
		        <li><a href="signup.html">Sign Up</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		    <!-- start soc_icons -->
		</nav>
		<div class="soc_icons navbar-right">
			<ul class="list-unstyled text-center">
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			</ul>	
		</div>
	</div>
</div>
<div class="slider_bg"><!-- start slider -->
	<div class="container">
		<div id="da-slider" class="da-slider text-center">
			<div class="da-slide">
				<h2>Online Tests</h2>
				<p>Take online exams through an easy way and get your results immediately ..<span class="hide_text"></span></p>
			</div>
			<div class="da-slide">
				<h2>Online Certificates</h2>
				<p>Validating educationl certificates after passing required exams .. <span class="hide_text"> </span></p>
			</div>
			<div class="da-slide">
				<h2>Free Registeration</h2>
				<p>Register now for free and enjoy joining our technical world .. <span class="hide_text"></span></p>
			</div>
	   </div>
	</div>
</div><!-- end slider -->
<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="main row">
			<div class="col-md-3 images_1_of_4 text-center">
				<span class="bg"><i class="fa fa-globe"></i></span>
				<h4><a href="#">International customers</a></h4>
				<p class="para">For our international students, registering for classroom courses is simple.  </p>
				<a href="branch/international" class="fa-btn btn-1 btn-1e">read more</a>
			</div>
			<div class="col-md-3 images_1_of_4 bg1 text-center">
				<span class="bg"><i class="fa fa-laptop"></i></span>
				<h4><a href="#">Refund & Exchange policy</a></h4>
				<p class="para">Return/Refund Policy for Distance Learning Certifications and<br>  Products</p>
				
				<a href="branch/refund" class="fa-btn btn-1 btn-1e">read more</a>
			</div>
				

<div class="col-md-3 images_1_of_4 bg1 text-center">
				<span class="bg"><i class="fa fa-cog"></i></span>
				<h4><a href="#">Membership <br></a></h4>
				<p class="para"><br>Together we can develop the solutions that our world needs to prosper into the future..</p>
				<a href="branch/membership" class="fa-btn btn-1 btn-1e">read more</a>
			</div>		

			<div class="col-md-3 images_1_of_4 bg1 text-center">
				<span class="bg"><i class="fa fa-shield"></i> </span>
				<h4><a href="#">Important Links support</a></h4>
				<p class="para">we support you by important links which you may need in the <br> future.</p>
				<a href="branch/links" class="fa-btn btn-1 btn-1e">read more</a>
			</div>	
		</div>
	</div>
</div><!-- end main -->
<div class="main_btm"><!-- start main_btm -->
	<div class="container">
		<div class="main row">
			<div class="col-md-6 content_left">
				<img src="images/pic1.jpg" alt="" class="img-responsive" >
			</div>
			<div class="col-md-6 content_right">
				<br><br><br><br> <h2>Who are we ?!</h2>
				<p class="para">
				USQC is the leader organization providing training, consultative services, and third-party certifications and audits.
				In many industries we are the experts you need (i.e. Oil & Gas - Maritime & shipping - Health care... etc.)
				We create the specially tailored system to fit your business.
				the training requirement as per highest standards, comply with American and international standards.</p>
		   </div>
		  </div>
				<!----start-img-cursual---->
					<div id="owl-demo" class="owl-carousel text-center">
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="images/c1.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="branch/cons">CONSULTATION</a></h4>
								<p>
									We create the specially tailored system to fit your business.
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="images/c2.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="branch/training">TRAINING</a></h4>
								<p>
									We offer a wide variety of training services. Just tell us the requirement and we'll take care of you. 
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="images/c3.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="branch/offers">Special Offers</a></h4>
								<p>
									visit our offers page for the latest offers.
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="images/c4.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="branch/news">Safety & Quality News</a></h4>
								<p>
									Know the latest news of safety and quality
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="images/c1.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="branch/cons">CONSULTATION</a></h4>
								<p>
									We create the specially tailored system to fit your business.
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="images/c2.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="branch/training">TRAINING</a></h4>
								<p>
									We offer a wide variety of training services. Just tell us the requirement and we'll take care of you. 
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="images/c3.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="branch/offers">Special Offers</a></h4>
								<p>
									visit our offers page for the latest offers.
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="images/c4.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="branch/news">Safety & Quality News</a></h4>
								<p>
									Know the latest news of safety and quality
								</p>
							</div>
						</div>								
					</div>
					<!----//End-img-cursual---->
	</div>
</div>
<div class="footer_bg"><!-- start footer -->
	<div class="container">
		<div class="row  footer">
			<div class="copy text-center">
				<p class="link"><span>&#169; All rights reserved | 2017 </span></p>
			</div>
		</div>
	</div>
</div>
</body>
</html>