<?php
require_once("database_connect.php");
$phone = $_POST['phone'];
$called_date = $_POST['called_date'];
$called_today = $_POST['called_today'];

	$sql = "update donors set 
			called_date = '".$called_date."',
			called_today = '".$called_today."'
			where phone = '".$phone."';";
	if(mysqli_query($conn, $sql)){
		if(mysqli_affected_rows($conn) == 1)
			echo "updated";
		else
			echo "error";
	}


?>