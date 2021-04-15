<?php
include'inc/conn.php';
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
	 <title>إثراء</title>
	 <meta charset="UTF-8">
	 <meta name="author" content="Ghofran">
	 <meta name="description" content="هذه مكتبة للكتب الإلكترونية بأنواعها المختلفة">
	 <meta name="keywords" content="web,كتب , كتب إلكترونية, book, electronic book,موقع">
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script>
	   function redir(){
		   window.setTimeout(function(){location.href='login.php';},2000);
	   }
	</script>
  </head>
  <body onload="redir()">
	<header>
	 <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:RGB(157,183,191);">
	  <img src="img/logo.png" id="logo" alt="logo" />
	  <a class="navbar-brand" href="#"><b>إثراء</b></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
		  <a class="nav-item nav-link active" href="index.php" style="font-size:20px;"><b>الرئيسية<b> <span class="sr-only">(current)</span></a>
		  <a class="nav-item nav-link" href="aboutus.php" style="font-size:18px;">من نحن</a>
		</div>
	  </div>
	   <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item active">
			<a class="nav-link" href="login.php">تسجيل الدخول<span class="sr-only">(current)</span></a>
		  </li>
		  <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  أنواع الكتب
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
			  <a class="dropdown-item" href="literature.php">الكتب الأدبية</a>
			  <a class="dropdown-item" href="science.php">الكتب العلمية</a>
			  <div class="dropdown-divider"></div>
			  <a class="dropdown-item" href="video.php">مقاطع مرئية</a>
			</div>
		  </li>
		</ul>
	  </div>
	 </nav>
	</header>
	<div class="container">
	    <div class="row">
		   <div class="col-lg-12 col-md-12">
		      <Center><h2><b>الرجاء تسجيل الدخول لاستعراض محتويات الكتاب</b></h2></center>
			  <center><img src="img/login.png"  /></center>
		   </div>
		</div>
	</div>
	<br><br>
  </body>
</html>
