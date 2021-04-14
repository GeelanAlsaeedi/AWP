<?php
include'../inc/conn.php';
$id=(int)$_GET['id'];
$sql="delete from books where id='$id'";
$ret=mysqli_query($connection,$sql);
if($ret)
header("Location:books.php");
?>