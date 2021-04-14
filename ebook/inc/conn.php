<html>
 <head>
	<meta charset="utf-8" />
 </head>
 <body>
	<?php
	$connection=mysqli_connect("localhost","root","","ebook");
	 if(!$connection)
	  echo"فشل الاتصال بقاعدة البيانات";
	?>
 </body>
</html>