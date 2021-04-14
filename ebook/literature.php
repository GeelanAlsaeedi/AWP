<?php
include'inc/conn.php';
?>
<!DOCTYPE html>
<html>
  <head>
	 <title>كتب أدبية</title>
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
  </head>
  <body>
	<header>
	 <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#7B8D8E;">
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
         <?php
	     $sql="select * from books where category='literature'";
		 $ret=mysqli_query($connection,$sql);
		 while($res=mysqli_fetch_assoc($ret)){
			 echo'<div class="col-lg-4 col-md-12 col-sm-12" style="float:right;">
			  <div class="thumbnil">
			  <br>
			   <center><p><b>'.$res['name'].'<b></p><center>
			  <center><img src="img/'.$res['img'].'" /></center>
			  <hr>';
			  ?>
			  <center><a type="button" href="show.php?id=<?php echo $res['id'] ?>" class="btn btn-danger">معلومات الكتاب</a></center>
			 <?php
			 echo'</div>
			</div>';
		 }?>	
		</div>
	</div>
	<br><br>
	<footer style="margin-top:40px;">
		<center><p>جميع الحقوق محفوظة - الإختبار النهائي 2019</p></center>
	</footer>
  </body>
</html>