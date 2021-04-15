<?php
session_start();
if($_SESSION['checkadmin']==0)
	header("Location:index.php");

?>
<!DOCTYPE html>
<html>
  <head>
	 <title>لوحة التحكم</title>
	 <meta charset="UTF-8">
	 <meta name="author" content="Ghofran">
	 <meta name="description" content="هذه مكتبة للكتب الإلكترونية بأنواعها المختلفة">
	 <meta name="keywords" content="web,كتب , كتب إلكترونية, book, electronic book,موقع">
	 <script src="../js/jquery.min.js" type="text/javascript"></script>
	 <script src="../js/bootstrap.js" type="text/javascript"></script>
	 <script src="../js/bootstrap.min.js" type="text/javascript"></script>
	 <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
	 <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
	 <link rel="stylesheet" type="text/css" href="../css/style.css"/>
  </head>
  <body>
	<header>
	 <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:RGB(157,183,191);">
	  <img src="../img/logo.png" id="logo" alt="logo" />
	  <a class="navbar-brand" href="#"><b>إثراء</b></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
		  <a class="nav-item nav-link active" href="adminindex.php" style="font-size:20px;"><b>الرئيسية<b> <span class="sr-only">(current)</span></a>
		</div>
	  </div>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item active">
			<a class="nav-link" href="logout.php">تسجيل الخروج<span class="sr-only">(current)</span></a>
		  </li>
		</ul>
	  </div>
	 </nav>
	</header>
	<div class="container" >
	<br>
	    <div class="row">
           <div class="col-lg-4 col-md-12 col-sm-12" style="float:right;">
			  <div class="thumbnil">
			  <br>
			   <center><p><b>إضافة كتاب جديد</b></p></center>
			  <center><img src="../img/add.png" /></center>
			  <hr>
			  <center><a href="add.php" type="button" class="btn btn-danger">انتقل</a></center>
			 </div>
			</div>

			<div class="col-lg-4 col-md-12 col-sm-12" style="float:right;">
			  <div class="thumbnil">
			  <br>
			   <center><p><b>حذف كتاب</b></p></center>
			  <center><img src="../img/delete.png" /></center>
			  <hr>
			  <center><a href="books.php" type="button" class="btn btn-danger">انتقل</a></center>
			 </div>
			</div>

			<div class="col-lg-4 col-md-12 col-sm-12" style="float:right;">
			  <div class="thumbnil">
			  <br>
			   <center><p><b>تعديل كتاب</b></p></center>
			  <center><img src="../img/edit.png" /></center>
			  <hr>
			  <center><a href="books.php" type="button" class="btn btn-danger">انتقل</a></center>
			 </div>
			</div>
		</div>
	</div>
	<br><br>
  </body>
</html>
