<?php
include'inc/conn.php';
?>
<!DOCTYPE html>
<html>
  <head>
	 <title>التسجيل</title>
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
	<br><br>
	    <div class="row">
		   <div class="col-lg-12 col-md-12">
		    <form dir="rtl"  action="" method="post">
              <div class="form-group">
               <label for="exampleInputEmail1" class="black">رقم الهاتف</label>
               <input type="text" name="num" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ادخل رقم هاتفك" required>
             </div>
             <div class="form-group">
              <label for="exampleInputPassword1" class="black">الاسم الكامل</label>
              <input type="text" name="fullname" class="form-control" id="exampleInputPassword1" placeholder="ادخل اسمك الكامل" required>
             </div>
			 <div class="form-group">
              <label for="exampleInputPassword1" class="black">البلد</label>
			  <select name="country">
			  <option value="السعودية">السعودية</option>
			  <option value="الأردن">الأردن</option>
			  <option value="الكويت">الكويت</option>
			  <option value="سوريا">سوريا</option>
			  </select>
             </div>
			 <div class="form-group">
              <label for="exampleInputPassword1" class="black">اسم المستخدم</label>
              <input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="ادخل اسم المستخدم" required>
             </div>
			  <div class="form-group">
              <label for="exampleInputPassword1" class="black">كلمة المرور</label>
              <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="ادخل كلمة المرور" required>
             </div>
             <input type="submit" value="تسجيل" name="signup" class="btn btn-primary">
			 <?php
			   if(isset($_POST['signup'])){
					  $num=$_POST['num'];
					  $fullname=$_POST['fullname'];
					  $country=$_POST['country'];
					  $username=$_POST['username'];
					  $pass=$_POST['pass'];
					  $sql="insert into users(phonenum,fullname,country,username,password)values('$num','$fullname','$country','$username','$pass')";
					  $ret=mysqli_query($connection,$sql);
					  if($ret)
						  echo'<p>تمت عملية التسجيل بنجاح</p>';
					  else
						  echo'حدث خلل أثناء التسجيل';
					}
			 ?>
		    </form>
		   </div>
		</div>
	</div>
	<br>
  </body>
</html>
