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
      <h1><a href="index.html">
<?php
echo '<h2>'.$exams_item['Exam_Name'].'</h2>';
?></a></h1>
    </div>
    <div class="h_search navbar-right">
      
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
            <li><a href="<?php echo site_url('/'); ?>">Home</a></li>
            <li class="active"><a href="technology.html">Exams</a></li>
            <li><a href=<?php echo site_url('about.html'); ?>>About</a></li>
            <li><a href=<?php echo site_url('blog.html'); ?>>Blog</a></li>
      
            <li><a href=<?php echo site_url('User'); ?>>Users</a></li>
            <li><a href=<?php echo site_url('login'); ?>>Login</a></li>
            <li><a href=<?php echo site_url('User/signup'); ?>>Sign Up</a></li>
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
      
    

<div class="container">
  <div class="row header">
   

<center>
  <h2>
<?php
echo $question_item['Q_Name'];

?>
</h2>
</center>


<select class="form-control"  id = "c_v" name="Choosen_answer">
  <option value="0" >Chooce ..</option>
  <?php 
  foreach ($answers_item as $ans) {  ?>
    <option value="<?php echo $ans['A_Id'] ; ?>" > <?php echo $ans['A_Name'] ; ?> </option>
  
 <?php  
}
?>
</select>

<p> </p>


<?php  if ( isset($first) and $first== 0 ) {  ?>
<div class="btn-group-vertical pull-left">
<a class="btn btn-primary" id= "previous"  href="<?php echo site_url('exam/previousQuestion/'.$exams_item['Exam_Id'].'/'.$question_item['Q_Id']); ?>">Previous</a> 
</div>
<?php 
}
?>

<?php  if ( !isset($last) or $last== 0 ) {  ?>
<div class="btn-group-vertical pull-right">
<a class="btn btn-primary" id= "next" href="<?php echo site_url('exam/nextQuestion/'.$exams_item['Exam_Id'].'/'.$question_item['Q_Id']);?>">Next</a> 
</div>


<?php 
}
if (isset($last) and $last == 1 )  
{
?>
<div class="btn-group-vertical pull-right">
<a class="btn btn-success" id= "next" href="<?php echo site_url('exam/getScore/'.$exams_item['Exam_Id']);?>">Finish</a> 
</div>

<?php

}
?>

</div>
</div>
</div> 
 

    
     
    </div>
  </div>
</div><!-- end main -->

<div> 
<div>
</div>
</div>

<br>
<br>

<br>
<br>

<br>
<br>

<br>

<div class="footer_bg"><!-- start footer -->
  <div class="container">
    <div class="row  footer">
      <div class="copy text-center">
        <p class="link"><span>&#169; All rights reserved</span></p>
      </div>
    </div>
  </div>
</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script>
// window.onbeforeunload = function() { return "You answers may be lost."; };

history.pushState(null, null, document.URL);
window.addEventListener('popstate', function () {
    history.pushState(null, null, document.URL);
});

$(document).ready(function() {
  $("#c_v").val("<?php
 if (isset($CHOOSEN_ANSWER_ID)) {
 
echo $CHOOSEN_ANSWER_ID['A_Id'];
}
else 
{
 
echo '0' ;
}
 ?>").prop('selected', true);
  });

// system.out.println('hh'); 
 $('#next').attr('href', "<?php echo site_url('exam/nextQuestion/'.$exams_item['Exam_Id'].'/'.$question_item['Q_Id']);?>" +"/"+ document.getElementById("c_v").value);
 $('#previous').attr('href', "<?php echo site_url('exam/previousQuestion/'.$exams_item['Exam_Id'].'/'.$question_item['Q_Id']);?>" +"/"+ document.getElementById("c_v").value);
  
    $('#c_v').change(function(){
        ch_value = $(this).val();


       $('#next').attr('href', "<?php echo site_url('exam/nextQuestion/'.$exams_item['Exam_Id'].'/'.$question_item['Q_Id']);?>" +"/"+ ch_value);
       $('#previous').attr('href', "<?php echo site_url('exam/previousQuestion/'.$exams_item['Exam_Id'].'/'.$question_item['Q_Id']);?>" +"/"+ ch_value);
    });
</script>

</body>
</html>