<?php
require_once("database_connect.php");

$phone = $_POST['phone'];
$fcm_email = $_POST['fcm_email'];
$fcm_uid = $_POST['fcm_uid'];

// $phone = "01923589277";
// $fcm_email = "test@gmail.com";
// $fcm_uid = "12345678";


	$sql = "update donors set 
	fcm_email = '".$fcm_email."',
	fcm_uid = '".$fcm_uid."'
	 where phone = '".$phone."'";
	if(mysqli_query($conn, $sql)){
		echo "updated";
	}


?>