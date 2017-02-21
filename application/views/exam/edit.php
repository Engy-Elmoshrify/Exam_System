



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
    <div class="h_search navbar-right">
      <form>
        <input type="text" class="text" value="Enter text here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter text here';}">
        <input type="submit" value="search">
      </form>
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
            <li class="active"><a href="technology.html">Technologies</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="user.html">Users</a></li>
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
      <h2>our Exams</h2>
    

 
<?php echo validation_errors(); ?>
 
<?php echo form_open('exam/edit/'.$exams_item['Exam_Id']); ?>
    <table>
        <tr>
            <td><label for="Exam_Name">Name</label></td>
            <td><input type="input" name="Exam_Name" size="50" value="<?php echo $exams_item['Exam_Name'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="Exam_Desc">Description</label></td>
            <td><textarea name="Exam_Desc" rows="10" cols="40"><?php echo $exams_item['Exam_Desc'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit Exam" /></td>
        </tr>
    </table>
</form>


      <ul class="pagination">
        <li><a href="#">&laquo;</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&raquo;</a></li>
      </ul>
      <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Warning!</strong> Better check yourself, you're not looking too good.
      </div>
    </div>
  </div>
</div><!-- end main -->
<div class="footer_bg"><!-- start footer -->
  <div class="container">
    <div class="row  footer">
      <div class="copy text-center">
        <p class="link"><span>&#169; All rights reserved | Design by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></span></p>
      </div>
    </div>
  </div>
</div>
</body>
</html>