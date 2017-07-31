<?php
require_once("database_connect.php");
$phone = $_POST['phone'];
//$phone = "01923589277";
$password = $_POST['password'];
//$code = "23456";

	$sql = "update donors set password = '".$password."' where phone = '".$phone."';";
	if(mysqli_query($conn, $sql)){
		if(mysqli_affected_rows($conn) == 1)
			echo "updated";
		else
			echo "error";
	}


?>