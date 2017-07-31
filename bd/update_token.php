<?php
require_once("database_connect.php");
$phone = $_POST['phone'];
//$phone = "01923589277";
$fcm_token = $_POST['fcm_token'];
//$code = "23456";

	$sql = "update donors set fcm_token = '".$fcm_token."' where phone = '".$phone."'";
	if(mysqli_query($conn, $sql)){
		echo "updated";
	}


?>