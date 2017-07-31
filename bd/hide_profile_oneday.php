<?php
require_once("database_connect.php");
$phone = $_POST['phone'];
$autopro_visible = $_POST['autopro_visible'];
//$phone = "01923589277";
//$fcm_token = $_POST['fcm_token'];
//$code = "23456";

	$sql = "update donors set 
	autopro_visible = '".$autopro_visible."',
	pro_visible = 0 
	where phone = '".$phone."';";
	if(mysqli_query($conn, $sql)){
		if(mysqli_affected_rows($conn) == 1)
			echo "updated";
		else
			echo "error";
	}


?>