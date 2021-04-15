<?php
include'../inc/conn.php';
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
	 <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#7B8D8E;">
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
	<div class="container">
	<br>
	    <div class="row">
		   <div class="col-lg-12 col-md-12">
		       <table class="table table-striped">
			       <tr>
				     <td style="color:#E45641;"><b>الرقم</b></td>
					 <td style="color:#E45641;"><b>اسم الكتاب</b></td>
					 <td style="color:#E45641;"><b>عدد الصفحات</b></td>
					 <td style="color:#E45641;"><b>الوصف</b></td>
					 <td style="color:#E45641;"><b>#</b></td>
					 <td style="color:#E45641;"><b>#</b></td>
				   </tr>
				   <?php
				     $sql="select * from books";
				     $ret=mysqli_query($connection,$sql);
				     while($res=mysqli_fetch_assoc($ret)){
					   echo'<tr>
					         <td style="color:#E45641;"><b>'.$res['id'].'</b></td>
							 <td>'.$res['name'].'</td>
							 <td>'.$res['pages'].'</td>
							 <td>'.$res['descrip'].'</td>';
					?>
							<td><a type="button" href="delete.php?id=<?php echo $res['id'] ?>" class="btn btn-danger">حذف</a></td>
							<td><a type="button" href="edit.php?id=<?php echo $res['id'] ?>" class="btn btn-success">تعديل</a></td>
							 <?php
							 echo'</tr>';
				        }
				   ?>
			   </table>
		   </div>
		</div>
	</div>
  </body>
</html>
