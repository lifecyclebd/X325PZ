<?php
	$servername = "localhost";
	$username = "mizianis_admin";
	$password = "BloodDonation123";
	$select_db = "mizianis_BloodDonation";
	
	// Create connection
	$conn = @mysqli_connect($servername, $username, $password, $select_db);
	
	// Check connection
	if(!$conn){
		die("connection failed: ".mysqli_connect_error());
	}
	//echo "Connected successfully";
	

							
?>
