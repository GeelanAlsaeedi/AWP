<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>Retrieve Artist</title>
</head><body>
<?php // Script 12.5 - add_entry.php (This script adds a blog entry to the database).
// Address error handling.
ini_set ('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);
// Connect and select.	
if ($dbc = @mysqli_connect ('localhost', 'root', '00000000')) {				
if (!@mysqli_select_db ($dbc, 'gallery')) {
die ('<p>Could not select the database because: <b>' . mysqli_error($dbc) . '</b></p>');
}		
} 
else {		
die ('<p>Could not connect to MySQL because: <b>' . mysqli_error($dbc) . '</b></p>');
}			
// Define the query---Retrieve .	

$query = 'SELECT  first_name ln FROM artist_info 	 ';
if ($r = mysqli_query ($dbc, $query)) {
  // Run the query.
  // Retrieve and print every record.
  while ($row = mysqli_fetch_array ($r)) {
  print "<p><h3>{$row['ln']}</h3>"; }}
  else { // Query didn't run.
  die ('<p>Could not retrieve the data because: <b>' . mysqli_error($dbc) . "</b>. The query was $query.</p>");}

mysqli_close($dbc); 

 
// Display the form.
?>
</body>
</html>

