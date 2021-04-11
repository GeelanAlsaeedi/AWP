	<?php
	// Attempt to connect to MySQL and print out messages.
	if ($dbc = mysqli_connect('localhost', 'root',''))
	{
	 print'<p>Successfully connected to MySQL.</p>';
	 
	 // Try to select the database:
	 if(@mysqli_select_db($dbc,'gallery')){
		 print'<p> The database has been selected.<p>'; 
		 
	 }else{// Handle the error if the database couldn't be selected:
		 die('<p> Could not select the database because:<b>'.mysqli_error($dbc).'</b></p>');
		 $dbc = FALSE; 
	 }
	 
	}else {
	 print '<p>Could not connect to MySQL.</p>';
	}
	?>