<link rel="stylesheet" href="style.css" />
<?php

	$conn = new mysqli("localhost", "mysql", "your_password" , "irctc","3306");
	if ($conn->connect_error) 
	{
 		die("Connection failed: " . $conn->connect_error);
	} 
?>