<?php
session_start();
$_SESSION['user']='';
$_SESSION['check']=0;
header("Location:index.php");
?>