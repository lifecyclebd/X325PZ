<?php
require_once("database_connect.php");
$phone = $_POST['phone'];
// $phone = "01523666656";
$code = $_POST['code'];
// $code = "43923";

	$sql = "update donors set 
			verification = '1',
			singup_steps = '2'
			where phone = '".$phone."' and code = '".$code."'";
	if(mysqli_query($conn, $sql)){
		if(mysqli_affected_rows($conn) == 1)
			echo "updated";
		else
			echo "error";
	}


?>