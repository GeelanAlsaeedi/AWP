<?php
include'inc/conn.php';
session_start();
if($_SESSION['check']==0)
	header("Location:index.php");

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
	<style type="text/css">
	body {
<?php // Script 9.2 - view_settings.php
// Address error handing.
ini_set ('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);
// Check for a bg_color value.
if (isset ($_COOKIE['bg_color'])) {
	print "\t\tbackground-color: {$_COOKIE['bg_color']};\n";
} else {
	print "\t\tbackground-color: #F2F2F2;\n";
}
?>
	}
</style>
  </head>
  <body>
	<header>
	 <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:RGB(157,183,191);">
	  <img src="img/logo.png" id="logo" alt="logo" />
	  <a class="navbar-brand" href="#"><b>إثراء</b></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
		  <a class="nav-item nav-link active" href="rindex.php" style="font-size:20px;"><b>الرئيسية<b> <span class="sr-only">(current)</span></a>
		  <a class="nav-item nav-link" href="raboutus.php" style="font-size:18px;">من نحن</a>
		</div>
	  </div>
	   <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item active">
			<a class="nav-link" href="logout.php">تسجيل الخروج<span class="sr-only">(current)</span></a>
		  </li>
		  <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  أنواع الكتب
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
			  <a class="dropdown-item" href="rliterature.php">الكتب الأدبية</a>
			  <a class="dropdown-item" href="rscience.php">الكتب العلمية</a>
			  <div class="dropdown-divider"></div>
			  <a class="dropdown-item" href="rvideo.php">مقاطع مرئية</a>
			</div>
		  </li>
		</ul>
	  </div>
	 </nav>
	</header>
	<div class="container">
		<div class="row">
		 <div class="col-lg-12 col-md-12 col-sm-12">
			<center>
			<h2><b>فوائد القراءة</b></h2><hr>
			<video height="auto" width="90%" controls>
			 <source src="video/1.mp4" type="video/mp4">
			</video>
			</center>
		 </div>
		</div>
		<div class="row">
		 <div class="col-lg-12 col-md-12 col-sm-12">
			<center>
			<h2><b>كيف تقرأ؟</b></h2><hr>
			<video height="500px" width="60%" controls>
			 <source src="video/2.mp4" type="video/mp4">
			</video>
			</center>
		 </div>
		</div>
		<div class="row">
		 <div class="col-lg-12 col-md-12 col-sm-12">
			<center>
			<h2><b>لماذا يجب عليك أن تقرأ؟</b></h2><hr>
			<video height="auto" width="90%" controls>
			 <source src="video/3.mp4" type="video/mp4">
			</video>
			</center>
		 </div>
		</div>
	</div>
	<br><br>
  </body>
</html>
