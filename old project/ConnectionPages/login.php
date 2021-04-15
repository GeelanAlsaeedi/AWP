<?php
include'../connection.php';
ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);

	if (isset($_POST['sign_in'])){

		if((!empty($_POST['userName'])) && (!empty($_POST['password']))){
			$userName=$_POST['userName'];
			$password=$_POST['password'];
			
			// To protect MySQL injection (more detail about MySQL injection)
			$userName = stripslashes($userName);
			$password = stripslashes($password);
			
			$query="SELECT * FROM artist_info WHERE user_name='$userName' AND password='$password'";
			
			if ($r=mysqli_query($dbc, $query)){
				// Retrieve and print every record:
				//print '<p>Your loged in successfaully!</p>';
				while ($row = mysqli_fetch_array($r)) {
				 
				 //print"<p><h3>{$row['user_name']}</h3></p>";
					session_start();
					$_SESSION['loggedin'] = true;
					$_SESSION['userName'] = $userName;
				
					header('Location: ProfilePage.php');
					exit();
				}
			}
			 print '<p>User name or password incorrect</p>';
			
		}else{
			print'<p> Please fill all the required fieleds</p>';
		}
	}
?>