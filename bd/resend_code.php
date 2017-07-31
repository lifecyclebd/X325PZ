<?php
require_once("database_connect.php");
$phone = $_POST['phone'];
//$phone = "01923589277";
$code = $_POST['code'];
//$code = "36532";

	$sql = "update donors set 
			code = '".$code."'
			where phone = '".$phone."'";
	if(mysqli_query($conn, $sql)){
		if(mysqli_affected_rows($conn) == 1)
			echo "updated";
		else
			echo "error";
	}


?>