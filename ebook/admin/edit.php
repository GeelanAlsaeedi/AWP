<?php
include'../inc/conn.php';
session_start();
if($_SESSION['checkadmin']==0)
	header("Location:index.php");
$id=(int)$_GET['id'];
$sql="select * from books where id='$id'";
$ret=mysqli_query($connection,$sql);
while($res=mysqli_fetch_assoc($ret)){
	$name=$res['name'];
    $author=$res['author'];
    $cat=$res['category'];
    $pages=$res['pages'];
    $descrip=$res['descrip'];
    $pic=$res['img'];
}
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
	<div class="container">
	<br>
	    <div class="row">
		   <div class="col-lg-12 col-md-12">
		     <form dir="rtl"  action="" method="post" enctype="multipart/form-data">
             <div class="form-group">
               <label for="exampleInputEmail1" class="black">اسم الكتاب</label>
               <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $name; ?>">
             </div>
             <div class="form-group">
              <label for="exampleInputPassword1" class="black">اسم المؤلف</label>
              <input type="text" name="author" class="form-control" id="exampleInputPassword1" value="<?php echo $author; ?>">
             </div>
			 <div class="form-group">
              <label for="exampleInputPassword1" class="black">الفئة</label>
               <select name="cat">
			     <option value="<?php echo $cat; ?>"><?php echo $cat; ?></option>
			     <option value="literature">literature</option>
				 <option value="science">science</option>
			   </select>
             </div>
			 <div class="form-group">
               <label for="exampleInputEmail1" class="black">عدد الصفحات</label>
               <input type="text" name="pages" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $pages; ?>">
             </div>
			 <div class="form-group">
              <label for="exampleInputPassword1" class="black">الوصف</label>
              <textarea class="form-control" name="descrip" id="exampleInputPassword1"><?php echo $descrip; ?></textarea>
             </div>
			 <div class="form-group">
              <label for="exampleInputPassword1" class="black">الصورة الحالية</label>
                <center><img src="../img/<?php echo $pic; ?>"  style="width:180px; height:auto;" /></center>
             </div>
			 <div class="form-group">
              <label for="exampleInputPassword1" class="black">الصورة</label>
              <input type="file" name="fileToUpload" class="form-control" id="fileToUpload">
             </div>
             <input type="submit" value="تعديل" name="edit" class="btn btn-primary">
			 <?php
			 if(isset($_POST['edit'])){
				 $name=$_POST['name'];
				 $author=$_POST['author'];
				 $cat=$_POST['cat'];
				 $pages=$_POST['pages'];
				 $descrip=$_POST['descrip'];
				 $fileToUpload=$_FILES['fileToUpload']['name'];
				 $uploaddir='../img/';
				 $uploadfile=$uploaddir . basename($_FILES['fileToUpload']['name']);
				 if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$uploadfile)){
					 if($fileToUpload=='')
					 {$sql="update books set name='$name', author='$author', category='$cat', pages='$pages', descrip='$descrip', img='$pic' where id='$id'";}
					 else
					 {$sql="update books set name='$name', author='$author', category='$cat', pages='$pages', descrip='$descrip', img='$fileToUpload' where id='$id'";}
					 $ret=mysqli_query($connection,$sql);
					 if ($ret){
						 echo'تم التعديل بنجاح';
						 echo'<script>window.location.href="edit.php?id='.$id.'"</script>';
					 }
					 else
						 echo'فشل التعديل';
				 }
				 else{
					 if($fileToUpload=='')
					 {$sql="update books set name='$name', author='$author', category='$cat', pages='$pages', descrip='$descrip', img='$pic' where id='$id'";}
					 else
					 {$sql="update books set name='$name', author='$author', category='$cat', pages='$pages', descrip='$descrip', img='$fileToUpload' where id='$id'";}
					 $ret=mysqli_query($connection,$sql);
					 if ($ret){
						 echo'تم التعديل بنجاح';
						 echo'<script>window.location.href="edit.php?id='.$id.'"</script>';
					 }
					 else
						 echo'فشل التعديل';
				 }
			 }
			 ?>
			</form>
		   </div>
		</div>
	</div>
  </body>
</html>
