<?php
include'../inc/conn.php';
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
	 <title>لوحة التحكم</title>
	 <meta charset="UTF-8">
	 <script src="../js/jquery.min.js" type="text/javascript"></script>
	 <script src="../js/bootstrap.js" type="text/javascript"></script>
	 <script src="../js/bootstrap.min.js" type="text/javascript"></script>
	 <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
	 <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
	 <link rel="stylesheet" type="text/css" href="../css/style.css"/>
  </head>
  <body>
	<header>
	 <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#7B8D8E;">
	  <img src="../img/logo.png" id="logo" alt="logo" />
	  <a class="navbar-brand" href="#"><b>إثراء</b></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="margin-right:1200px;">
		<div class="navbar-nav" >
		  <a class="nav-item nav-link active" href="#" style="font-size:20px;"><b>الرئيسية<b> <span class="sr-only">(current)</span></a>
		</div>
	  </div>
	 </nav>
	</header>
	<div class="container" >
	   <br><br><br>
        <div class="col-lg-12">
		    <form  action="" method="post" >
             <div class="form-group">
               <label for="exampleInputEmail1" >اسم المستخدم</label>
               <input type="text" class="form-control" id="exampleInputEmail1" name="user" aria-describedby="emailHelp" placeholder="ادخل اسم المستخدم" style="height:50px;">
             </div>
             <div class="form-group" >
              <label for="exampleInputPassword1">كلمة المرور</label>
              <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="كلمة المرور" style="height:50px;">
             </div>
             <input  type="submit" name="signin" value="تسجيل الدخول" class="btn btn-primary" />
			 <?php
			   if(isset($_POST['signin'])){
				$user=$_POST['user'];
                $pass=$_POST['pass'];
			    $sql="select * from admins where username='$user' and password='$pass'";
				$ret=mysqli_query($connection,$sql);
				while($res=mysqli_fetch_assoc($ret)){
					   $_SESSION['checkadmin']=1;
                       echo'<script>window.location.href="adminindex.php"</script>';
				}
				echo'<center><p style="color:#ffffff;">البيانات غير صحيحة</p></center>';			   }
			 ?>
		   </form>
		</div>
	</div>
  </body>
</html>
