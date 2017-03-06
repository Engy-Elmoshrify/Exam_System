
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
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css" rel='stylesheet' type='text/css' />
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
<!----font-Awesome----->
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css">
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
                <li class="active"><a href="technology.html">Exams</a></li>
                <li><a href="about.html">About</a></li>
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
           
           
          <h2><?php echo $title; ?></h2>
 
<table id = "exam_tb" class="table table-striped table-bordered" border='1' cellpadding='0'>
   <thead>
    <tr>
        <th><strong>Name</strong></th>
        <th><strong>Description</strong></th>
        <th><strong>Action</strong></th>
    </tr>
</thead>
    <tbody>
<?php foreach ($exams as $exams_item): ?>
        <tr>
            <td><?php echo $exams_item['Exam_Name']; ?></td>
            <td><?php echo $exams_item['Exam_Desc']; ?></td>
            <td>
                <a href="<?php echo site_url('exam/'.$exams_item['Exam_Id']); ?>">View</a> | 
                <a href="<?php echo site_url('exam/edit/'.$exams_item['Exam_Id']); ?>">Edit</a> | 
                <a href="<?php echo site_url('exam/delete/'.$exams_item['Exam_Id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</tbody>
</table>
        </div>
    </div>
</div><!-- end main -->
<div class="footer_bg"><!-- start footer -->
    <div class="container">
        <div class="row  footer">
            <div class="copy text-center">
                <p class="link"><span>&#169; All rights reserved </span></p>
            </div>
        </div>
    </div>
</div>
<script src="//code.jquery.com/jquery-1.12.4.js"  type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"  type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"  type="text/javascript"></script>
>>>>>>> f50ed7574cd1acf48fffe110a1476668cb6c466b
<script type="text/javascript">
$(document).ready(function() {
    $('#exam_tb').DataTable();
} );

</script>
</body>
</html>