<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Learner a education bootstrap Website Template | Technology :: w3layouts</title>
<!-- Bootstrap -->
<link href="/testNewsCI/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="/testNewsCI/css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="/testNewsCI/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="/testNewsCI/js/jquery.min.js"></script>
<script type="text/javascript" src="/testNewsCI/js/bootstrap.js"></script>
<script type="text/javascript" src="/testNewsCI/js/bootstrap.min.js"></script>
<!----font-Awesome----->
    <link rel="stylesheet" href="/testNewsCI/fonts/css/font-awesome.min.css">
<!----font-Awesome----->
</head>
<body>
<div class="header_bg1">
<div class="container">
  <div class="row header">
    <div class="logo navbar-left">
      <h1><a href="index.html">Learner </a></h1>
    </div>

    <div class="clearfix"></div>
  </div>
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
            <li><a href="index.html">Home</a></li>
            <li><a href="technology.html">Technologies</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li class="active"><a href="user.html">Users</a></li>
            <li><a href="login-template.html">Login</a></li>
            <li><a href="signup-template.html">Sign Up</a></li>
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
  <div class="clearfix"></div>
</div>
</div>
<div class="main_bg"><!-- start main -->
  <div class="container">
    <div class="technology row">
      <h2>View A User</h2>

<form class= "form-horizontal" >      
<div class="form-group">
<label for="User_Name">User Name</label>
<input class="form-control" type="input" name="User_Name" size="50" value="<?php echo $users_item['User_Name'] ?>" readonly/>
</div>
</br>
</br>
<div class="form-group">
<label for="User_Mail">Email-Address</label>
<input class="form-control" type="input" name="User_Mail" size="50" value="<?php echo $users_item['User_Mail'] ?>" readonly/>
</div>
</form>
    </div>
  </div>
</div><!-- end main -->
<div class="footer_bg"><!-- start footer -->
  <div class="container">
    <div class="row  footer">
      <div class="copy text-center">

        <p class="link"><span>&#169; All rights reserved | Design by&nbsp;</span></p>

      </div>
    </div>
  </div>
</div>
</body>
</html>
