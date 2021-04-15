<?php
include '../inc/conn.php';
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
	 <br><br>
	 <div class="row">
		<div class="col-lg-12 col-md-12">
		  <form action="" method="post" enctype="multipart/form-data">
		   <div class="form-group">
			<label for="exampleInputEmail1">اسم الكتاب</label>
			<input type="text" name="bname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ادخل اسم الكتاب">
		   </div>
		   <div class="form-group">
			<label for="exampleInputEmail1">اسم المؤلف</label>
			<input type="text" name="aname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ادخل اسم المؤلف">
		   </div>
		   <div class="form-group">
			<label for="exampleInputPassword1">الفئة</label>
			<select name="cat">
			 <option value="أدب">literature</option>
			 <option value="علوم">science</option>
			</select>
		   </div>
		   <div class="form-group">
			<label for="exampleInputPassword1">عدد الصفحات</label>
			<input type="text" name="pages" class="form-control" id="exampleInputPassword1" placeholder="ادخل عدد الصفحات">
		   </div>
		   <div class="form-group">
			<label for="exampleInputPassword1">الوصف</label>
			<textarea name="descrip" class="form-control" id="exampleInputPassword1" placeholder="وصف الكتاب"></textarea>
		   </div>
		   <div class="form-group">
			<label for="exampleInputPassword1">الصورة</label>
			<input type="file" name="fileToUpload" class="form-control" id="exampleInputPassword1">
		   </div>
		   <input type="submit" name="add" value="أضف" class="btn btn-primary">
		   <?php
		    if(isset($_POST['add'])){
				$uploaddir='../img/';
				$uploadfile=$uploaddir.basename($_FILES['fileToUpload']['name']);
				if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$uploadfile)){
					$bname=$_POST['bname'];
					$aname=$_POST['aname'];
					$cat=$_POST['cat'];
					$pages=$_POST['pages'];
					$descrip=$_POST['descrip'];
					$fileToUpload=$_FILES['fileToUpload']['name'];
					$sql="insert into books(name, author, category, pages, descrip, img) values('$bname', '$aname', '$cat', '$pages', '$descrip', '$fileToUpload')";
					$ret=mysqli_query($connection, $sql);
					if($ret)
						echo'تمت عملية الإضافة بنجاح';
				}
				else{
					echo'حدث خلل ما عند رفع الصورة';
				}
		    }
		   ?>
	     </form>
		</div>
	 </div>
	</div>
	<br><br>
   </body>
</html>
