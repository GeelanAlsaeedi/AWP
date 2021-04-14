<?php
session_start();
$_SESSION['checkadmin']=0;
session_destroy();
header("Location:index.php");
?>